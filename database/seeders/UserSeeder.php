<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {

        $adminRole = Role::where('name', 'Admin')->first()->id;
        $petOwnerRole = Role::where('name', 'Pet owner')->first()->id;
        $doctorRole = Role::where('name', 'Doctor')->first()->id;
        $hostRole = Role::where('name', 'Host')->first()->id;

        User::firstOrCreate(['email' =>'admin@admin.com'],[
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            'remember_token' => Str::random(10),
            'ssn' => '######',
            'phone' => '######',
            'birth_date' => date("Y-m-d"),
            'role_id' => $adminRole,
        ]);

        User::factory()->count(5)->create([
            'role_id' => $petOwnerRole,
        ]);

        User::factory()->count(5)->create([
            'role_id' => $doctorRole,
        ]);

        User::factory()->count(5)->create([
            'role_id' => $hostRole,
        ]);



    }
}
