<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::create([
        'image'=>'/images/all.jpg',
        'category_id'=>1
        ]);
        Slide::create([
        'image'=>'/images/dop-p1.png',
        'category_id'=>1
        ]);
        Slide::create([
        'image'=>'/images/ippcall.jpg',
        'category_id'=>1
        ]);
        Slide::create([
        'image'=>'/images/ippcall.jpg',
        'product_id'=>1
        ]);
        Slide::create([
        'image'=>'/images/ippcall.jpg',
        'product_id'=>1
        ]);
    }
}
