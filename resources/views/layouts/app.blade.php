<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
</head>
<body>
  <header id="header"><!--header-->
  <div class="header_top"><!--header_top-->
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contactinfo">
            <ul class="nav nav-pills">
              <li><a href="#"><i class="fa fa-phone"></i> 0934 861 123</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> ledanghoadanang@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="social-icons pull-right">
            <ul class="nav navbar-nav">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header_top-->

  <div class="header-middle"><!--header-middle-->
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="logo pull-left">
            <a href="{{url('/')}}"><img src="images/home/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="shop-menu pull-right">
            <ul class="nav navbar-nav">
              <li><a href="#"><i class="fa fa-star"></i> Best Sales</a></li>

              <li><a href="{{ url('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
              <li><a href="{{ url('/carts')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
              @if (Auth::guest())
                  <li><a href="{{ route('register') }}">Register</a></li>
                  <li><a href="{{ route('login') }}">Login</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header-middle-->

  <div class="header-bottom"><!--header-bottom-->
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="mainmenu pull-left">
            <ul class="nav navbar-nav collapse navbar-collapse">


                  <ul class="nav navbar-nav collapse navbar-collapse">
                      <!-- Authentication Links -->
                      @if (Auth::guest())

                          <li><a href="{{url('products')}}" class="active">Home</a></li>
                          <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                          <ul role="menu" class="sub-menu">
                          <li><a href="{{url('products')}}">Products</a></li>
                          <li><a href="{{url('checkout')}}">Checkout</a></li>
                          <li><a href="{{url('carts')}}">Cart</a></li>
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                  </ul>
                              </li>
              <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                  <ul role="menu" class="sub-menu">
                                      <li><a href="blog.html">Blog List</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                                  </ul>
                              </li>
              <li><a href="404.html">404</a></li>
              <li><a href="contact-us.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <!--<div class="col-sm-3">
          <div class="search_box pull-right">
            <input type="text" placeholder="Search"/>
          </div>
        </div>-->
      </div>
    </div>
  </div><!--/header-bottom-->
</header><!--/header-->
        @yield('content')
    </div>
    <footer id="footer"><!--Footer-->
@include('layouts.frontend.footer')
      </footer><!--/Footer-->



        <script src="js/jquery.js"></script>
    	<script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
