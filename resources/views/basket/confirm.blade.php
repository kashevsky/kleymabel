@extends('layouts.main')
@section('content')
<div class="basket_container">
  <img src="/images/green.png" style="width: 80px">
  <br>
  <h1 style="color: green">Спасибо за предзаказ!</h1>
  <br>
  <p>С вами свяжется наш менеджер</p>
  <div class="basket_button">
    <a href="{{route('index')}}">
      На главную
    </a>
  </div>
  <br>
  <br>
  <br>
</div>
@endsection