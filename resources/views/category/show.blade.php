@extends('layouts.main')
@section('meta_title')
{{$category->meta_title}}
@endsection
@section('meta_descroption')
{{$category->description}}
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
        <span style="color: red; font-weight: 400">
        {{$category->title}}
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
                    <a href="{{$category->main_image}}" rel="example_group" id="adpdp14">
                    <img src="{{$category->main_image}}" id="dp14" style="margin-bottom: 3px;" alt="{{$category->alt_main_image}}" title="{{$category->title_main_image}}" /></a>
                  </div>
                @foreach ( $images as $image )
                  <div class="thumbs">
                    <div class="it"><a style="display:none;" href="{{$image->image}}" rel="example_group"></a>
                        <img src="{{$image->image}}" onclick='setBigImage(this);' alt="{{$image->alt}}" title="{{$image->title}}" /></div>
                    <div class="clr"></div>
                  </div> 
                @endforeach
            </div>
            <div class="product_info">
            <div class="product_title">
                <h1>{{$category->title}}</h1>
            </div>
            <div class="product_about">
                {{$category->short_desc}}
            </div>
            <div class="product_price">
                {{$category->price}} руб.
            </div>
            <form action="{{route('basket.add-category',$category)}}" method="post">
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
                        <p>г. Минск ул. Геологическая 117</p>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@if(!$products->isEmpty())
<div class="product_page_h2">
    <h2>Каталог</h2>
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
        <a class="sub_product_button" href="{{route('product.show',$product->slug)}}">
            Подробнее
        </a>
        </div>
    </div>
    @endforeach
</div>
@endif
@if(!$options->isEmpty())
<div class="options">
    <h2>Варианты нагрева клейма</h2>
    <div class="options_row">
        @foreach ($options as $option )
        <div class="options_item">
            <img src="{{$option->image}}">
            <div class="options_text">
                <h3>{{$option->h3}}</h3>
                <p>{{$option->content}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@isset($category->video)
<div class="video_container">
<h2>Как пользоваться</h2>
    <div class="video">
        <video controls="controls" src="{{$category->video}}">
        </video>
    </div>
</div>
@endisset
@if($category->is_stamp == 1)
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
<div class="main_text">
    {!! html_entity_decode($category->content) !!}
</div>
@if(!$portfolio->isEmpty())
<div class="portfolio_container">
    <h2>Портфолио клейм</h2>
<div class="portfolio">
    @foreach ($portfolio as $item )
    <div class="portfolio__item">
        <img src="{{$item->image}}" alt="{{$item->alt}}" title="{{$item->title}}">
    </div>
    @endforeach
</div>
</div>
@endif
@endsection