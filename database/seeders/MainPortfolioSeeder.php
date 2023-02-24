<?php

namespace Database\Seeders;

use App\Models\MainPortfolio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MainPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainPortfolio::create([
            'image'=>'images/produb.jpg',
            'alt'=>'Клеймо для выжигания по дереву Продуб',
            'title'=>'Клеймо для выжигания по дереву Продуб',
        ]);
        MainPortfolio::create([
            'image'=>'images/burger_1.jpg',
            'alt'=>'Клеймо для бургеров',
            'title'=>'Клеймо для бургеров',
        ]);
        MainPortfolio::create([
            'image'=>'images/madbull.jpg',
            'alt'=>'Клеймо для выжигания по дереву Madbull',
            'title'=>'Клеймо для выжигания по дереву Madbull',
        ]);
        MainPortfolio::create([
            'image'=>'images/lode.jpg',
            'alt'=>'Клеймо для выжигания по дереву Лодэ',
            'title'=>'Клеймо для выжигания по дереву Лодэ',
        ]);
        MainPortfolio::create([
            'image'=>'images/klishe_dlya_ticneniya.jpg',
            'alt'=>'Клише для тиснения',
            'title'=>'Клише для тиснения',
        ]);
        MainPortfolio::create([
            'image'=>'images/kzg1.jpg',
            'alt'=>'Клише для тиснения',
            'title'=>'Клише для тиснения',
        ]);
    }
}
