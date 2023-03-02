@extends('layouts.main')
@section('meta_title')
{{$subProduct->meta_title}}
@endsection
@section('meta_descroption')
{{$subProduct->description}}
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
        <a href="{{route('product.show',$product->slug)}}">
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
                    <a href="img/1.jpg" rel="example_group" id="adpdp14">
                    <img src="{{$subProduct->preview_image}}" id="dp14" style="margin-bottom: 3px;" alt="" /></a>
                  </div>
                @isset($images)
                @foreach ( $images as $image )
                <div class="thumbs">
                  <div class="it"><a style="display:none;" href="img/1.jpg" rel="example_group"></a>
                      <img src="{{$image->image}}" onclick='setBigImage(this);' alt="" /></div>
                  <div class="clr"></div>
                </div> 
              @endforeach
              @endisset
            </div>
            <div class="product_info">
            <div class="product_title">
                <h1>{{$subProduct->title}}</h1>
            </div>
            <div class="product_about">
                {{$subProduct->short_desc}}
            </div>
            <div class="product_price">
                {{$subProduct->price}} руб.
            </div>
                <form action="{{route('basket.add-product',$subProduct)}}" method="post">
                    @csrf
                <input type="submit" value="Добавить в корзину" class="add_to_cart">
                </form>
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
                        <p>г. Минск ул. Геологическая 115</p>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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

@endsection