@extends('layouts.main')
@section('content')
<h1>Корзина</h1>
<table>
    <tr>
      <td>Товар</td>
      <td>Количество</td>
    </tr>

        @foreach ($basket->products as $product )
        <tr>
            <td>{{$product->product}}</td>
            <td>{{$product->count}}</td>
        </tr>
        @endforeach

  </table>
  <br>
  <br>
  <br>
  <br>
  <br>
  @endsection