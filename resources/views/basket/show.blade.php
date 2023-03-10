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
<br>
<table>
    <tr>
      <td>Товар</td>
      <td>Количество</td>
    </tr>

        @foreach ($basket->products as $product )
        <tr>
            <td>{{$product->title}}</td>
            <td>
              <div class="count">
                <form action="{{route('basket.add-product-count',$product)}}" method="post">
                  @csrf
                <input type="submit" value="+" class="add_low">
                </form>
                <p>{{$product->count}}</p>
                <form action="{{route('basket.low-product-count',$product)}}" method="post" name="low_count_{{$product->id}}">
                  @csrf
                <input type="submit" value="-" class="add_low">
                </form>
              </div>
            </td>
        </tr>
        @endforeach
  </table>
  <div class="basket-form">
    <form action="{{route('basket.confirm')}}" method="post" enctype="multipart/form-data">
      @csrf
    <div>
      <input type="text" name="name" placeholder="Имя (не обязательно)" class="basket_input">
    </div>
    <div>
      @error('phone')
        <p style="color: red; padding-bottom:10px">{{$message}}</p>
      @enderror
      <input type="text" name="phone" placeholder="Телефон (обязательно)" class="basket_input">
    </div>
    <div>
      <br>
      <label>Макет</label>
      <input type="file" name="image" class="basket_input-file" placeholder="Отправить ф">
      <div>
      <label style="color: red">Форматы: jpeg, jpg, png, pdf</label>
      <br>
      <br>
      <label style="color: black">Макет отправлять не обязательно</label>
      <br>
      <br>
      </div>
    </div>
    <input type="submit">
    </form>
  </div>
 @endif
</div>
<br>
<br>
<br>
<br>
@endsection