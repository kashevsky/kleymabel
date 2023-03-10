@extends('layouts.main')
<title>Клеймабел - kleymabel: изготовление клейм, клише и штампов</title>
<meta name="description" content="Производство клейм, клише, штампов для выжигания по дереву и тиснения кожи, а также сургучных печатей.">
@section('content')
<div class="baner">
    <div class="baner_nav">
        <nav>
            @foreach ($menuCategories as $item)
            <li>
                <a href="{{route('category.show',$item->slug)}}">
                <img src="{{$item->icon}}">
                <p>{{$item->title}}</p>
                </a>
            </li>
            @endforeach
        </nav>
    </div>
</div>
<div class="mobile_nav">
    <nav>
        @foreach ($menuCategories as $item)
        <li>
            <a href="{{route('category.show',$item->slug)}}">
            <img src="{{$item->icon_black}}">
            <p>{{$item->title}}</p>
            </a>
        </li>
        @endforeach
    </nav>
</div>
<div class="catalog_section">
    <p><a name="catalog"></a></p>
    <h1>Изготовление клейм</h1>
    <div class="catalog">
        @foreach ($categories as $category )
        <a href="{{route('category.show',$category->slug)}}">
        <div class="catalog__item">
            <img src="{{$category->preview_image}}">
            <h2>{{$category->title}}</h2>
            <div class="item_flex">
                <p class="price">
                    {{$category->price}} руб.
                </p>
                <div class="button">
                    <p>Подробнее</p>
                </div>
            </div>
        </div>
        </a>
        @endforeach
    </div>
</div>
<p><a name="about"></a></p>
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
<div class="portfolio_container">
    <p><a name="portfolio"></a></p>
        <h2>Портфолио клейм</h2>
    <div class="portfolio">
        @foreach ($portfolio as $item )
        <div class="portfolio__item">
            <img src="{{$item->image}}" alt="{{$item->alt}}" title="{{$item->title}}">
        </div>
        @endforeach
    </div>
</div>
@endsection