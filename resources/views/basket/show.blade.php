@extends('layouts.main')
@section('content')
<div class="basket_container">
@if($basket->products->isEmpty())
<div class="empty_basket">
<p>Ваша крзина пуста</p>
<div class="button_to_main_page">
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
              <form action="{{route('basket.add-product-count',$product)}}" method="post">
                @csrf
              <input type="submit" value="+">
              </form>
              {{$product->count}}
              <form action="{{route('basket.low-product-count',$product)}}" method="post">
                @csrf
              <input type="submit" value="-">
              </form>
            </td>
        </tr>
        @endforeach

  </table>
 @endif
</div>
@endsection