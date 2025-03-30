<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\AreaTypeEnums;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [
            [
                'id' => 1,
                'country_id' => 1,
                'parent_id' => null,
                'slug'  => 'north-west',
                'alias' => null,
                'label' => 'North West',
                'type' => AreaTypeEnums::PROVINCE,
                'tag' => null
            ],
            [
                'id' => 2,
                'country_id' => null,
                'parent_id' => 1,
                'slug'  => 'bojanala-discrict',
                'alias' => null,
                'label' => 'Bojanala District Municipality',
                'type' => AreaTypeEnums::MUNICIPALITY,
                'tag' => 'discrict'
            ],
            [
                'id' => 3,
                'country_id' => null,
                'parent_id' => 2,
                'slug'  => 'rustenburg-local',
                'alias' => 'RLM',
                'label' => 'Rustenburg Local Municipality',
                'type' => AreaTypeEnums::MUNICIPALITY,
                'tag' => 'local'
            ],
        ];

        foreach ($seeds as $seed) {
            \App\Models\Area::create($seed);
        }
    }
}
