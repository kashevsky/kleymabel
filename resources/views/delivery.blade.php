@extends('layouts.main')
@section('title')
@endsection
@section('content')
<div class="delivery_container">
    <div class="delivery">
        <h1>Варианты доставки</h1>
        <div class="delivery_body">
            <div class="delivery__items">
            <li>Почтой (наложенный платеж)</li>
            <li>Службой доставки Главдоставка</li>
            <li>Курьером по городу</li>
            </div>
            <div class="delivery_image">
                <img src="/images/delivery.png">
            </div>
        </div>

    </div>
</div>
@endsection