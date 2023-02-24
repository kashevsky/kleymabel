<?php

namespace Database\Seeders;

use App\Models\CategoryOptions;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryOptions::create([
            'image'=>'images/termo2.jpg',
            'h3'=>'Штамп на нагревателе',
            'content'=>'Электрическое устройство для нагрева клише мощностями 500 и 1000Вт. Предназначено специально для клеймения паллет.',
            'category_id'=> 1
        ]);
        CategoryOptions::create([
            'image'=>'images/rchka.jpg',
            'h3'=>'Штамп на ручке',
            'content'=>'Основание устанавливается на ручку. Нагрев производится от источника открытого огня: газовой горелки, костра или плиты.',
            'category_id'=> 1
        ]);
        CategoryOptions::create([
            'image'=>'images/po_derevu2.jpg',
            'h3'=>'Клеймо на паяльнике',
            'content'=>'Штамп греется путем включения паяльника в розетку. Время нагрева: 7-12 минут в зависимости от размера клейма.',
            'category_id'=> 2
        ]);
        CategoryOptions::create([
            'image'=>'images/po_derevu3.png',
            'h3'=>'Клеймо на ручке',
            'content'=>'Клеймо греется от открытого огня. Время нагрева: 4-7 минут в зависимости от площади штампа.',
            'category_id'=> 2
        ]);
        CategoryOptions::create([
            'image'=>'images/narug.jpg',
            'h3'=>'Печать с внешней гравировкой',
            'content'=>'Символы на сургучном оттиске будут вдавлены внутрь. Тип: клише.',
            'category_id'=> 4
        ]);
        CategoryOptions::create([
            'image'=>'images/vnutr.jpg',
            'h3'=>'Печать с внутренней гравировкой',
            'content'=>'Символы на сургучном оттиске будут выступать наружу. Стандартный вариант изделия.',
            'category_id'=> 4
        ]);
    }
}
