<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title'=>'Клеймо для поддонов IPPC',
            'meta_title'=>'Клеймо фитосанитарное IPPC для паллет и поддонов заказать в Минске',
            'description'=>'Производство фитосанитарных клейм для паллет под заказ в Минске. Фумигационные штампы всех видов и размеров, нагреватели клише. Доставка по Беларусии.',
            'preview_image'=>'images/ippc.jpeg',
            'main_image'=>'images/ippc.jpeg',
            'content'=>'',
            'price'=>92,
            'slug'=>'kleymo_ippc',
            'category_id'=>1,
            'sub_products_ids'=>'3,4'
        ]);
        Product::create([
            'title'=>'Клеймо для поддонов EUR',
            'meta_title'=>'Клеймо для европоддонов и паллет EUR заказать в Минске',
            'description'=>'Производство клейм для европоддонов EUR. Штампы и клише для выжигания на паллетах Евро под заказ на ручках или электрических нагревателях.',
            'preview_image'=>'images/eur.png',
            'main_image'=>'images/eur.png',
            'content'=>'Знак «EUR» на поддоне означает, что данное изделие произведено в Европе и соответствует всем европейским стандартам. Отжиг «EUR» на паллетах обязателен, если необходимо отправлять продукцию в европейские страны. Без данного знака экспорт осуществить невозможно.
            Нанесение знака производится посредством отжига. Отгравированное клише разогревается при помощи огня или электричества до температуры выше 300 градусов, после чего прислоняется к дереву. Контакт осуществляется на 5 секунд, после чего получается отжиг. Размер изделия: 100 х 60 мм, сделано из латунного сплава. Использование латуни в качестве материала более оправдано, чем стали. Себестоимость гравировки на стали высока, так как данный материал имеет высокую жесткость. Достичь данной жесткости проще и дешевле при усилении штампа: фиксации на нем металлической пластины. Данная вариация позволяет избежать деформации основания.
            Существует альтернатива нанесения: при помощи краски. Такие клейма для тиснения поддонов изготавливаются из резины. Для нанесения основание обмахивается в краску и ставится на паллету. Однако данный способ не обеспечивает сохранного оттиска и не во всех случаях позволяет идентифицировать поддон.
            Как осуществить нагрев
            Для электрического нагрева клейма используют термоустановку или паяльник. Термоустановки имеются двух видов:
            500 Wt
            1000 Wt
            Совет: паяльник для нагрева данных штампов не подходит. Минимальная мощность нагревателя для разогрева штампов таких размеров - 300 Wt. Такие паяльники оснащены керамическим основанием, которое отличается низким ресурсом. После 50 отжигов керамика трескается, после чего передача тепла снижается в два раза.
            Если необходим максимально дешевый вариант нагрева, то клеймо на ручке - идеальный вариант. Нагрев данного клише осуществляется следующим способом:
            Изделие берется за ручку
            Подносится к источнику открытого огня
            Нагрев производится 6-8 минут
            Сопутствующие товары',
            'price'=>114,
            'slug'=>'kleymo_eur',
            'category_id'=>1,
        ]);
        Product::create([
            'title'=>'Клеймо IPPC (номер партии, дата)',
            'meta_title'=>'Фитосанитарное клеймо (номер партии , дата) заказать в Минске',
            'description'=>'Производство фитосанитарных клейм с номером партии и датой в Минске. IPPC клейма всех видов и размеров.',
            'preview_image'=>'/images/nbr2.jpeg',
            'main_image'=>'/images/nbr2.jpeg',
            'content'=>'Фитосанитарное клеймо (IPPC) - размер 80х70мм включает в себя комплект сменных символов.
            1. 2х - значный номер партии
            2. Дата
            3. Месяц
            4. Год
            Для замены символа (например даты) нужно достать стопочную шпильку, положить в раз нужный символ и установить шпильку обратно, время замены составляет меньше минуты.
            Клеймо универсальное , оно легко крепиться к специальным нагревателям для клеймения поддонов НК500 и НК1000
            По заказу можем изготовить индивидуальное клеймо с 3х и 4х значным номером партии , индивидуальной формы или с логотипом компании
            Ветеринарные клейма и штампы',
            'price'=>530,
            'slug'=>'fitosanitarnoe_data',
            'category_id'=>1,
        ]);
        Product::create([
            'title'=>'Клеймо для поддонов UIC',
            'meta_title'=>'Клеймо для поддонов и европоддонов UIC',
            'description'=>'Заказать клеймо для паллет UIC в Минске. Варианты нагрева: ручка, электрический нагреватель.',
            'preview_image'=>'/images/UIC.jpg',
            'main_image'=>'/images/UIC.jpg',
            'content'=>'',
            'price'=>114,
            'slug'=>'kleymo_uic',
            'category_id'=>1,
        ]);
        Product::create([
            'title'=>'Фитосанитарный штамп для поддонов IPPC 40х70',
            'meta_title'=>'Клеймо IPPC размер 40х70 мм',
            'description'=>'Клеймо фумигационное для поддонов размером 4 х 7 СМ. Изготовление под заказ в течение 3 дней, материал: латунь.',
            'preview_image'=>'/images/ippc4070ht.png',
            'main_image'=>'/images/ippc4070ht.png',
            'content'=>'Латунное изделие с гравировкой глубиной не менее 2 мм. Греется при помощи источника открытого огня или от электрического нагревателя с тэнами. Возможно производство любых размеров, гравировка любых символов. Резбьба универсальная, позволяющая присоединить ручку или установку для нагрева клейм.',
            'price'=>90,
            'slug'=>'kleymo_ippc40x70',
            'product_id'=>1,
        ]);
        Product::create([
            'title'=>'Фитосанитарный штамп для поддонов IPPC 55х60',
            'meta_title'=>'Фитосанитарный штамп размером 55х60 мм',
            'description'=>'Фитосанитарный штамп типа IPPC размером 5х6 СМ. Предназначен для клеймения паллет. Оснащается ручкой или электрическим нагревателем.',
            'preview_image'=>'/images/ippc4070ht.png',
            'main_image'=>'/images/ippc4070ht.png',
            'content'=>'Латунное изделие с гравировкой глубиной не менее 2 мм. Греется при помощи источника открытого огня или от электрического нагревателя с тэнами. Возможно производство любых размеров, гравировка любых символов. Резбьба универсальная, позволяющая присоединить ручку или установку для нагрева клейм.',
            'price'=>90,
            'slug'=>'kleymo_ippc55x60',
            'product_id'=>1
        ]);
        Product::create([
            'title'=>'Фитосанитарный штамп для поддонов IPPC 55х80',
            'meta_title'=>'Штамп для клеймения поддонов размером 55х80 мм',
            'description'=>'Латунный штамп IPPC размером 55 х 80 мм. Используется для нанесения отжигов на поддоны. Изготавливается под заказ.',
            'preview_image'=>'/images/ippc5580.png',
            'main_image'=>'/images/ippc5580.png',
            'content'=>'Латунное изделие с гравировкой глубиной не менее 2 мм. Греется при помощи источника открытого огня или от электрического нагревателя с тэнами. Возможно производство любых размеров, гравировка любых символов. Резбьба универсальная, позволяющая присоединить ручку или установку для нагрева клейм.',
            'price'=>90,
            'slug'=>'kleymo_ippc55x80',
            'product_id'=>1
        ]);
        Product::create([
            'title'=>'Фитосанитарный штамп для поддонов IPPC 70х80',
            'meta_title'=>'Клише из латуни фимигационное IPPC 7х8 СМ',
            'description'=>'Металлическое клише с гравировкой, предназначенное для нанесения оттисков на поддоны. Срок изготовления: 3 дня. Доставка/самовывоз.',
            'preview_image'=>'/images/ippc7080.png',
            'main_image'=>'/images/ippc7080.png',
            'content'=>'Латунное изделие с гравировкой глубиной не менее 2 мм. Греется при помощи источника открытого огня или от электрического нагревателя с тэнами. Возможно производство любых размеров, гравировка любых символов. Резбьба универсальная, позволяющая присоединить ручку или установку для нагрева клейм.',
            'price'=>90,
            'slug'=>'kleymo_ippc70x80',
            'product_id'=>1
        ]);
        Product::create([
            'title'=>'Клеймо ударное для заводов',
            'meta_title'=>'Клейма для заводов заказать в Минске',
            'description'=>'Производство клейм для заводов в Минске с доставкой по Беларуси. Гравировка под заказ, закалка. Стоимость: 160 рублей.',
            'preview_image'=>'/images/udarn4.jpg',
            'main_image'=>'/images/udarn4.jpg',
            'content'=>'',
            'price'=>135,
            'slug'=>'kleymo_dlya_zavodov',
            'category_id'=>7
        ]);
        Product::create([
            'title'=>'Клеймо ударное для сварщиков',
            'meta_title'=>'Ударные клейма для сварщиков заказать в Минске',
            'description'=>'Производство ударных клейм для сварщиков в Минске. Клейма с заказлкой и индивидуальной гравировкой под заказ. Стоимость: 135 рублей.',
            'preview_image'=>'/images/svar.jpg',
            'main_image'=>'/images/svar.jpg',
            'content'=>'',
            'price'=>135,
            'slug'=>'kleymo_dlya_svarscikov',
            'category_id'=>7
        ]);
        Product::create([
            'title'=>'Клеймо ударное для мастеров',
            'meta_title'=>'Ударное клеймо для ремеслеников купить в Минске',
            'description'=>'Изготовление ударных клейм по металлу для ремесленников в Минске под заказ. Гравировка и закалка.',
            'preview_image'=>'/images/udarn5.jpg',
            'main_image'=>'/images/udarn5.jpg',
            'content'=>'',
            'price'=>120,
            'slug'=>'kleymo_dlya_masterov',
            'category_id'=>7
        ]);
        Product::create([
            'title'=>'Клеймо ударное для баллонов',
            'meta_title'=>'Ударные клейма для баллонов с закалкой в Минске',
            'description'=>'Производство ударных клейм для клеймения баллонов в Минске. Изготовление любых размеров с разной степенью закалки.',
            'preview_image'=>'/images/ballon2.jpeg',
            'main_image'=>'/images/ballon2.jpeg',
            'content'=>'',
            'price'=>120,
            'slug'=>'kleymo_dlya_ballonov',
            'category_id'=>7
        ]);
        Product::create([
            'title'=>'Клеймо ударное номерное / буквенное',
            'meta_title'=>'Ударное клеймо c номерами и буквами заказать в Минске',
            'description'=>'Изготовление ударных клейм с номерами или буквами в Минске. Возможность закалки, любого вида гравировки.',
            'preview_image'=>'/images/udarn7.jpeg',
            'main_image'=>'/images/udarn7.jpeg',
            'content'=>'',
            'price'=>113,
            'slug'=>'kleymo_bukvennoe',
            'category_id'=>7
        ]);
        Product::create([
            'title'=>'По индивидуальному макету',
            'meta_title'=>'Печать для сургуча по индивидуальному макету заказчика купить в Минске',
            'description'=>'Изготовление печатей для сургуча по личному рисунку заказчика. Собственное производства, любые размеры, широкий ассортимент сургуча.',
            'preview_image'=>'/images/pechati.jpeg',
            'main_image'=>'/images/pechati.jpeg',
            'content'=>'',
            'price'=>40,
            'slug'=>'surguchnye_pechati_po_maketu',
            'category_id'=>4
        ]);
        Product::create([
            'title'=>'Готовые',
            'meta_title'=>'Готовые сургучные печати с гравировкой',
            'description'=>'Готовые сургучные печати с гравировкой купить в Минске. Доставка почтой / курьером',
            'preview_image'=>'/images/pechat.jpg',
            'main_image'=>'/images/pechat.jpg',
            'content'=>'',
            'price'=>27,
            'slug'=>'gotovye_surguchnye_pechati',
            'category_id'=>4
        ]);
        Product::create([
            'title'=>'Заготовки под сургучную печать',
            'meta_title'=>'Купить заготовку под сургучную печать',
            'description'=>'Продажа заготовок под сургучные печати в Минске',
            'preview_image'=>'/images/pechatpust.jpg',
            'main_image'=>'/images/pechatpust.jpg',
            'content'=>'',
            'price'=>15,
            'slug'=>'zagotovki_pod_pechat',
            'category_id'=>4
        ]);
        Product::create([
            'title'=>'Сургучный оттиск',
            'meta_title'=>'Сургучный оттиск на подарок или конверт',
            'description'=>'Нанесение сургучных оттисков на конверты, коробки. Стоимость: 2 рубля.',
            'preview_image'=>'/images/ottisc.jpg',
            'main_image'=>'/images/ottisc.jpg',
            'content'=>'',
            'price'=>2,
            'slug'=>'surguchnyi_ottisc',
            'category_id'=>4
        ]);
        Product::create([
            'title'=>'Клише для тиснения кожи',
            'meta_title'=>'',
            'description'=>'Клише для тиснеия кожи',
            'preview_image'=>'/images/kozga.png',
            'main_image'=>'/images/kozga.png',
            'content'=>'',
            'price'=>55,
            'slug'=>'kleyma_po_kozhe',
            'category_id'=>6
        ]);
        Product::create([
            'title'=>'Клише по дереву',
            'meta_title'=>'',
            'description'=>'Клише по дереву',
            'preview_image'=>'/images/kozga.png',
            'main_image'=>'/images/kozga.png',
            'content'=>'',
            'price'=>65,
            'slug'=>'kleyma_po_derevu',
            'category_id'=>6
        ]);
        Product::create([
            'title'=>'Клише для тиснения блокнотов',
            'meta_title'=>'Заказать клише для тиснения блокнотов в Минске',
            'description'=>'Производство клише для тиснения блокнотов в Минске',
            'preview_image'=>'/images/blocknot.jpg',
            'main_image'=>'/images/blocknot.jpg',
            'content'=>'',
            'price'=>60,
            'slug'=>'klishe_dlya_bloknotov',
            'category_id'=>6
        ]);
        Product::create([
            'title'=>'Клише для тиснения мыла',
            'meta_title'=>'Производство клише для мыла в Минске',
            'description'=>'Производство клише для мыла в Минске под заказ на латуни или магнии',
            'preview_image'=>'/images/mylo.png',
            'main_image'=>'/images/mylo.png',
            'content'=>'',
            'price'=>55,
            'slug'=>'klishe_dlya_myla',
            'category_id'=>6
        ]);
        Product::create([
            'title'=>'Клише AIRBAG',
            'meta_title'=>'Изготовление клише типа Airbag в Минске с доставкой',
            'description'=>'Заказать клише AIRBAG в минске из магния или латуни на ручке / паяльнике',
            'preview_image'=>'/images/airbag.jpg',
            'main_image'=>'/images/airbag.jpg',
            'content'=>'',
            'price'=>58,
            'slug'=>'klishe_airbag',
            'category_id'=>6
        ]);
        Product::create([
            'title'=>'Клише для тиснения этикеток',
            'meta_title'=>'Заказать клише для тиснения этикеток под заказ',
            'description'=>'Клише для тиснения этикеток купить в Минске. Собственное производство, индивидуальные макеты.',
            'preview_image'=>'/images/eticketka.png',
            'main_image'=>'/images/eticketka.png',
            'content'=>'',
            'price'=>58,
            'slug'=>'klishe_dlya_etiketok',
            'category_id'=>6
        ]);
        Product::create([
            'title'=>'Клише для тиснения на пластике',
            'meta_title'=>'Клише для тиснения на пластике под заказ в Минске',
            'description'=>'Клише для тиснения на пластике по индивидкальному макету заказчика. Доставка по все Беларуси почтой / курьером.',
            'preview_image'=>'/images/na_plasticke.jpg',
            'main_image'=>'/images/na_plasticke.jpg',
            'content'=>'',
            'price'=>65,
            'slug'=>'klishe_dlya_plastika',
            'category_id'=>6
        ]);
        Product::create([
            'title'=>'Клише для тиснения фольгой',
            'meta_title'=>'Клише для тиснения фольгой купить в Минске',
            'description'=>'Клише для тиснения фольгой под заказ. Гравировка по индивидуальному макету.',
            'preview_image'=>'/images/folgoi.jpg',
            'main_image'=>'/images/folgoi.jpg',
            'content'=>'',
            'price'=>70,
            'slug'=>'klishe_dlya_tisneniya_folgoy',
            'category_id'=>6
        ]);
        Product::create([
            'title'=>'Клише для тиснения визиток',
            'meta_title'=>'Клише для тиснения визиток заказать в Минске',
            'description'=>'Клише для тиснения визиток под заказ',
            'preview_image'=>'/images/vizitok.png',
            'main_image'=>'/images/vizitok.png',
            'content'=>'',
            'price'=>58,
            'slug'=>'klishe_dlya_tisneniya_vizitok',
            'category_id'=>6,
        ]);
        Product::create([
            'title'=>'Термоустановка НК-500',
            'meta_title'=>'Устройство для нагрева клейм мощностью в 500 Вт от производителя',
            'description'=>'Изготовление устройств для нагрева клейм и штампов. Нгреватели клейм для поддонов, клише и штампов НК-500, НК-1000. Доставка, собственное производство.',
            'preview_image'=>'/images/nk500s.jpg',
            'main_image'=>'/images/nk500s.jpg',
            'content'=>'',
            'price'=>365,
            'slug'=>'nagrevatel_klishe_nk-500',
            'category_id'=>9,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Термоустановка НК-1000',
            'meta_title'=>'Устройство для нагрева клейм для поддонов мощностью в 1000 Вт',
            'description'=>'Электрические установки для нагрева клейм. Термоустановки собственного производства с гарантией.',
            'preview_image'=>'/images/nk1000s.jpg',
            'main_image'=>'/images/nk1000s.jpg',
            'content'=>'',
            'price'=>610,
            'slug'=>'nagrevatel_klishe_nk-1000',
            'category_id'=>9,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Нагреватель с регулятором мощности',
            'meta_title'=>'Нагреватель клейм с регулятором мощности заказать в Минске',
            'description'=>'Нагреватель с регулятором мощности. Собственное производство, доставка.',
            'preview_image'=>'/images/nagm.jpg',
            'main_image'=>'/images/nagm.jpg',
            'content'=>'',
            'price'=>820,
            'slug'=>'nagrevatel_klishe_s_regulyatorom',
            'category_id'=>9,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Паяльник',
            'meta_title'=>'Паяльник для клейм купить в Минске',
            'description'=>'Паяльник для клейм и клише. Паяльники мощностью 100 - 300 Вт с оснасткой-переходником под клеймо.',
            'preview_image'=>'/images/100vt.jpeg',
            'main_image'=>'/images/100vt.jpeg',
            'content'=>'',
            'price'=>820,
            'slug'=>'payalnik',
            'category_id'=>9,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч красный',
            'meta_title'=>'Сургуч красного цвета купить в Минске с доставкой',
            'description'=>'Красный сургуч для нанесения оттисков сургучной печатью купить в Минске. Доставка почтой наложенным платежом или курьером.',
            'preview_image'=>'/images/krasns1.jpg',
            'main_image'=>'/images/krasns1.jpg',
            'content'=>'',
            'price'=>14,
            'slug'=>'surguch_krasnyj',
            'category_id'=>5,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч синий',
            'meta_title'=>'Сургуч банковский синего цвета купить в Минске',
            'description'=>'Сургуч синий',
            'preview_image'=>'/images/siniy1.jpg',
            'main_image'=>'/images/siniy1.jpg',
            'content'=>'',
            'price'=>17,
            'slug'=>'surguch_sinij',
            'category_id'=>5,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч зеленый',
            'meta_title'=>'Сургуч зеленого цвета купить в Минске',
            'description'=>'Сургуч зеленый',
            'preview_image'=>'/images/zelen1.png',
            'main_image'=>'/images/zelen1.png',
            'content'=>'',
            'price'=>17,
            'slug'=>'surguch_zelenyj',
            'category_id'=>5,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч коричневый',
            'meta_title'=>'Сургуч коричневого цвета купить в Минске',
            'description'=>'Сургуч коричневый',
            'preview_image'=>'/images/korich.jpg',
            'main_image'=>'/images/korich.jpg',
            'content'=>'',
            'price'=>14,
            'slug'=>'surguch_korichnevyj',
            'category_id'=>5,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч оранжевый',
            'meta_title'=>'Сургуч оранжевого цвета купить в Минске',
            'description'=>'Сургуч оранжевый',
            'preview_image'=>'/images/orang.jpg',
            'main_image'=>'/images/orang.jpg',
            'content'=>'',
            'price'=>17,
            'slug'=>'surguch_oranzhevyj',
            'category_id'=>5,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч в стержне красный',
            'meta_title'=>'Сургуч стержневого типа красный купить в Минске',
            'description'=>'Сургуч в стержне красный',
            'preview_image'=>'/images/sterg_kr.jpg',
            'main_image'=>'/images/sterg_kr.jpg',
            'content'=>'',
            'price'=>1.5,
            'slug'=>'surguch_v_sterjne_krasnyj',
            'category_id'=>5,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч в стержне коричневый',
            'meta_title'=>'Сургуч в стержне коричневый купить в Минске с доставкой.',
            'description'=>'Сургуч в стержне коричневый',
            'preview_image'=>'/images/sterg_kor.jpg',
            'main_image'=>'/images/sterg_kor.jpg',
            'content'=>'',
            'price'=>1.5,
            'slug'=>'surguch_v_sterjne_korichnevyj',
            'category_id'=>5,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч в стержне синий',
            'meta_title'=>'Сургуч синего цвета с стержнях купить в Минске',
            'description'=>'Сургуч в стержне синий',
            'preview_image'=>'/images/sterg_sin.jpeg',
            'main_image'=>'/images/sterg_sin.jpeg',
            'content'=>'',
            'price'=>1.5,
            'slug'=>'surguch_v_sterjne_sinij',
            'category_id'=>5,
            'is_stamp'=>0,
        ]);
        Product::create([
            'title'=>'Сургуч в стержне оранжевый',
            'meta_title'=>'Сургуч оранжевый в стержне для нанесения сургучных оттисков',
            'description'=>'Сургуч в стержне оранжевый',
            'preview_image'=>'/images/sterg_or.jpg',
            'main_image'=>'/images/sterg_or.jpg',
            'content'=>'',
            'price'=>1.5,
            'slug'=>'surguch_v_sterjne_oranjevyj',
            'category_id'=>5
        ]);
        Product::create([
            'title'=>'Сургуч в стержне зеленый',
            'meta_title'=>'Стержневой сургуч зеленого цвета купить в Минске',
            'description'=>'Сургуч в стержне зеленый',
            'preview_image'=>'/images/sterg_zel.jpg',
            'main_image'=>'/images/sterg_zel.jpg',
            'content'=>'',
            'price'=>1.5,
            'slug'=>'surguch_v_sterjne_zelenyj',
            'category_id'=>5
        ]);
        Product::create([
            'title'=>'Клеймо для мяса "Ветнадзор"',
            'meta_title'=>'Клеймо овальной формы Ветнадзор (ветеринарный штамп)',
            'description'=>'Производство ветеринарных клейм овальной формы и клише для мяса и туш в Минске с доставкой по Беларуси.',
            'preview_image'=>'/images/vet_main.jpg',
            'main_image'=>'/images/vet_main.jpg',
            'content'=>'',
            'price'=>90,
            'slug'=>'kleymo_vetnadzor',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Ветеринарный штамп "Ветслужба финноз"',
            'meta_title'=>'Клеймо для мяса ветеринарный штамп Финноз купить в Минске',
            'description'=>'Купить ветеринарный штамп Финноз в Миснке. Собственное производство, срочное изготовление.',
            'preview_image'=>'/images/finnoz.jpg',
            'main_image'=>'/images/finnoz.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'veterunarnyj_shtamp_finnoz',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Ветеринарный штамп "Ветслужба на уничтожение"',
            'meta_title'=>'Клеймо для мяса Ветеринарный штамп На уничтожение заказать с доставкой',
            'description'=>'Купить ветеринарный штамп На уничтожение латунный с гравировкой в Миснке. Быстрое изготовление.',
            'preview_image'=>'/images/na_unicht.jpg',
            'main_image'=>'/images/na_unicht.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'veterunarnyj_shtamp_na_unichtojenie',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Ветеринарный штамп "Ветслужба туберкулез"',
            'meta_title'=>'Клеймо для мяса(ветеринарный штамп) Туберкулез под заказ',
            'description'=>'Купить ветеринарный штамп Ветслужба туберкулез в Миснке. Изготовление под заказ.',
            'preview_image'=>'/images/tuberk.jpg',
            'main_image'=>'/images/tuberk.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'veterunarnyj_shtamp_teberkulez',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Ветеринарный штамп "Ветслужба на вареную колбасу"',
            'meta_title'=>'Ветеринарный штамп "Ветслужба на вареную колбасу"',
            'description'=>'
            Купить ветеринарный штамп На вареную колбасу в Миснке. Ассортиимент ветеринарных клейм.',
            'preview_image'=>'/images/na_varenuy.jpg',
            'main_image'=>'/images/na_varenuy.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'veterunarnyj_shtamp_na_kolbasu',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Ветеринарный штамп "Утиль"',
            'meta_title'=>'Клеймо для мяса Ветслужба - утиль',
            'description'=>'Купить ветеринарный штамп Ветслужба - утиль в Миснке. Изготовление за 3-4 дня.',
            'preview_image'=>'/images/util.jpg',
            'main_image'=>'/images/util.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'veterunarnyj_shtamp_util',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Клеймо для мяса "МБ"',
            'meta_title'=>'Клеймо для мяса МБ',
            'description'=>'Клеймо для мяса "МБ"',
            'preview_image'=>'/images/mb.jpg',
            'main_image'=>'/images/mb.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'kleymo_dlya_myasa_mb',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Клеймо для мяса "ВБ"',
            'meta_title'=>'Клеймо для мяса "ВБ"',
            'description'=>'Клеймо для мяса "ВБ"',
            'preview_image'=>'/images/vb.jpg',
            'main_image'=>'/images/vb.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'kleymo_dlya_myasa_vb',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Клеймо для мяса "Т"',
            'meta_title'=>'Клеймо для мяса "Т"',
            'description'=>'Клеймо для мяса "Т"',
            'preview_image'=>'/images/t.jpg',
            'main_image'=>'/images/t.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'kleymo_dlya_myasa_t',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Клеймо для мяса "С"',
            'meta_title'=>'Клеймо для мяса "С"',
            'description'=>'Клеймо для мяса "С"',
            'preview_image'=>'/images/c.jpg',
            'main_image'=>'/images/c.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'kleymo_dlya_myasa_c',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Клеймо для мяса "З"',
            'meta_title'=>'Клеймо для мяса "З"',
            'description'=>'Клеймо для мяса "З"',
            'preview_image'=>'/images/e.jpg',
            'main_image'=>'/images/e.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'kleymo_dlya_myasa_z',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Клеймо для мяса "П"',
            'meta_title'=>'Клеймо для мяса "П"',
            'description'=>'Клеймо для мяса "П"',
            'preview_image'=>'/images/p.jpg',
            'main_image'=>'/images/p.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'kleymo_dlya_myasa_p',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Клеймо для мяса "МК"',
            'meta_title'=>'Клеймо для мяса "МК"',
            'description'=>'Клеймо для мяса "МК"',
            'preview_image'=>'/images/mk.jpg',
            'main_image'=>'/images/mk.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'kleymo_dlya_myasa_mk',
            'category_id'=>10
        ]);
        Product::create([
            'title'=>'Клеймо для мяса фигурное',
            'meta_title'=>'Клеймо для мяса фигурное',
            'description'=>'Клеймо для мяса фигурное',
            'preview_image'=>'/images/figurnoe.jpg',
            'main_image'=>'/images/figurnoe.jpg',
            'content'=>'',
            'price'=>100,
            'slug'=>'kleymo_dlya_myasa_figurnoe',
            'category_id'=>10
        ]);
    }
}
