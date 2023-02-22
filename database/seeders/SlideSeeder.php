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
            'image'=>'/images/lode.jpg',
            'category_id'=>2
        ]);
        Slide::create([
            'image'=>'/images/dop-d1.jpg',
            'category_id'=>2
        ]);
        Slide::create([
            'image'=>'/images/madbull.jpg',
            'category_id'=>2
        ]);
        Slide::create([
            'image'=>'/images/dop-k1.png',
            'category_id'=>3
        ]);
        Slide::create([
            'image'=>'/images/dop-k4.png',
            'category_id'=>3
        ]);
        Slide::create([
            'image'=>'/images/dop-k2.jpg',
            'category_id'=>3
        ]);
        Slide::create([
            'image'=>'/images/ppp2.jpg',
            'category_id'=>4
        ]);
        Slide::create([
            'image'=>'/images/ppp4.jpg',
            'category_id'=>4
        ]);
        Slide::create([
            'image'=>'/images/ppp3.jpg',
            'category_id'=>4
        ]);
        Slide::create([
            'image'=>'/images/klishe_dlya_tisneniya2.jpg',
            'category_id'=>6
        ]);
        Slide::create([
            'image'=>'/images/udarn2.jpg',
            'category_id'=>7
        ]);
        Slide::create([
            'image'=>'/images/udarn3.jpg',
            'category_id'=>7
        ]);
        Slide::create([
            'image'=>'/images/burger_2.jpg',
            'category_id'=>8
        ]);
        Slide::create([
            'image'=>'/images/burger4.jpg',
            'category_id'=>8
        ]);
        Slide::create([
            'image'=>'/images/nk1000s.jpg',
            'category_id'=>9
        ]);
        Slide::create([
            'image'=>'/images/termo.jpg',
            'category_id'=>9
        ]);
        Slide::create([
            'image'=>'/images/vet.jpg',
            'category_id'=>10
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
