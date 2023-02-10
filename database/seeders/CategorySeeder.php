<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title'=>'Клейма для поддонов',
            'description'=>'Клейма для поддонов',
            'preview_image'=>'http://kleymabel.by/all.jpg',
            'content'=>'Клеймо для поддонов - металлическое изделие, нагреваемое от электрической установки или открытого огня, предназначенное для нанесения отжигов на бобышках паллет. Наличие отжига подтверждает факт соответствия поддона стандартам паллетной ассоциации. Паллеты без наличия клейма считаются негодными для транспортировки продукции. Наличие штампа на них считается обязательным условием.
            Для транспортировки продукции в страны Европы на бобышке должен быть выжжен знак "EUR". Паллеты с данным знаком называются европоддонами. Для отправки товаров в Финляндию на дереве должен иметься отжиг "FIN". В паре с ним должен быть фумигационный штамп IPPC
            IPPC - маркировка, подтверждающая факт обработки европоддона от насекомых. Приставка DB означает что изделие прошло очистку от коры. На маркировке имеется изображение в виде колоска, с правой части индивидуальный номер организации и приставка "HT" - метод обработки.
            Для перевозки грузов в страны СНГ важно наличие клейма IPPC. Штампы EUR, EPAL и FIN не обязательны. Маркировка должна быть нанесена в виде отжига, так как краска стирается. Отжиг наносится двумя методами:
            При помощи термоустановки
            От газовой горелки
            Электрический нагреватель удобен для большого количества клеймений в производственных маштабах. Устройство включается в розетку, после чего в течение 7-10 минут греется клише. Далее ставятся оттиски методом прислонения клейма к поддону. Устройство оснащено двумя деревянными ручками, весить до 3кг, оснащено выключаетелем с подсветкой и предохранителем.
            Более дешевый вариант изготовления - на деревянной ручке с металлическим основанием. Клеймо нагревается от огня в течение 7-9 минут, после чего наносятся отжиги. Данный вариант удобен при создании до 30 отжигов в сутки. Для исключения вероятности выгибания латунного основания изготавливается усиление. Усиление - металлическое основание, установленное на клейме. Данное основание позволяет повысить жесткость изделия в 4 раза.
            Запрещается охлаждать раскаленное изделие погружением в воду, бросать на пол, поливать жидкостью. Резкие перепады температур приводят к образованию трещин.
            Клеймабел занимается изготовлением клейм для поддонов для нанесения готового оттиска. Для изготовления паллет, их продажи и экспорта в ЕС, страны ближней Прибалтики и РФ требуется наличие специального обозначения (Фитосанитарное клеймо IPPC/ISPM 15). Оно является обязательным.
            Необходимо наличие (ippc маркировка):
            колоска с текcтом IPPC
            явновыраженнной рамки
            обозначение старны производителя
            кода предприятия, присвоенным фитосанитарным контролем
            HT - паллета прошла сушку
            DB - очистка от коры (необязательно)
            Изготовление производится на станке с программным управлением методом точной фрезировки. Процесс производства состоит из следующих этапов:
            Согласование макета
            Процесс гравирвоки
            Придание конечной формы
            Установка ручки или нагревателя',
            'price'=>90,
            'engraving_depth'=>'1.2 мм',
            'material'=>'Латунь',
            'width'=>'12 мм',
            'accessories'=>'',
            'form'=>'',
            'garanty'=>'1 год',
            'slug'=>'kleyma_dlya_poddonov',
            'short_desc'=>'Металлическое изделие, нагреваемое от электрической установки или открытого огня, предназначенное для нанесения отжигов на бобышках паллет.',
            'icon'=>'/images/pallet.svg',
            'icon_black'=>'/images/pallet-black.svg',
        ]);
        Category::create([
            'title'=>'Клейма по дереву',
            'description'=>'Клейма по дереву',
            'preview_image'=>'http://kleymabel.by/po_derevu.jpg',
            'content'=>'Клеймо для выжигания по дереву - это металлическое изделие, предназначенное для нанесения отжигов на деревянную поверхность. В качестве отжига служит индивидуальный логотип, номер телефона, инициалы, ссылка на сайт.
            Данное изделие оснащается металлической ручкой или паяльником. Штамп на ручке греется от горелки в течение 5-10 минут, после чего ставится пробный оттиск. Клише на паяльнике включается в розетку, после чего необходимо ждать 3-7 минут. После необходимого уровня нагрева паяльник выключается их розетки.
            Основание клейма производится из двух видов материалов:
            Латунь
            Магний
            Латунное основание для штампов получило большое распространения из-за прочности и хорошей подверженности гравировке. Жаростойкая структура предотвращает выгибание и деформацию. Для увеличение жесткости используется усиление: металлическое основание, которое фиксируется на штампе. Данная технология увеличивает тепловую емкость и жесткость.
            Магниевое клеймо - экономный вариант, обладающий меньшим уровнем жесткости. Данный материал больше подходит для тиснения кожи, блокнотов, мыла. Низкая стоимость обусловлена мягкостью материала: гравировать магний в 2 раза легче, чем латунь.
            Мы изготавливаем клеймо для дерева по индивидуальному макету заказчика. Вы отправляете нам рисунок или надпись, которую необходимо отгравировать, мы по ней делаем изделие. Гравировка производится на латуни шириной 12 мм. Возможно изготовление клише любых размеров, однако стоит учитывать, что для сложных макетов с большим количеством мелких линий необходимо использовать большее количество латуни.
            Клише для выжигания может оснащаться паяльником или шпилькой с ручкой. В зависимости от размера мы подбираем необходимую мощность паяльника, изготавливаем переходник, позволяющий фиксировать изделие на нем. Купить клеймо для дерева можно у нас за наличный или безналичный расчет. Можем осуществить доставку в пределах Беларуси службой доставки или по Минску курьером.',
            'price'=>60,
            'engraving_depth'=>'1.2 мм',
            'material'=>'Латунь',
            'width'=>'12 мм',
            'accessories'=>'',
            'form'=>'По желанию заказчика',
            'garanty'=>'1 год',
            'slug'=>'kleyma_po_derevu',
            'short_desc'=>'Металлическое изделие для нанесения отжигов на деревянных изделиях.',
            'icon'=>'/images/wood.svg',
            'icon_black'=>'/images/wood-black.svg',
        ]);
        Category::create([
            'title'=>'Тиснение на коже',
            'description'=>'Клише и клейма для тиснения на коже',
            'preview_image'=>'http://kleymabel.by/kozga.png',
            'content'=>'Клише для кожи - приспособление для нанесения оттисков на кожанные изделия. Альтернативные названия: штамп, клеймо. Изготавливается из латунного или магниевого сплава. В качестве оснастки служит паяльник мощностью от 100 до 300 ватт или ручка.
            Тиснение производится на коже через фольгу или без. Для нанесения оттиска штамп рекомендуется нагреть. Не рекомендуется перегревать изделие, так как оттиск выйдет нечитаемым.',
            'price'=>'65',
            'engraving_depth'=>'1.2',
            'material'=>'Латунь',
            'width'=>'',
            'accessories'=>'',
            'form'=>'',
            'garanty'=>'',
            'slug'=>'kleyma_po_kozhe',
            'short_desc'=>'Латунное изделие, позволяющее наносить оттиски на изделиях из кожи',
            'icon'=>'/images/wood.svg',
            'icon_black'=>'',
        ]);
        Category::create([
            'title'=>'Сургучные печати',
            'description'=>'Сургучные печати',
            'preview_image'=>'http://kleymabel.by/pechati.jpeg',
            'content'=>'Печать для сургуча - это латунное изделие, при помощи которого реализуются сургучные оттиски. Данные оттиски распространены на конвертах, пробках бутылок, пригласительных или подарках. На печать наносится гравировка, которая и создает сургучный оттиск.
            Оснащается данное изедие деревянной, латунной или металлической ручкой на резьбовом креплении. В качестве материала основания служит алюминий или латунь. Алюминиевые печати дешевле, так как проще гравируются, однако отличаются более низким качеством.
            Гравировка печати для нанесения сургучных оттисков производится на станке ЧПУ. Заказчик высылает макет в формате фото, после чего исполнитель его гравирует на печати. Распространенные размеры печатей для реализации оттисков на сургуче:
            25 мм
            30 мм
            40 мм
            50 мм
            При выборе размера печати стоит учитывать нюанс: больше диаметр - больше сургуча требуется для одного оттиска. Если макет сложный, имеет много линий, то на небольшом диаметре гравировка будет невидной. Чем больше мелких линий в макете, тем больше диаметр требуется. Для самых малых диаметров подойдут макеты типа инициалов, одной буквы, простого логотипа.',
            'price'=>'40',
            'engraving_depth'=>'1.2',
            'material'=>'Латунь',
            'width'=>'',
            'accessories'=>'',
            'form'=>'',
            'garanty'=>'',
            'slug'=>'surguchnye_pechati',
            'short_desc'=>'Данная печать позволяет наносить оттиск на сургуче',
            'icon'=>'/images/pechati.svg',
            'icon_black'=>'/images/pechati-black.svg',
        ]);
        Category::create([
            'title'=>'Сургуч',
            'description'=>'Сургуч',
            'preview_image'=>'http://kleymabel.by/surguch.jpeg',
            'content'=>'Сургуч используется для создания индивидуального оттиска сургучной печатью на конверте, пригласительной или посылке. Данное изделие распространено уже более 400 лет, что позволяет сделать сургучный оттиск антуражным. Самые распространенные цвета: красный и коричневый - идеально подходят под крафтовую бумагу и на белых конвертах. Для более современного вида оттиска используются нетрадиционные цвета типа оранжевого, розового, фиолетового.
            Сургуч состоит из смеси смолы, воска и красителя. В зависимости от пропорции данных компонентов сургуч делится на две основные категории:
            Полимерный
            Банковский
            Когда в составе сургуча имеется больше воска, чем смолы, он называется полимерным. Достоинством полимерного сургуча считается гибкость. Он не так сильно крошится и откалывается, как банковский. Иделально подойдет для пломбировки горлышек винных бутылок и посылок, которые будут отправляться на большие расстояния.
            Полимер дороже на 20% обычных сургучей и отличается более матовым цветом. Это стоит учитывать, так как полимерный оттиск выглядит не так антуражно, как банковский или почтовый. Выбор типа сургуча - компромисс между эстетикой и практичностью. Если необходимо реализовать оттиски на пригласительные или подарки, то лучше использовать почтовый сургуч. Если же конверты будут отправляться почтой на большие расстояния, то рекомендуется использовать полимерный.
            Классификация сургучей
            По типу сургучи классифицируются на следующие группы:
            В стержнях
            В кусках
            В стержнях с фитилем
            В гранулах
            В восковых стержнях
            Данная продукция в стержневом виде получила широкое распространение благодаря удобству нанесения оттиска. Для создания его потребуется взять стержень в руку и нагреть зажигалкой. Спустя 4-6 секунд расплавленный сургуч начнет капать на конверт. Сверху ставится оттиск. Рекомендуется перед каждым отииском промачивать печать в любом виде масла (подсолнечном, оливковом и т.д.) - это позволит избежать застревания воска в мелких порах печати.
            Одного сургучного стержня хватает на 5-7 оттисков в зависимости от размера печати. стоит учитывать: чем больше диаметр сургучной печати, тем больше будет расход. Стандартные размеры: 25-30мм. Прелесть продукции стержневого типа заключается в универсальности. Для плавления не требуется специальных емкостей и ложек. Данный стержень подходит в клеевой пистолет.
            Кусковой отличается низкой стоимостью - это идеальный вариант, если требуется большое количество оттисков за низкую стоимость. Главный недостаток: неудобство плавления. Для того, чтобы расплавить данный вид сургуча необходима металлическая емкость, которая будет греться от открытого огня или электричества. Некоторые используют кастрюлю.
            Продукт засыпается в емкость, после чего греется. Сургуч должен достичь жидкой консинстенции, но по вязкости похожей на мед. Если произвести перегрев, то он будет жидким, как вода. Это нежелательно, так как оттиск получится некачественным, следы на оттиске будут нечеткими или расплавятся вовсе. Перегерв данного изделия не сказывается негтивно на состоянии. Чтоыб вернуть субстанцию в исходное состояние требуется подождать 5-10 минут и возобновить попытку.
            В стержнях с фитилем - редкий вариант изделия. Проблема заключается в высокой стоимости. Это такой же сургуч, как в стержнях, лишь имеется внутри фитиль, однако стоимость выше в 4 раза. Наличие фитиля не делает использование стержня более удобным. Все равно его придется поджигать и тушить несколько раз подряд. Совет: лучше покупать сургуч в стержнях без фитиля, так как это будет выгоднее.
            Изделия в гранулах используются вместе с сургучной ложкой, которую мы также продаем. Принцип нанесения:
            В ложку кладется 2 гранулы
            Ложка греется свечкой или зажигалкой
            Расплавленный сургуч выливается на конверт
            Сургуч для бутылок
            Часто данный продукит используют мастера, занимающиеся производством вина, самогона или виски. Если макнуть в расплавленный сургуч горлышко бутылки, то получится антуражный внешний вид продукта, произведется защита пробки от попадания кислорода.
            Для бутылок рекомендуется испольтзовать не банковский а полимерный воск. Это позволит избежать образование трещин при транспортировке продукции. Альтернативный вариант использования сургуча для бутылок: подвешивать оттиск на шпагат из джут а. Для его создания необходимо расплавить воск, накапать на поверхность, протертую маслом и поставить сверху оттиск печатью. ТАк как поверхность промаслена, то оттиск не закореет и его можно взять. Предварительно на расплавленный сургуч нужно положить нить шпагата. Когда субстанция засохнет, то нить жестко зафиксируется. теперь за нить можно производить фиксацию оттиска на бутылке.
            Для большей эстетики на горлышко бутылки ставиитсья оттиск сургучной печатью. На данном изделии отгравирован индивидуальный логотип или инициалы производителя. Это позволит идентифицировать продукт, сделать его авторским и индивидуальным. Рекомендуемые цвета: крассный или коричневый.',
            'price'=>'12',
            'engraving_depth'=>'',
            'material'=>'Латунь',
            'width'=>'',
            'accessories'=>'',
            'form'=>'',
            'garanty'=>'',
            'slug'=>'surguch',
            'short_desc'=>'Сургуч',
            'icon'=>'/images/surguch.svg',
            'icon_black'=>'/images/surguch-black.svg',
        ]);
        Category::create([
            'title'=>'Клише для тиснения',
            'description'=>'Клише для тиснения',
            'preview_image'=>'http://kleymabel.by/klishe.jpeg',
            'content'=>'Изделие с латунным или магниевым основанием, которое используется для оставления оттисков на мягких и деревянных поверхностях. Создание отитсков прозиводится двумя методами:
            Горячим
            Холодным
            Для холодного тиснения необходим прес, производящий вдавливание. Данный метод позволяет сдеть четкий оттиск, однако стоимость пресса высока. Собственноручно поставить оттиск такого типа не получится, так как требуется большое давление. Важно знать: для кожзама используется исключительно холодное тииснение, так как горячее портит материал.
            Достоинство метода горячего тиснения в простоте. Для создания оттисков на продукции не трубется приобретать дорогостоящий пресс. Достаточно просто заказать клеймо, нагреть его до 60-70 градусов и ставить оттиски. Нагрева можно производить как от паяльника, так и от открытого огня. Из-за небольшой требуемой температуры для создания оттиска, рекомендуется приобретать клише на ручке. На паяльнике больше подходит для клеймения дерева.
            Клише делятся на следующие категории:
            Для дерева
            Для кожи
            Для пластика
            Для мыла
            Методика создания штампов для пластика, кожи и дерева одинаковая. Гравировка производится глубиной от 0,8 до 1,3 мм. Клише для мыла требует большей глубины (минимум 1,8 мм) чтобы при вдавливании оттиск был глубоким и читаемым. Материал основания: латунь или магний.
            Магнивое основание дешевле из-за меньшей прочности. Гравировка на данном материале в 2 раза быстрее за счет меньшей жесткости. Недостаток: при длительном использовании штамп выгибается из-за частых перепадов температур. Изготовление клише на стальном основании дороже на 80%, так как гравировка на данном материале приводит к быстрому изнеосы фрез.',
            'price'=>'58',
            'engraving_depth'=>'',
            'material'=>'Латунь',
            'width'=>'',
            'accessories'=>'',
            'form'=>'',
            'garanty'=>'',
            'slug'=>'klishe_dlya_tisneniya',
            'short_desc'=>'Клише для тиснения',
            'icon'=>'',
            'icon_black'=>'',
        ]);
        Category::create([
            'title'=>'Ударные клейма',
            'description'=>'Ударные клейма',
            'preview_image'=>'http://kleymabel.by/udarnye.jpeg',
            'content'=>'Наше предприятие имеет полный цикл технологического процесса изготовления ударных клейм:
            Муфельная печь для закалки
            Гравировальный станок ЧПУ
            Твердомер для определения степени закалки
            Токарный станок
            Каждое изделие проверяется на качество и соответствие стандартам жесткости. Перед отпуском штампа клиенту производится испытание изделия.
            В качестве основания используется заготовка с высоким содержанием углерода типа У8А или У9А. Важно, чтобы материал был углеродистым, иначе необходимую закалку будет произвести невозможно.
            Диаметр заготовки 24 мм. При изготовлении клейма с жалом менее 24 мм производится стачивание основания до необходимого диаметра. В процессе токарных работ на основании делается насечка. Насечка помогает ориентироваться, как будет расположен оттиск.
            Рабочая часть имеет конусообразную форму, байок округлен. Округление требуется для предотвращения откалывания металла при ударе.
            На отфрезерованной заготовке осуществляется гравировка на станке ЧПУ. Полученный макет заказчика корректируется: расстояние между линиями увеличивается таким образом, чтобы после удара оттиск был читаем.
            Для точной гравировки используются фрезы диаметром 0.2 мм. Задаваемая точность: 0,001 мм. Фрезеровка по стали занимает 5-8 часов. Большое время гравировки связано с использованием фрез малого диаметра. Возможно гравировать большими фрезами, но точность значительно снизится.
            Отгравированный ударный инструмент помещается в муфельную печь. Температура закалки 800 градусов. Помещение ударного клейма в соленую жидкость на 5 секунд.
            Постепенное охлаждение в масле. Так как после нахождения в печи в металле возникают большие усилия, необходимо проводить нормализацию: держать изделие при температуре в 200 градусов 6 часов.
            Вследствие данных операций производится двухсторонняя закалка: внутренняя часть мягкая, внешняя жесткая. Данная комбинация позволяет сделать клеймо более прочным, не раскалываться, благодаря гибкой сердцевине.
            Производится контрольный замер жесткости на твердомере по шкале Роквелла, очистка изделия металлической щеткой, проверка работоспособности.
            Назначение ударных клейм
            Ударное клеймо - металлическое изделие, предназначенное для реализации оттисков на металлических поверхностях. Клейма ударного типа делятся на 2 категории:
            Каленые
            Без закалки
            Вид клейма выбирается в зависимости от твердости поверхности, по которой будет производится удар. Мягкие материалы типа алюминия клеймятся простыми ударными штампами без закаливания. Оттиски на стали ставятся исключительно калеными клеймами. Металлические изделия и сварные швы подлежат клеймению. Оттиск наносится при помощи пресса или ручного ударного штампа.
            Использование ручных удобнее за счет мобильности. Изделие имеет небольшой размер (11-15 СМ), для пользования им не требуется наличие профессиональных навыков.
            Как произвести маркировку:
            Клеймо ставится рабочей частью вплотную к металлическому изделию
            По байку осуществляется удар молотком
            Совет: площадь рабочей поверхности, на которой производится гравировка, прямо пропорциональна усилию, с которым требуется осуществлять удар. То есть: чем больше символов на бьющей части, тем сильнее нужно бить для создания глубокого оттиска. В практике встречаются штампы ударного типа с большой площадью рабочей части. Для пользования ими требуется два человека. Первый держит инструмент, второй бьет кувалдой.
            Существуют следующие виды данных изделий:
            Для ремесленников
            Сварщиков
            Баллонов
            Кожи',
            'price'=>'95',
            'engraving_depth'=>'',
            'material'=>'Сталь',
            'width'=>'',
            'accessories'=>'',
            'form'=>'',
            'garanty'=>'',
            'slug'=>'udarnye_kleyma',
            'short_desc'=>'Ударные клейма',
            'icon'=>'/images/hammer.svg',
            'icon_black'=>'/images/hummer-black.svg',
        ]);
        Category::create([
            'title'=>'Клейма для бургеров',
            'description'=>'Клейма для бургеров',
            'preview_image'=>'http://kleymabel.by/burger.png',
            'content'=>'Индивидуальный рисунок клейма позволит нанести фирменный логотип на продукт методом выжигания и сделать его уникальным и запоминающимся. Само клеймо имеет глубокую гравировку и позволяет делать не только выжигание на бургерах или стейках, лаваше или хлебе, но и на всех остальных видах продукции, которые требуют более мелкой гравировки (дерево, кожа, береста, и пр). При заказе рисунка или логотипа для выжигания на продуктах питания и особенно для выжигания на хлебе или мясе следует помнить — чем проще рисунок и чем меньше мелких деталей в нем, тем качественней будет само выжигание. Плюс высокая сложность рисунка приводит к увеличению стоимости клише, а мелкие детали на клише имеют меньший ресурс службы. При заказе термоклейма для бургеров мы всегда даем рекомендации по доработке рисунка, делаем исправления и всегда согласовываем рисунок с заказчиком перед гравировкой. Изготовление в течение 3 рабочих дней после осуществления заказа.',
            'price'=>'85',
            'engraving_depth'=>'',
            'material'=>'Латунь',
            'width'=>'',
            'accessories'=>'',
            'form'=>'',
            'garanty'=>'',
            'slug'=>'kleyma_dlya_burgerov',
            'short_desc'=>'Клейма для бургеров',
            'icon'=>'',
            'icon_black'=>'',
        ]);
        Category::create([
            'title'=>'Нагреватели клейм',
            'description'=>'Нагреватели клейм',
            'preview_image'=>'http://kleymabel.by/ustanovkapd.jpeg',
            'content'=>'Данное изделие производится нашей организацией. За пятилетний опыт производства и доработок на сегодняшний день устройство термическое для нагревания клейм идкально приспособлено для клеймения поддонов. Были учтены все нюансы:
            Провод теплообменника спрятан в паз, что предотвращает его перетирание
            Для безопасности электрическая цепь устройства заземлена и защищена предохранителем
            Блок управления защищен от перегревов теплоотводящей пластиной
            На выключателе установлена подсветка
            Жесткая струтура теплообменника надежно фиксирует клеймо, при перегревах клеймо не выгибается со временем
            Принцип работы электрического нагревателя основан на запитывании тэн от сети 220 Вольт. В установке имеется 2 или 4 нагревательных элемента. Мощность каждого составляет 250 Ватт. Устройство мощностью в 0,5 кВт нагревается от двух тэн, а 1 кВт от четырех. Питание подается через электрический шнур длинной 150 СМ на электронный блок. В данном блоке имеется кноака включаения/выключения нагрева, предохранитель и разводка питания по нагревательным элементам.
            С электронного блока питания электричество поступает на нагревательные элементы, которые спрятаны в теплообменник. Теплообменник предстаялет собой стальной брусок с просверленными насквозь отверстиями. В данных отверстиях спрятаны нагревательные элементы. Их фиксация производится при помощи винтов под шестигранник.
            К каждому из нагревательных элементов подходит 2 провода, которые спрятаны в паз, расположенный в металлической пластине. Данное конструктивное решение было разработано с целью повышения ресурса изделия, так как при неаккуратном использовании на производстве провода отрывали или перетирали.
            Разница между НК-500 и НК-1000 заключается в количесте тэн и велечине теплообменника. В термический нагреватель клейм 1 кВт установлено 4 тэна. Нагрев данным устройством производится значительно быстрее, чем в НК-500: за 4 минуты. Наличие четырех тэн позволяет продлить ссрок работы изделия - даже если один нагревательный элемент выгорит, то прогрев будет осуществляться в полной мере, просто медленнее. В НК-500 перегарание одного из тэн приводит к недостаточному нагреву.
            Выгорание нагревательных элементов - естественный процесс. Ресурс каждого составляет 12-14 тысяч клеймений. В конструкции нагревателя штампов и клише предусмотрено все для удобной и быстрой замены тэн. Тэну вы можете приобрести у нас: стоимость одного составляет 27 рублей.
            Устройство для нагрева клейм для паллет технически самое сложное. На электронном блоке расположен дисплей и кнопки регулирования нагрева. Выставляется необходимая температруа, после чего необходимо ожидать 5 минут. На экране отображается температура клейма в конкретное время.
            Передача тепла на штамп через паяльник - самый дешевый вариант. Для его реализации мы покупаем нагреватель мощностью в 100Вт и вытачиваем под него латунную втулку. На втулке прорезается резьба, на которую устаналвивается клеймо. Время нагрева: 12 минут. Предпочтительно использовать паяльники мощностью в 100 Вт и не более, так как в них основание сделано из металла. В нагревателях паяльников мощностью более 100Вт основание сделано из керамики. Это значит, что при длительном использовании и от веса клише для поддонов данное основание треснет. Из-за трещины нагрев осуществляется не в полной мере.
            Для выбора нагревателя требуется знать, какое количество клеймений требуется в сутке. Если до 20, то лучше изготовить клеймо на деревянной ручке и произовдить нагрев от газовой горелки. Если же маштабы более значительные, то установка в 500 Вт. При клеймении 1000 поддонов в неделю лучше приобрести устиройство НК-1000, которое лучше всего подходит для больших производственных маштабов.
            Альтернативное применение: для клеймения деревянных изделий. Если основание клейма небольшое то лучше использовать ручку или паяльник. При площади основания более 36 сантиметров квадратных предпостительно использовать нагреватель. На теплообменнике расположена резьба, что позволяет осуществить сменяемость клейм.
            Комплектующие к нагревательным устройствам:
            Тэны
            Выключатели
            Шнур
            Предохранители
            Как купить
            Для осуществления заказа требуется знать, какое именно устройство необзходимо изготвоить. Процесс производства занимает 3 дня. При приобретении электрического нагревателя и клейма для поддонов предоставляется скидка. Мы также занимаетмся изготовлением фитосанитарных клейм для паллет всех типов и видов от IPPC до EPAL. Клейма гравируются на жаростойкой латуни шириной 14 мм.
            Возможна продажа как физическим, так и юрриждическим лицам. Для заказа требуются реквизиты организаии и электронный почтовый ящик, на который будет выставлен счет и договор. Работаем без НДС, осуществляем доставку по всей Беларусии и росии за счет поставщика.',
            'price'=>'380',
            'engraving_depth'=>'',
            'material'=>'Латунь',
            'width'=>'',
            'accessories'=>'',
            'form'=>'',
            'garanty'=>'',
            'slug'=>'nagrevateli_kleym',
            'short_desc'=>'Нагреватели для клейм',
            'icon'=>'/images/nagrev.svg',
            'icon_black'=>'/images/temper-black.svg',
        ]);
    }
}
