<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\StructureStatusEnums;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [
            [
                'id' => 1,
                'area_id' => 3,
                'region_id' => 1,
                'slug' => 'tlhabane',
                'name' => 'Tlhabane',
                'status' => StructureStatusEnums::ACTIVE
            ],
        ];

        foreach ($seeds as $seed) {
            \App\Models\Branch::create($seed);
        }
    }
}
