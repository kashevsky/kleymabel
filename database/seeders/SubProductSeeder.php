<?php

namespace Database\Seeders;

use App\Models\SubProduct;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubProduct::create([
            'title'=>'Фитосанитарный штамп для поддонов IPPC 40х70',
            'description'=>'Фитосанитарный штамп для поддонов IPPC 40х70',
            'preview_image'=>'http://kleymabel.by/ippc4070ht.png',
            'content'=>'Латунное изделие с гравировкой глубиной не менее 2 мм. Греется при помощи источника открытого огня или от электрического нагревателя с тэнами. Возможно производство любых размеров, гравировка любых символов. Резбьба универсальная, позволяющая присоединить ручку или установку для нагрева клейм.',
            'price'=>90,
            'engraving_depth'=>'1.2 мм',
            'material'=>'Латунь',
            'width'=>'12 мм',
            'accessories'=>'На ручке/нагревателе',
            'form'=>'',
            'garanty'=>'1 год',
            'slug'=>'kleymo_ippc40x70',
            'product_id'=>1,
        ]);
        SubProduct::create([
            'title'=>'Фитосанитарный штамп для поддонов IPPC 55х60',
            'description'=>'Фитосанитарный штамп для поддонов IPPC 55х60',
            'preview_image'=>'http://kleymabel.by/ippc4070ht.png',
            'content'=>'Латунное изделие с гравировкой глубиной не менее 2 мм. Греется при помощи источника открытого огня или от электрического нагревателя с тэнами. Возможно производство любых размеров, гравировка любых символов. Резбьба универсальная, позволяющая присоединить ручку или установку для нагрева клейм.',
            'price'=>90,
            'engraving_depth'=>'1.2 мм',
            'material'=>'Латунь',
            'width'=>'12 мм',
            'accessories'=>'На ручке/нагревателе',
            'form'=>'',
            'garanty'=>'1 год',
            'slug'=>'kleymo_ippc55x60',
            'product_id'=>1,
        ]);
    }
}
