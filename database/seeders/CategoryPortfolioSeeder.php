<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryPortfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryPortfolio::create([
            'category_id'=>1,
            'image'=>'/images/poddons1.jpg',
            'alt'=>'Клеймо для поддонов на ручке латунное IPPC',
            'title'=>'Клеймо для поддонов итосанитарное IPPC на ручке',
        ]);
        CategoryPortfolio::create([
            'category_id'=>1,
            'image'=>'/images/poddons2.jpg',
            'alt'=>'Клейма для поддонов EUR и EPAL без ручек',
            'title'=>'Клейма для поддонов EUR и EPAL латунные',
        ]);
        CategoryPortfolio::create([
            'category_id'=>1,
            'image'=>'/images/poddons3.jpg',
            'alt'=>'Клеймо для поддонов Колосок на ручке',
            'title'=>'Клеймо фитосанитарное колосок на ручке',
        ]);
        CategoryPortfolio::create([
            'category_id'=>1,
            'image'=>'/images/poddons4.jpg',
            'alt'=>'Клеймо для поддонов EPAL без ручки латунное',
            'title'=>'Клеймо для поддонов EPAL фото без ручки',
        ]);
        CategoryPortfolio::create([
            'category_id'=>1,
            'image'=>'/images/poddons5.jpg',
            'alt'=>'Клеймо для поддонов фитосанитарное фото квадратное',
            'title'=>'Клеймо для поддонов квадратное фитосанитарное',
        ]);
        CategoryPortfolio::create([
            'category_id'=>1,
            'image'=>'/images/poddons6.jpg',
            'alt'=>'Клеймо для поддонов EUR',
            'title'=>'Клеймо для выжигания на поддонах EUR',
        ]);
        CategoryPortfolio::create([
            'category_id'=>1,
            'image'=>'/images/poddons7.jpg',
            'alt'=>'2 клейма для поддонов IPPC',
            'title'=>'2 клейма для поддонов IPPC на ручках',
        ]);
        CategoryPortfolio::create([
            'category_id'=>1,
            'image'=>'/images/poddons8.jpg',
            'alt'=>'Клейма для поддонов EUR и IPPC 2 штуки',
            'title'=>'Клейма для поддонов EUR и IPPC 2 штуки',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/1q.jpg',
            'alt'=>'Клеймо для выжигания по дереву da grill',
            'title'=>'Клеймо для выжигания по дереву da grill',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/2q.jpg',
            'alt'=>'Клеймо для выжигания по дереву Пчаляр',
            'title'=>'Клеймо для выжигания по дереву Пчаляр',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/3q.jpg',
            'alt'=>'Клеймо для выжигания по дереву CHASHIN',
            'title'=>'Клеймо для выжигания по дереву CHASHIN',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/4q.jpg',
            'alt'=>'Клеймо для выжигания по дереву Звездочка',
            'title'=>'Клеймо для выжигания по дереву Звездочка',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/5q.jpg',
            'alt'=>'Клеймо для выжигания по дереву BLACKSUN',
            'title'=>'Клеймо для выжигания по дереву BLACKSUN',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/6q.jpg',
            'alt'=>'Клеймо для выжигания по дереву ROBINWOOD',
            'title'=>'Клеймо для выжигания по дереву ROBINWOOD',
        ]);
        CategoryPortfolio::create([
            'category_id'=>'2',
            'image'=>'images/8q.jpg',
            'alt'=>'Клеймо для выжигания по дереву GAICHUK',
            'title'=>'Клеймо для выжигания по дереву GAICHUK',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/9q.jpg',
            'alt'=>'Клеймо для выжигания по дереву DUCK',
            'title'=>'Клеймо для выжигания по дереву DUCK',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/10q.jpg',
            'alt'=>'Клеймо для выжигания по дереву L',
            'title'=>'Клеймо для выжигания по дереву L',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/13q.jpg',
            'alt'=>'Отжиг клеймом по дереву',
            'title'=>'Отжиг клеймом по дереву',
        ]);
        CategoryPortfolio::create([
            'category_id'=>2,
            'image'=>'images/14q.jpg',
            'alt'=>'Клеймо для выжигания по дереву на паяльнике',
            'title'=>'Клеймо для выжигания по дереву на паяльнике',
        ]);
        CategoryPortfolio::create([
            'category_id'=>7,
            'image'=>'images/udr1.jpg',
            'alt'=>'Клеймо ударное по металлу ',
            'title'=>'Клеймо ударное для металла каленное ',
        ]);
        CategoryPortfolio::create([
            'category_id'=>7,
            'image'=>'images/udr2.jpg',
            'alt'=>'Клеймо ударное металлическое',
            'title'=>'Клеймо ударное металлическое с закалкой',
        ]);
        CategoryPortfolio::create([
            'category_id'=>7,
            'image'=>'images/udr3.jpg',
            'alt'=>'Клеймо клеймо ударное для оттисков по металлу',
            'title'=>'Клеймо ударное для оттисков по металлу',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe1.png',
            'alt'=>'Печать сургучная с двумя оттисками',
            'title'=>'Печать для сургуча с оттисками ',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe2.png',
            'alt'=>'Печать печать сургучная с оттиском на зеленом пластилине',
            'title'=>'Печать для сургуча с нанесенным оттиском на пластилине',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe3.png',
            'alt'=>'Печать для сургуча новогодняя часы',
            'title'=>'Печать сургучная новогодняя с часами',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe4.png',
            'alt'=>'Печать для сургуча и кондитерских изделий',
            'title'=>'Печать для сургуча и кондитерских изделий ',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe5.png',
            'alt'=>'Печать сургучная и 3 оттиска',
            'title'=>'Печать для сургуча и 3 оттиска',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe6.png',
            'alt'=>'Печать для сургуча и оттиск на черном пластилине ',
            'title'=>'Печать сургучная с темным оттиском ',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe7.png',
            'alt'=>'Печать для сургуча светлица',
            'title'=>'Печать сургучная Светлица',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe8.png',
            'alt'=>'Печать сургучная с лисой',
            'title'=>'Печать для сургуча с лисой ',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe9.png',
            'alt'=>'Печать для сургуча OLD TATOO',
            'title'=>'Печать OLD TOO сургучная',
        ]);
        CategoryPortfolio::create([
            'category_id'=>4,
            'image'=>'images/pe10.png',
            'alt'=>'Печать сургучная в процессе гравировки ',
            'title'=>'Печать сургучная в процессе гравировки ',
        ]);
    }
}
