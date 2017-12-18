@extends('layouts.shop.master')
@section('features')
 <!-- code here -->
  @foreach($products as $product)
    <div class="product">
      <a href="{{ url('products/'.$product->id) }}">
        <strong>{{ $product->name }} -{{ $product->branch->name }} </strong>
      </a>
    </div>
  @endforeach
@stop
