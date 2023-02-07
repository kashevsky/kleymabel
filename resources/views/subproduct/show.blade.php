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
        <a href="{{route('category.show',$category)}}">
        {{$category->title}}
        </a>
    </div>
    <img src="/images/array.svg">
    <div class="bread_crumbs__item">
        <a href="{{route('product.show',$product)}}">
        {{$product->title}}
        </a>
    </div>
    <img src="/images/array.svg">
    <div class="bread_crumbs__item">
        <span style="color: red; font-weight: 400">
        {{$subProduct->title}}
        </span>
    </div>
</div>
<div class="product_container">
    <div class="product_nav">
        @foreach ($categories as $item )
        <li>
            <a href="{{route('category.show',$item)}}">
            <img src="{{Storage::url($item->icon_black)}}">
            <p>{{$item->title}}</p>
            </a>
        </li>
        @endforeach
    </div>
    <div class="product_section">
        <div class="product">
            <div class="slider">
                <img src="{{$subProduct->preview_image}}">
            </div>
            <div class="product_info">
            <div class="product_title">
                <h1>{{$subProduct->title}}</h1>
            </div>
            <div class="product_about">
                Металлическое изделие, нагреваемое от электрической установки или открытого огня, предназначенное для нанесения отжигов на бобышках паллет.
            </div>
            <div class="product_price">
                {{$subProduct->price}} руб.
            </div>
                <form action="{{route('basket.add-product',$subProduct)}}" method="post">
                    @csrf
                <input type="submit" value="Добавить в корзину" class="add_to_cart">
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
@endsection