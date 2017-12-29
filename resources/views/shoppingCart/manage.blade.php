<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css')}}" rel="stylesheet">
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
  <!--/head-->
  <body>
    <div class="btn btn-default"  style="position: fixed; top: 40px; right: 5px; background-color: #FE980F">
      @if ( Cart::count() > 0 )
      <a id="cart" href="{{ url('carts')}}"><i class="fa fa-shopping-cart"></i><span id="count"> ({{ Cart::count() }})</span></a>
      @else
      <a id="cart" href="{{ url('carts')}}" ><i class="fa fa-shopping-cart"></i><span id="count"></span></a>
      @endif
    </div>
    <header id="header">
      <!--header-->
      <div class="header_top">
        <!--header_top-->
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="contactinfo">
                <ul class="nav nav-pills">
                  <li><a href="#"><i class="fa fa-phone"></i>0934 861 123</a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i>ledanghoadanang@gmail..com</a></li>
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
      </div>
      <!--/header_top-->
      <div class="header-middle">
        <!--header-middle-->
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="logo pull-left">
                <a href="{{url('/')}}"><img src="{{ asset('images/home/logo.png') }}" alt="" /></a>
              </div>
              <div class="btn-group pull-right">
              </div>
            </div>
            <div class="col-sm-8">
              <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                  <!-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
                  <!-- @if ( Cart::count() > 0 )
                    <li><a id="cart" href="{{ url('carts')}}"><i class="fa fa-shopping-cart"></i><span id="count"> Giỏ Hàng({{ Cart::count() }})</span></a></li>
                    @else
                    <li><a id="cart" href="{{ url('carts')}}" ><i class="fa fa-shopping-cart"></i><span id="count"> Giỏ Hàng</span></a></li>
                    @endif -->
                  @if (Auth::check())
                  <li>
                    <a href="{{ url('carts/manage')}}"><i class="fa fa-check-square-o" aria-hidden="true"></i> Quản lý đơn hàng</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i>
                    {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" style="min-width: 110px;">
                      <li><a href="{{ url('/user')}}">Xem Profile</li>
                      </a>
                      <li><a href="{{ url('/change-password')}}">Đổi mật khẩu</a></li>
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
                  @else
                  <li><a href="{{ url('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Đăng Nhập</a></li>
                  <li><a href="{{ url('register') }}"><i class="fa fa-lock"></i> Đăng Ký</a></li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header-middle-->
    </header>
    <!--/header-->
    @if(count($orders) > 0)
    <section id="cart_items" style="margin-bottom: 50px !important">
      <div class="container">
        <div class="breadcrumbs">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Manage Basket</li>
          </ol>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="float: left;">Danh Sách Đơn Hàng Gần Đây</h3>
              <a href="{{ url('carts/manage/export')}}" class="btn btn-success" style="float: right;"> Export Excel</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Trạng Thái</th>
                    <th>Địa Chỉ Giao Hàng</th>
                    <th>Tình Trạng Giao Hàng</th>
                    <th>Số Điện Thoại</th>
                    <th>Tên Người Nhận</th>
                    <th>Người Đặt Hàng</th>
                    <th>Hủy Đơn Đặt Hàng</th>
                    <th>Xem Chi Tiết</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                  <tr>
                    <td>{{ $order ->id}}</td>
                    <td>{{ $order ->date}}</td>
                    <td>{{ $order ->status}}</td>
                    <td>{{ $order ->address_order}}</td>
                    <td>{{ $order ->shipping_status}}</td>
                    <td>{{ $order ->phone}}</td>
                    <td>{{ $order ->name_receiver}}</td>
                    <td>{{ App\User::find($order->user_id)->name}}</td>
                    @if( $order->status == 'avalible')
                    <td style="text-align: center;">
                      <a href="{{ url('carts/manage/' . $order->id . '/cancel')}}">
                      Hủy
                      </a>
                    </td>
                    @else
                    <td style="text-align: center; vertical-align: middle;">Không khả dụng</td>
                    @endif
                    <td><a href="{{ url('carts/manage/' . $order->id .'/detail') }}">Xem chi tiết</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
    @else
    <section>
      <div class="container">
        <div class="" style="text-align: center; margin: 10px">
          <h3 class="">Không Tìm Thấy Đơn Hàng</h3>
          <a href="{{ url('/')}}" class="btn btn-primary btn-lg active" role="button">Tiếp tục mua hàng</a>
        </div>
      </div>
    </section>
    @endif
    <footer id="footer">
      <!--Footer-->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-2">
              <div class="companyinfo">
                <h2><span>e</span>-shopper</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="col-sm-3">
                <div class="video-gallery text-center">
                  <a href="#">
                    <div class="iframe-img">
                      <img src="{{asset('images/home/iframe1.png')}}" alt="" />
                    </div>
                    <div class="overlay-icon">
                      <i class="fa fa-play-circle-o"></i>
                    </div>
                  </a>
                  <p>Circle of Hands</p>
                  <h2>24 DEC 2014</h2>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="video-gallery text-center">
                  <a href="#">
                    <div class="iframe-img">
                      <img src="{{asset('images/home/iframe2.png')}}" alt="" />
                    </div>
                    <div class="overlay-icon">
                      <i class="fa fa-play-circle-o"></i>
                    </div>
                  </a>
                  <p>Circle of Hands</p>
                  <h2>24 DEC 2014</h2>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="video-gallery text-center">
                  <a href="#">
                    <div class="iframe-img">
                      <img src="{{asset('images/home/iframe3.png')}}" alt="" />
                    </div>
                    <div class="overlay-icon">
                      <i class="fa fa-play-circle-o"></i>
                    </div>
                  </a>
                  <p>Circle of Hands</p>
                  <h2>24 DEC 2014</h2>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="video-gallery text-center">
                  <a href="#">
                    <div class="iframe-img">
                      <img src="{{asset('images/home/iframe4.png')}}" alt="" />
                    </div>
                    <div class="overlay-icon">
                      <i class="fa fa-play-circle-o"></i>
                    </div>
                  </a>
                  <p>Circle of Hands</p>
                  <h2>24 DEC 2014</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="address">
                <img src="{{asset('images/home/map.png')}}" alt="" />
                <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-widget">
        <div class="container">
          <div class="row">
            <div class="col-sm-2">
              <div class="single-widget">
                <h2>Service</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="">Online Help</a></li>
                  <li><a href="">Contact Us</a></li>
                  <li><a href="">Order Status</a></li>
                  <li><a href="">Change Location</a></li>
                  <li><a href="">FAQ’s</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-widget">
                <h2>Quock Shop</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="">T-Shirt</a></li>
                  <li><a href="">Mens</a></li>
                  <li><a href="">Womens</a></li>
                  <li><a href="">Gift Cards</a></li>
                  <li><a href="">Shoes</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-widget">
                <h2>Policies</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="">Terms of Use</a></li>
                  <li><a href="">Privecy Policy</a></li>
                  <li><a href="">Refund Policy</a></li>
                  <li><a href="">Billing System</a></li>
                  <li><a href="">Ticket System</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-widget">
                <h2>About Shopper</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="">Company Information</a></li>
                  <li><a href="">Careers</a></li>
                  <li><a href="">Store Location</a></li>
                  <li><a href="">Affillate Program</a></li>
                  <li><a href="">Copyright</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
              <div class="single-widget">
                <h2>About Shopper</h2>
                <form action="#" class="searchform">
                  <input type="text" placeholder="Your email address" />
                  <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                  <p>Get the most recent updates from <br />our site and be updated your self...</p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
            <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
          </div>
        </div>
      </div>
    </footer>
    <!--/Footer-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
      function ud_find_text(self) {
       var children = self.parentNode.getElementsByTagName('input');
       for (var i = 0; i < children.length; i++) {
           if (children[i].getAttribute('type') == 'text') {
               return children[i];
           }
       }
      }
      function ud_inc(self) {
      	var text = ud_find_text(self);
      	text.value++;
      }
      function ud_dec(self) {
       var text = ud_find_text(self);
       if (text.value > 0) text.value--;
      }
    </script>
  </body>
</html>
