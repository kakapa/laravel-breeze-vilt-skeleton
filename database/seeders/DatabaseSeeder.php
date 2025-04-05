<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            IncidentTypeSeeder::class,
            RoleSeeder::class,
            LevelSeeder::class,
            AreaSeeder::class,
            RegionSeeder::class,
            BranchSeeder::class,
            OccupationSeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            WardSeeder::class,
        ]);
    }
}
