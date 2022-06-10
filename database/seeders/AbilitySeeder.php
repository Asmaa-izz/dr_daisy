<?php

namespace Database\Seeders;

use App\Models\Ability;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    public function run()
    {
        Ability::firstOrCreate(['name' => 'crud_breed']);
        Ability::firstOrCreate(['name' => 'crud_area']);
    }
}
