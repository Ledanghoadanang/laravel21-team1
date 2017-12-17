@extends('layouts.shop.master')
@section('content')
  <p>Search Details:  {{ $product->name }}</p>
  <p>
    @if ($product->branchs)
      <a href="{{url('/products/branchs/') . '/' . $product->branch->name}} ">{{ $product->branch->name }}</a>
    @endif
  </p>
@stop
