@extends('layouts.main')
@section('content')
<div class="bread_crumbs">
    <div class="bread_crumbs__item">
        <a href="{{route('index')}}">
        Главная
        </a>
    </div>
    <img src="/images/array.svg">
    <div class="bread_crumbs__item">
        <span style="color: red; font-weight: 400">
        {{$category->title}}
        </span>
    </div>
</div>
<div class="product_container">
    <div class="product_nav">
        @foreach ($categories as $item )
        <li>
            <a href="{{route('category.show',$item)}}">
            <img src="{{$item->icon_black}}">
            <p>{{$item->title}}</p>
            </a>
        </li>
        @endforeach
    </div>
    <div class="product_section">
        <div class="product">
            <div class="slider">
                <img src="{{$category->preview_image}}">
            </div>
            <div class="product_info">
            <div class="product_title">
                <h1>{{$category->title}}</h1>
            </div>
            <div class="product_about">
                Металлическое изделие, нагреваемое от электрической установки или открытого огня, предназначенное для нанесения отжигов на бобышках паллет.
            </div>
            <div class="product_price">
                {{$category->price}} руб.
            </div>
            <div class="button_product">
                Добавить в корзину
            </div>
            <div class="haracteristics">
            <p>Характеристики</p>
            <table>
                <tr>
                  <td>Глубина гравировки</td>
                  <td>1,2 мм</td>
                </tr>
                <tr>
                  <td>Материал</td>
                  <td>Латунь</td>
                </tr>
                <tr>
                  <td>Ширина основания</td>
                  <td>14 мм</td>
                </tr>
                <tr>
                    <td>Оснастка</td>
                    <td>На ручке/паяльнике/термоустановке</td>
                </tr>
                <tr>
                    <td>Форма</td>
                    <td>По желанию заказчика</td>
                </tr>
                <tr>
                    <td>Гарантия</td>
                    <td>1 год</td>
                </tr>
              </table>
            </div>
            <div class="product_dignities">
                <div class="product_dignities__item">
                    <li>
                        <img src="/images/manufacture-mini.svg">
                        <p>Собственное производство</p>
                    </li>
                </div>
                <div class="product_dignities__item">
                    <li>
                        <img src="/images/delivery-mini.svg">
                        <p>Доставка: почтой/курьером</p>
                    </li>
                </div>
                <div class="product_dignities__item">
                    <li>
                        <img src="/images/location-mini.svg">
                        <p>г. Минск ул. Геологическая 117</p>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="product_page_h2">
    <h2>Каталог клейм для поддонов</h2>
</div>
<div class="sub_products">
    @foreach ($products as $product )
    <div class="sub_products__item">
        <img src="{{$product->preview_image}}">
        <h2>{{$product->title}}</h2>
        <div class="sub_product__flex">
        <div class="price">
            {{$product->price}} руб.
        </div>
        <a class="sub_product_button" href="{{route('product.show',$product)}}">
            Подробнее
        </a>
        </div>
    </div>
    @endforeach
</div>
@endsection