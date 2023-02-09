<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SubProductSeeder;
use Database\Seeders\CategoryOptionsSeeder;
use Database\Seeders\CategoryHaracteristicsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CategorySeeder::class]);
        $this->call([ProductSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([CategoryHaracteristicsSeeder::class]);
        $this->call([CategoryOptionsSeeder::class]);
    }
}
