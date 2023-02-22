@extends('layouts.main')
@section('content')
<div class="catalog_section">
    <h1>Результаты поиска</h1>
    <div class="catalog">
        @foreach ($categories as $category )
        <div class="catalog__item">
            <img src="{{$category->preview_image}}">
            <h2>{{$category->title}}</h2>
            <div class="item_flex">
                <p class="price">
                    {{$category->price}} руб.
                </p>
                <div class="button">
                    <a href="{{route('category.show',$category->slug)}}">Подробнее</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection