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
        <a href="{{route('category.show',$product->category->slug)}}">
        {{$product->category->title}}
        </a>
    </div>
    <img src="/images/array.svg">
    <div class="bread_crumbs__item">
        <span style="color: red; font-weight: 400">
        {{$product->title}}
        </span>
    </div>
</div>
<div class="product_container">
    <div class="product_nav">
        @foreach ($categories as $item )
        <li>
            <a href="{{route('category.show',$item->slug)}}">
            <img src="{{$item->icon_black}}">
            <p>{{$item->title}}</p>
            </a>
        </li>
        @endforeach
    </div>
    <div class="product_section">
        <div class="product">
            <div class="slider">
                <img src="{{$product->preview_image}}">
            </div>
            <div class="product_info">
            <div class="product_title">
                <h1>{{$product->title}}</h1>
            </div>
            <div class="product_about">
                Металлическое изделие, нагреваемое от электрической установки или открытого огня, предназначенное для нанесения отжигов на бобышках паллет.
            </div>
            <div class="product_price">
                {{$product->price}} руб.
            </div>
                <form action="{{route('basket.add-product',$product)}}" method="post">
                    @csrf
                <input type="submit" value="Добавить в корзину" class="add_to_cart">
            @isset($haracteristics)
                <div class="haracteristics">
                <p>Характеристики</p>
                <table>
                    @foreach ($haracteristics as $haracteristic )
                    <tr>
                        <td>{{$haracteristic->parameter}}</td>
                        <td>{{$haracteristic->value}}</td>
                    </tr>     
                    @endforeach 
                </table>
                </div>
            @endisset
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
    <h2>Каталог</h2>
</div>
<div class="sub_products">
    @foreach ($subProducts as $subProduct )
    <div class="sub_products__item">
        <img src="{{$subProduct->preview_image}}">
        <h2>{{$subProduct->title}}</h2>
        <div class="sub_product__flex">
        <div class="price">
            {{$subProduct->price}} руб.
        </div>
        <a class="sub_product_button" href="{{route('product.showSubProduct',$subProduct->slug)}}">
            Подробнее
        </a>
        </div>
    </div>
    @endforeach
</div>
<div class="how_to_order">
    <h3>Как заказать</h3>
    <div class="how_to_order-flex">
        <div class="how_to_order__item">
            <img src="/images/maket.svg">
            <p></p>
        </div>
        <div class="how_to_order__item">
            <img src="/images/redact.svg">
            <p></p>
        </div>
        <div class="how_to_order__item">
            <img src="/images/predoplata.svg">
            <p></p>
        </div>
        <div class="how_to_order__item">
            <img src="/images/zabor.svg">
            <p></p>
        </div>
    </div>
</div>
@endsection