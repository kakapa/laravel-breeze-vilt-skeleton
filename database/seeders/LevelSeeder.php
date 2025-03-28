<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [
            [
                'id'    => 1,
                'slug'  => 'branch',
                'label' => 'Branch',
            ],
            [
                'id'    => 2,
                'slug'  => 'sc',
                'label' => 'Street Committee',
            ],
            [
                'id'    => 3,
                'slug'  => 'bec',
                'label' => 'Branch Executive',
            ],
        ];

        foreach ($seeds as $seed) {
            \App\Models\Level::create($seed);
        }
    }
}
