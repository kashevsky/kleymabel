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
