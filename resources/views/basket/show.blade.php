@extends('layouts.main')
@section('content')
<div class="basket_container">
@if(!isset($basket) || $basket->products->isEmpty())
<div class="empty_basket">
<p>Ваша крзина пуста</p>
<div class="basket_button">
<a href="{{route('index')}}">
  На главную
</a>
</div>
</div>
@else
<h1>Корзина</h1>
<table>
    <tr>
      <td>Товар</td>
      <td>Количество</td>
    </tr>

        @foreach ($basket->products as $product )
        <tr>
            <td>{{$product->product}}</td>
            <td>
              <div class="count">
                <form action="{{route('basket.add-product-count',$product)}}" method="post">
                  @csrf
                <input type="submit" value="+">
                </form>
                <p>{{$product->count}}</p>
                <form action="{{route('basket.low-product-count',$product)}}" method="post">
                  @csrf
                <input type="submit" value="-">
                </form>
              </div>
            </td>
        </tr>
        @endforeach
  </table>
  <div class="basket_button">
    <a href="{{route('basket.confirm')}}">
      Подтвердить заказ
    </a>
    </div>
 @endif
</div>
@endsection