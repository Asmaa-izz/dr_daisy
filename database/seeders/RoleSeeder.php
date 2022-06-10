<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'client']);
        Role::firstOrCreate(['name' => 'doctor']);
        Role::firstOrCreate(['name' => 'host']);


        $adminRole = Role::where('name','=','admin')->first();
        $adminRole->allowTo([
            'crud_breed', 'crud_area'
        ]);
    }
}
