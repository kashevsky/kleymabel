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
        'category_id'=>1,
        'alt'=>'Клейма для поддонов всех видов с нагревателем',
        'title'=>'Клейма для клеймения поддонов - изображение',
        ]);
        Slide::create([
        'image'=>'/images/ippc.jpeg',
        'category_id'=>1,
        'alt'=>'Клеймо для клеймения поддонов типа ippc',
        'title'=>'Клеймо для клеймения поддонов и паллет типа ippc',
        ]);
        Slide::create([
        'image'=>'/images/ippcall.jpg',
        'category_id'=>1,
        'alt'=>'Клеймо для поддонов без нагревателя',
        'title'=>'Изображение клейма для поддонов без нагреваетля',
        ]);
        Slide::create([
            'image'=>'/images/termo.jpg',
            'category_id'=>1,
            'alt'=>'Установка для нагрева клейм для поддонов',
            'title'=>'Устройство для нагрева клейм для поддонов',
        ]);
        Slide::create([
            'image'=>'/images/eur.png',
            'category_id'=>1,
            'alt'=>'Клеймо для поддонов типа EUR',
            'title'=>'Клеймо для европоддонов EUR',
        ]);
        Slide::create([
            'image'=>'/images/lode.jpg',
            'category_id'=>2,
            'alt'=>'Клеймо для выжигания по дереву Лодэ',
            'title'=>'Клеймо для дерева Лодэ',
        ]);
        Slide::create([
            'image'=>'/images/dop-d1.jpg',
            'category_id'=>2,
            'alt'=>'Клеймо для выжигания по дереву Искусство точения',
            'title'=>'Клеймо по дереву Искусство точения',
        ]);
        Slide::create([
            'image'=>'/images/madbull.jpg',
            'category_id'=>2,
            'alt'=>'Клеймо для дерева Madbull',
            'title'=>'Клеймо для выжигания по дереву Madbull',
        ]);
        Slide::create([
            'image'=>'/images/drv1.jpg',
            'category_id'=>2,
            'alt'=>'Клеймо для выжигания по дереву на ручке',
            'title'=>'Клеймо по дереву на ручке',
        ]);
        Slide::create([
            'image'=>'/images/knp.jpg',
            'category_id'=>2,
            'alt'=>'Клеймо для выжигания по дереву на паяльнике',
            'title'=>'Клемо по дереву на паяльнике',
        ]);
        Slide::create([
            'image'=>'/images/rs.jpg',
            'category_id'=>2,
            'alt'=>'Клеймо по дереву на ручке RS',
            'title'=>'Клеймо по дереву RS с ручкой',
        ]);
        Slide::create([
            'image'=>'/images/dop-k1.png',
            'category_id'=>3,
            'alt'=>'Штамп для тиснения кожи набрного типа',
            'title'=>'Клеймо для кожи наборного типа',
        ]);
        Slide::create([
            'image'=>'/images/dop-k4.png',
            'category_id'=>3,
            'alt'=>'Клеймо для тиснения кожи на паяльнике',
            'title'=>'Клеймо по коже на паяльнике',
        ]);
        Slide::create([
            'image'=>'/images/dop-k2.jpg',
            'category_id'=>3,
            'alt'=>'Клеймо для тиснения кожи на ручке',
            'title'=>'Клеймо для тиснения кожи на ручке',
        ]);
        Slide::create([
            'image'=>'/images/dop-k3.jpg',
            'category_id'=>3,
            'alt'=>'Клеймо для тиснения кожи Веска Лайф с ручкой',
            'title'=>'Клеймо для тиснения на коже Веска Лайф',
        ]);
        Slide::create([
            'image'=>'/images/kzg2.jpg',
            'category_id'=>3,
            'alt'=>'Клеймо для тиснения на кожанных изделиях',
            'title'=>'Клеймо для коженных изделий с ручкой',
        ]);
        Slide::create([
            'image'=>'/images/po_kozge_main.jpg',
            'category_id'=>3,
            'alt'=>'Клеймо для тиснения блокнотов',
            'title'=>'Клеймо для тиснения коданныз блокнотов на ручке',
        ]);
        Slide::create([
            'image'=>'/images/ppp2.jpg',
            'category_id'=>4,
            'alt'=>'Сургучная печать XLR',
            'title'=>'Сургучная печать для оттисков с внешнй гравировкой',
        ]);
        Slide::create([
            'image'=>'/images/ppp4.jpg',
            'category_id'=>4,
            'alt'=>'Печать сургучная с оттиском на пластилине',
            'title'=>'Печать для нанесения сургучных оттисков',
        ]);
        Slide::create([
            'image'=>'/images/ppp3.jpg',
            'category_id'=>4,
            'alt'=>'Печать для сургуча новогодня с оленем',
            'title'=>'Новогодня сургучная печать с оттиском',
        ]);
        Slide::create([
            'image'=>'/images/dop-s1.jpg',
            'category_id'=>4,
            'alt'=>'Набор сургучных печатей',
            'title'=>'Комплект сургучных печатей',
        ]);
        Slide::create([
            'image'=>'/images/dop-s2.jpg',
            'category_id'=>4,
            'alt'=>'Печать сургучная диаметром 40 мм',
            'title'=>'Печать для сургуча 40 мм',
        ]);
        Slide::create([
            'image'=>'/images/klishe_dlya_tisneniya2.jpg',
            'category_id'=>6,
            'alt'=>'Клише для тиснения кожи',
            'title'=>'Клише для тиснения на ручке',
        ]);
        Slide::create([
            'image'=>'/images/udarn2.jpg',
            'category_id'=>7,
            'alt'=>'Клеймо ударное металлическое',
            'title'=>'Клеймо ударного типа по металлу',
        ]);
        Slide::create([
            'image'=>'/images/udarn3.jpg',
            'category_id'=>7,
            'alt'=>'Клеймо ударное по металлу каленное',
            'title'=>'Клеймо по металлу ударное с закалкой',
        ]);
        Slide::create([
            'image'=>'/images/burger_2.jpg',
            'category_id'=>8,
            'alt'=>'Клеймо для бургеров',
            'title'=>'Клеймо для бургеров на ручке',
        ]);
        Slide::create([
            'image'=>'/images/burger4.jpg',
            'category_id'=>8,
            'alt'=>'Клеймо для бургеров Pub 66',
            'title'=>'Клеймо для бургеров Pub 66 с ручкой',
        ]);
        Slide::create([
            'image'=>'/images/nk1000s.jpg',
            'category_id'=>9,
            'alt'=>'Устройство для нагрева клейм мощностью 1000 Вт',
            'title'=>'Устройство для нагрева клише, клейм и штампов',
        ]);
        Slide::create([
            'image'=>'/images/nagm.jpg',
            'category_id'=>9,
            'alt'=>'Устройство для нагрева клейм с терморегулированием',
            'title'=>'Нагреватель клейм и клише с терморегулированием',
        ]);
        Slide::create([
            'image'=>'/images/termo.jpg',
            'category_id'=>9,
            'alt'=>'Электрическая установка для нагрева клейм',
            'title'=>'Электрический нагреватель клейм',
        ]);
        Slide::create([
            'image'=>'/images/vet.jpg',
            'category_id'=>10,
            'alt'=>'Клеймо для мяса ветеринарное',
            'title'=>'Клеймо для мяса ветнадзор',
        ]);
        Slide::create([
            'image'=>'/images/ippc_1.jpg',
            'product_id'=>1,
            'alt'=>'Клеймо для поддоново типа IPPC',
            'title'=>'Клеймо для поддонов IPPC',
        ]);
        Slide::create([
            'image'=>'/images/ippc2.jpg',
            'product_id'=>1,
            'alt'=>'Фитосанитарное клеймо для клеймения поддонов',
            'title'=>'Клеймо для клеймения поддонов',
        ]);
        Slide::create([
            'image'=>'/images/eur_1.jpg',
            'product_id'=>2,
            'alt'=>'Клеймо для европоддонов EUR',
            'title'=>'Клеймо для европоддонов EUR без ручки',
        ]);
        Slide::create([
        'image'=>'/images/nbr1.jpeg',
        'product_id'=>3,
        'alt'=>'Клеймо для поддонов наборное с номером партии и датой',
        'title'=>'Клеймо для поддонов наборного типа',
        ]);
        Slide::create([
        'image'=>'/images/nbr3.jpeg',
        'product_id'=>3,
        'alt'=>'Клеймо для поддонов наборного типа',
        'title'=>'Наборное клеймо для поддонов',
        ]);
        Slide::create([
        'image'=>'/images/ippcall.jpg',
        'product_id'=>3,
        'alt'=>'Клеймо для поддонов IPPC',
        'title'=>'Клеймо для поддонов IPPC без ручки',
        ]);
    }
}
