<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [
            [
                'id'    => 1,
                'name' => 'Protest',
            ],
            [
                'id'    => 2,
                'name' => 'Accident',
            ],
            [
                'id'    => 3,
                'name' => 'No Electricity',
            ],
            [
                'id'    => 4,
                'name' => 'Cable Theft',
            ],
            [
                'id'    => 5,
                'name' => 'Pipe Burst',
            ],
        ];

        foreach ($seeds as $seed) {
            \App\Models\IncidentType::create($seed);
        }
    }
}
