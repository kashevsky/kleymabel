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
            'parameter'=>'Глубина гравировка',
            'value'=>'1,2 мм',
            'category_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Ширина основания',
            'value'=>'12 мм',
            'category_id'=>1,
        ]);
        Haracteristics::create([
            'parameter'=>'Ширина основания',
            'value'=>'12 мм',
            'product_id'=>1,
        ]);
    }
}
