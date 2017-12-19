@extends('layouts.shop.master')
@section('features-items')
  <h2 class="title text-center">
    Thông tin chi tiết:  {{ $product->name }}
  </h2>
  <div class="productinfo text-center">
    <p>
      <h3>Price:</h3> {{ $product->price }}
    <br>
      <h3>Quantity:<h3> {{ $product->quantity }}
    <br><br><br>
      <img src="{{asset('images/products')}}/{{$product->image}}" alt="" />
    <br><br>
      <h3>Description:</h3> {{ $product->description }}
    </p>
  </div>
  </h2>
  <p>
    @if ($product->branchs)
      <a href="{{url('/products/branchs/') . '/' . $product->branch->name}} ">{{ $product->branch->name }}</a>
    @endif
  </p>
@stop
