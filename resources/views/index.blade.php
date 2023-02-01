@extends('layouts.main')
@section('content')
<div class="baner">
    <div class="baner_nav">
        <nav>
            <li>
                <a href="">
                <img src="/images/pallet.svg">
                <p>Клейма для поддонов</p>
                </a>
            </li>
        </nav>
    </div>
</div>
<div class="catalog_section">
    <h1>Изготовление клейм</h1>
    <div class="catalog">
        <div class="catalog__item">
            <img src="/images/ippc.jpeg.png">
            <h2>Клейма для поддонов</h2>
            <div class="item_flex">
                <p class="price">
                    90.0 руб.
                </p>
                <div class="button">
                    <a href="">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about_section_conainer">
    <div class="about_section">
        <p class="about_title">О компании</p>
        <div class="about_section__text">
            Мы занимаемся изготовлением клейм для поддонов, паллет и для выжигания по дереву на ручке, паяльнике или термонагревателе. Вы можете заказать изделие любого размера. Продукция полностью изготавливается нашей компанией: клейма для отжига на паллетах и поддонах для отжига на дереве с индивидуальным рисунком заказчика ветнадзор-клейма для ресторанов (отжиг на стейках или бургерах) ударные клейма гравировка производится на высококачественной латуни станком чпу. Далее клеймо обрезается под необходимую форму, указанную заказчиком. Следующий шаг: установка клише на ручку или термоустановку. 
        </div>
        <div class="advantages">
            <div class="advantages__item">
                <img src="/images/manufacture.svg">
                <p>Собственное <br>производство</p>
            </div>
            <div class="advantages__item">
                <img src="/images/delivery.svg">
                <p>Доставка <br>почтой/курьером</p>
            </div>
            <div class="advantages__item">
                <img src="/images/time.svg">
                <p>Изготовление <br>3-4 дня</p>
            </div>
            <div class="advantages__item">
                <img src="/images/width.svg">
                <p>Ширина основания <br>12 мм</p>
            </div>
        </div>
    </div>
</div>
@endsection