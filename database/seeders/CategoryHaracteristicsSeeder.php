<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryHaracteristics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryHaracteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryHaracteristics::create([
            'parameter'=>'Глубина гравировка',
            'value'=>'1,2 мм',
            'category_id'=>1,
        ]);
        CategoryHaracteristics::create([
            'parameter'=>'Ширина основания',
            'value'=>'12 мм',
            'category_id'=>1,
        ]);
    }
}
