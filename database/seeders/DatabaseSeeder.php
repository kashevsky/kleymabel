<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SlideSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SubProductSeeder;
use Database\Seeders\HaracteristicsSeeder;
use Database\Seeders\CategoryOptionsSeeder;
use Database\Seeders\WebsiteRedirectsSeeder;
use Database\Seeders\CategoryPortfolioSeeder;

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
        $this->call([HaracteristicsSeeder::class]);
        $this->call([CategoryOptionsSeeder::class]);
        $this->call([SlideSeeder::class]);
        $this->call([MainPortfolioSeeder::class]);
        $this->call([WebsiteRedirectsSeeder::class]);
        $this->call([CategoryPortfolioSeeder::class]);

    }
}
