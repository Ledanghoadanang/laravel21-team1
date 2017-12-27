@extends('layouts.frontend.master')
@section('features-items')
  <h2 class="title text-center">DANH MỤC SẢN PHẨM</h2>
  <form action="/search" method="POST" role="search" class="title text-center searchform">
    {{ csrf_field() }}
    <input type="text"  name="product"  placeholder="Search products">
    <button type="submit" class="btn btn-default">
      <span class="glyphicon glyphicon-search"> Search </span>
    </button>
  </form>
  <br>
  @foreach($products as $product)
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
          <div class="productinfo text-center">
            <img src="{{asset('images/products')}}/{{$product->image}}" alt="" />
            <h2>{{ $product->price }}</h2>
            <p>{{ $product->name }} @if($product->branch) - {{ $product->branch->name }} @endif</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
          </div>
          <div class="product-overlay">
            <div class="overlay-content">
              <h2>{{ $product->price }}</h2>
              <p>Thương Hiệu Của Thời Gian</p>
              <a href="javascript:void(0)"  class="btn btn-default add-to-cart add_product" onclick="addCart({{$product->id}})"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
            </div>
          </div>
      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          @if($product->id)
          <li><a href="javascript:void(0)"  class="btn btn-default add-to-cart add_product" onclick="addCart({{$product->id}})"><i class="fa fa-shopping-cart"></i>Thêm</a></li>
          @endif
          <li><a href="{{ url('products/' . $product ->id) }}"><i class="fa fa-plus-square"></i>Chi tiết</a></li>
        </ul>
      </div>
    </div>
  </div>
  @endforeach
  <script src="{{ asset('js/jquery.js') }}"></script>
@stop
