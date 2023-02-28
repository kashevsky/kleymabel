<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Haracteristics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HaracteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Haracteristics::create([
            'parameter'=>'Глубина гравировки',
            'value'=>'1,2 мм',
            'category_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Ширина основания',
            'value'=>'12 мм',
            'category_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Материал',
            'value'=>'Латунь',
            'category_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Нагрев',
            'value'=>'Электрический / от огня',
            'category_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Срок изготовления',
            'value'=>'4 дня',
            'category_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Глубина гравировки',
            'value'=>'1,2 мм',
            'category_id'=>2,
        ]);
        Haracteristics::create([
            'parameter'=>'Ширина основания',
            'value'=>'12 мм',
            'category_id'=>2,
        ]);
        Haracteristics::create([
            'parameter'=>'Материал',
            'value'=>'Латунь',
            'category_id'=>2,
        ]);
        Haracteristics::create([
            'parameter'=>'Нагрев',
            'value'=>'Электрический / от огня',
            'category_id'=>2,
        ]);
        Haracteristics::create([
            'parameter'=>'Срок изготовления',
            'value'=>'4 дня',
            'category_id'=>2,
        ]);
        Haracteristics::create([
            'parameter'=>'Глубина гравировки',
            'value'=>'1,2 мм',
            'category_id'=>3,
        ]);
        Haracteristics::create([
            'parameter'=>'Ширина основания',
            'value'=>'12 мм',
            'category_id'=>3,
        ]);
        Haracteristics::create([
            'parameter'=>'Материал',
            'value'=>'Латунь',
            'category_id'=>3,
        ]);
        Haracteristics::create([
            'parameter'=>'Нагрев',
            'value'=>'Электрический / от огня',
            'category_id'=>3,
        ]);
        Haracteristics::create([
            'parameter'=>'Срок изготовления',
            'value'=>'4 дня',
            'category_id'=>3,
        ]);
        Haracteristics::create([
            'parameter'=>'Глубина гравировки',
            'value'=>'0.7 - 1.1 мм',
            'category_id'=>4,
        ]);
        Haracteristics::create([
            'parameter'=>'Форма',
            'value'=>'Круг / Овал',
            'category_id'=>4,
        ]);
        Haracteristics::create([
            'parameter'=>'Материал',
            'value'=>'Латунь',
            'category_id'=>4,
        ]);
        Haracteristics::create([
            'parameter'=>'Диаметры',
            'value'=>'20-50 мм',
            'category_id'=>4,
        ]);
        Haracteristics::create([
            'parameter'=>'Срок изготовления',
            'value'=>'2 дня',
            'category_id'=>4,
        ]);
        Haracteristics::create([
            'parameter'=>'Цвета',
            'value'=>'Красный, зеленый, коричневый, оранжевый, синий',
            'category_id'=>5,
        ]);
        Haracteristics::create([
            'parameter'=>'Исполнение',
            'value'=>'В стержнях или кусках',
            'category_id'=>5,
        ]);
        Haracteristics::create([
            'parameter'=>'Состав',
            'value'=>'Смола, воск, краситель',
            'category_id'=>5,
        ]);
        Haracteristics::create([
            'parameter'=>'Металл',
            'value'=>'Латунь / магний',
            'category_id'=>6,
        ]);
        Haracteristics::create([
            'parameter'=>'Нагрев',
            'value'=>'Горелка / паяльник',
            'category_id'=>6,
        ]);
        Haracteristics::create([
            'parameter'=>'Гарантия',
            'value'=>'1 год',
            'category_id'=>6,
        ]);
        Haracteristics::create([
            'parameter'=>'Материал',
            'value'=>'Сталь',
            'category_id'=>7,
        ]);
        Haracteristics::create([
            'parameter'=>'Закалка',
            'value'=>'56 единиц',
            'category_id'=>7,
        ]);
        Haracteristics::create([
            'parameter'=>'Гравировка',
            'value'=>'1,1 - 1,3 мм',
            'category_id'=>7,
        ]);
        Haracteristics::create([
            'parameter'=>'Срок изготовления',
            'value'=>'4 дня',
            'category_id'=>7,
        ]);
        Haracteristics::create([
            'parameter'=>'Тип металла',
            'value'=>'Латунь',
            'category_id'=>8,
        ]);
        Haracteristics::create([
            'parameter'=>'Держатель',
            'value'=>'Ручка',
            'category_id'=>8,
        ]);
        Haracteristics::create([
            'parameter'=>'Гарантия',
            'value'=>'1 год',
            'category_id'=>8,
        ]);
        Haracteristics::create([
            'parameter'=>'Мощность',
            'value'=>'500 / 1000 Wt',
            'category_id'=>9,
        ]);
        Haracteristics::create([
            'parameter'=>'Напряжение',
            'value'=>'220 V',
            'category_id'=>9,
        ]);
        Haracteristics::create([
            'parameter'=>'Длина провода',
            'value'=>'1,5 М',
            'category_id'=>9,
        ]);
        Haracteristics::create([
            'parameter'=>'Количество тэн',
            'value'=>'2 / 4',
            'category_id'=>9,
        ]);
        Haracteristics::create([
            'parameter'=>'Маетриал основания',
            'value'=>'Латунь',
            'category_id'=>10,
        ]);
        Haracteristics::create([
            'parameter'=>'Ручка',
            'value'=>'Металлическая',
            'category_id'=>10,
        ]);
        Haracteristics::create([
            'parameter'=>'Фиксация ручки',
            'value'=>'Резьба',
            'category_id'=>10,
        ]);
        Haracteristics::create([
            'parameter'=>'Ширина основания',
            'value'=>'12 мм',
            'product_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Материал',
            'value'=>'Латнуь',
            'product_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Ширина основания',
            'value'=>'12 мм',
            'product_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Оснастка',
            'value'=>'Ручка / паяльник / нагреватель',
            'product_id'=>1,
        ]);

    }
}
