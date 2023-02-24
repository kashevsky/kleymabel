@extends('layouts.main')
@section('meta_title')
{{$product->meta_title}}
@endsection
@section('meta_descroption')
{{$product->description}}
@endsection
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
        @foreach ($menuCategories as $item )
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
                <div class="img">
                    <a href="{{$product->main_image}}" rel="example_group" id="adpdp14">
                    <img src="{{$product->main_image}}" id="dp14" style="margin-bottom: 3px;" alt="" /></a>
                  </div>
                @isset($images)
                @foreach ( $images as $image )
                <div class="thumbs">
                  <div class="it"><a style="display:none;" href="{{$image->image}}" rel="example_group"></a>
                      <img src="{{$image->image}}" onclick='setBigImage(this);' alt="" /></div>
                  <div class="clr"></div>
                </div> 
              @endforeach
              @endisset
            </div>
            <div class="product_info">
            <div class="product_title">
                <h1>{{$product->title}}</h1>
            </div>
            <div class="product_about">
                {{$product->short_desc}}
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
@if(!$subProducts->isEmpty())
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
@endif
@if($product->is_stamp == 1)
<div class="how_to_order">
    <h3>Как заказать</h3>
    <div class="how_to_order-flex">
        <img src="/images/kak.svg">
    </div>
    
</div>
<div class="how_to_order-mobile">
    <div class="how_to_order-flex">
        <img src="/images/kak-mobile.svg">
    </div> 
</div>
@endif
@endsection