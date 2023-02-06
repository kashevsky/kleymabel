@extends('layouts.main')
@section('content')
<div class="basket_container">
  @foreach ($basketProducts as $product )
    {{$product->product}}
    {{$product->count}}
  @endforeach
</div>
@endsection