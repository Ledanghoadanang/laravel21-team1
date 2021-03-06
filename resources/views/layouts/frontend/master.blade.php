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
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


</head><!--/head-->
<body>

  <div class="btn btn-default"  style="position: fixed; top: 40px; right: 5px; background-color: #FE980F">
	@if ( Cart::count() > 0 )
		<a id="cart" href="{{ url('carts')}}"><i class="fa fa-shopping-cart"></i><span id="count"> ({{ Cart::count() }})</span></a>
	@else
		<a id="cart" href="{{ url('/')}}" ><i class="fa fa-shopping-cart"></i><span id="count"></span></a>
	@endif
</div>
	<header id="header"><!--header-->
		@include('layouts.frontend.header')
	</header><!--/header-->

	<section id="slider"><!--slider-->
		@include('layouts.frontend.slide')
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
            <h2>Sản Phẩm</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              @include('layouts.frontend.category-product')
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							@include('layouts.frontend.branch-sidebar')
						</div><!--/brands_products-->

						<div class="price-range"><!--price-range-->
							@include('layouts.frontend.price-range')
						</div><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="{{ asset('images/home/shipping.jpg') }}" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
            <h2 class="title text-center">
            @yield('features-items')
            </h2>
					</div><!--features_items-->

					<div class="category-tab"><!--category-tab-->
						@include('layouts.frontend.category-tab')
					</div><!--/category-tab-->

				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
    @include('layouts.frontend.footer')
	</footer><!--/Footer-->



  <script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/price-range.js') }}"></script>
  <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script type="text/javascript">
		function addCart(id)
        {
            var root = '{{url('/carts')}}';
            $.get(root + '/' + id + '/' + 'add', function(data, status){
                console.log(data);
            //   $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
              $('#count').replaceWith('<span id="count">(' + data.count +')</span> ');
            });
        }
        $( ".add_product" ).click(function() {
		  alert( "Đã thêm sản phẩm vào giỏ hàng!" );
		});
	</script>
</body>
</html>
