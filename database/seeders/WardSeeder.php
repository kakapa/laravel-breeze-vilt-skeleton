<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [];
        for ($c = 1; $c <= 50; $c++) {
            array_push($seeds, [
                'id'    => $c,
                'name'  => $c,
            ]);
        }

        foreach ($seeds as $seed) {
            $ward = \App\Models\Ward::create($seed);
            $ward->areas()->attach(3);
        }
    }
}
