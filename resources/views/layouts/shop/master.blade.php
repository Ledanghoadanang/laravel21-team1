<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FIST | F-Shopping</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
	  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		@include('layouts.shop.header')
	</header><!--/header-->

	<section id="slider"><!--slider-->
		@include('layouts.shop.slide')
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              @include('layouts.shop.category-product')
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							@include('layouts.shop.branch-sidebar')
						</div><!--/brands_products-->

						<div class="price-range"><!--price-range-->
							@include('layouts.shop.price-range')
						</div><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="{{ asset('images/home/shipping.jpg') }}" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
            <h2 class="title text-center">
            @yield('features')
            </h2>
						@include('layouts.shop.feature-item')
					</div><!--features_items-->

					<div class="category-tab"><!--category-tab-->
						@include('layouts.shop.category-tab')
					</div><!--/category-tab-->

					<div class="recommended_items"><!--recommended_items-->
						@include('layouts.shop.recommend-item')
            <h2 class="title text-center">
            @yield('recomend')
            </h2>
					</div><!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
    @include('layouts.shop.footer')
	</footer><!--/Footer-->



  <script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/price-range.js') }}"></script>
  <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
