<?php

namespace Database\Seeders;

use App\Models\Breed;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    public function run()
    {
        $listBreeds = [
            'Cat',
            'Dog',
            'Bird',
            'Fish',
            'Hamster',
            'Rabbit',
        ];

        foreach ($listBreeds as $item ) {
            Breed::firstOrCreate(['name' => $item]);
        }
    }
}
