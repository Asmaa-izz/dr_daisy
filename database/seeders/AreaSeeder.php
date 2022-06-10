<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    public function run()
    {
        $listAreas = [
            'Zamalek',
            '1st Settlement',
            '2nd Settlement',
            '3rd Settlement',
            '5th Settlement (New cairo)',
            'Maadi',
            'Garden city',
            'Nasr city',
            'Heliopolis',
            '6th of October City',
            'Downtown',
            'Manial',
            'Haram (Pyramids area)',
            'Mohandiseen',
            'El Rehab',
            ];

        foreach ($listAreas as $item ) {
            Area::firstOrCreate(['name' => $item]);
        }

    }
}
