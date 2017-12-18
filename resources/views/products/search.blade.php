@extends('layouts.shop.master')
@section('features-items')
  <h2 class="title text-center">DANH MỤC SẢN PHẨM</h2>
  @foreach($products as $product)
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
          <div class="productinfo text-center">
            <img src="images/home/product1.jpg" alt="" />
            <h2>{{ $product->price }}</h2>
            <p>Đồng Hồ</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
          </div>
          <div class="product-overlay">
            <div class="overlay-content">
              <h2>{{ $product->price }}</h2>
              <p>Thương Hiệu Của Thời Gian</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
            </div>
          </div>
      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>danh sách yêu thích</a></li>
          <li><a href="#"><i class="fa fa-plus-square"></i>So sánh giá</a></li>
        </ul>
      </div>
    </div>
  </div>
  @endforeach
@stop
