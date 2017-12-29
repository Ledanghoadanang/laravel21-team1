<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Checkout | E-Shopper</title>
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
      <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
      <link href="{{asset('css/animate.css')}}" rel="stylesheet">
      <link href="{{asset('css/main.css')}}" rel="stylesheet">
      <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
      <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
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
                              <li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                              <li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="social-icons pull-right">
                           <ul class="nav navbar-nav">
                              <li><a href=""><i class="fa fa-facebook"></i></a></li>
                              <li><a href=""><i class="fa fa-twitter"></i></a></li>
                              <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                              <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                              <li><a href=""><i class="fa fa-google-plus"></i></a></li>
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
                           <a href="{{ url('/')}}"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
                        </div>
                       </div>
                       <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                           <ul class="nav navbar-nav">
                              <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                              <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                              <li><a href="{{url('checkout')}}" class="active"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                              <li><a href="{{url('carts')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                              <li><a href="{{url('login')}}"><i class="fa fa-lock"></i> Login</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/header-middle-->
            <div class="header-bottom">
               <!--header-bottom-->
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
                              <li><a href="{{url('/')}}">Home</a></li>
                              <li class="dropdown">
                                 <a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                 <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/')}}">Products</a></li>
                                    <li><a href="">Product Details</a></li>
                                    <li><a href="">Checkout</a></li>
                                    <li><a href="" class="active">Cart</a></li>
                                    <li><a href="">Login</a></li>
                                 </ul>
                              </li>
                              <li class="dropdown">
                                 <a href="#">Blog<i class="fa fa-angle-down"></i></a>
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
                     <div class="col-sm-3">
                        <div class="search_box pull-right">
                           <input type="text" placeholder="Search"/>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/header-bottom-->
      </header>
      <!--/header-->
      <section id="cart_items">
         <div class="container">
            <div class="breadcrumbs">
               <ol class="breadcrumb">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a class="active" href="{{url('/checkout')}}">Check out</li>
               </ol>
            </div>
            <!--/breadcrums-->
            <div class="step-one">
               <h2 class="heading">Step1</h2>
            </div>
            <div class="checkout-options">
               <h3>New User</h3>
               <p>Checkout options</p>
               <ul class="nav">
                  <li>
                     <label><input type="checkbox"> Register Account</label>
                  </li>
                  <li>
                     <label><input type="checkbox"> Guest Checkout</label>
                  </li>
                  <li>
                     <a href=""><i class="fa fa-times"></i>Cancel</a>
                  </li>
               </ul>
            </div>
            <!--/checkout-options-->
            <div class="register-req">
               <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
            </div>
            <!--/register-req-->
            <div class="shopper-informations">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="shopper-info">
                        <p>Shopper Information</p>
                        <form>
                           <input type="text" placeholder="Display Name">
                           <input type="text" placeholder="User Name">
                           <input type="password" placeholder="Password">
                           <input type="password" placeholder="Confirm password">
                        </form>
                        <a class="btn btn-primary" href="">Get Quotes</a>
                        <a class="btn btn-primary" href="">Continue</a>
                     </div>
                  </div>
                  <div class="col-sm-5 clearfix">
                     <div class="bill-to">
                        <p>Bill To</p>
                        <div class="form-one">
                           <form>
                              <input type="text" placeholder="Company Name">
                              <input type="text" placeholder="Email*">
                              <input type="text" placeholder="Title">
                              <input type="text" placeholder="First Name *">
                              <input type="text" placeholder="Middle Name">
                              <input type="text" placeholder="Last Name *">
                              <input type="text" placeholder="Address 1 *">
                              <input type="text" placeholder="Address 2">
                           </form>
                        </div>
                        <div class="form-two">
                           <form>
                              <input type="text" placeholder="Zip / Postal Code *">
                              <select>
                                 <option>-- Country --</option>
                                 <option>United States</option>
                                 <option>Bangladesh</option>
                                 <option>UK</option>
                                 <option>India</option>
                                 <option>Pakistan</option>
                                 <option>Ucrane</option>
                                 <option>Canada</option>
                                 <option>Dubai</option>
                              </select>
                              <select>
                                 <option>-- State / Province / Region --</option>
                                 <option>United States</option>
                                 <option>Bangladesh</option>
                                 <option>UK</option>
                                 <option>India</option>
                                 <option>Pakistan</option>
                                 <option>Ucrane</option>
                                 <option>Canada</option>
                                 <option>Dubai</option>
                              </select>
                              <input type="password" placeholder="Confirm password">
                              <input type="text" placeholder="Phone *">
                              <input type="text" placeholder="Mobile Phone">
                              <input type="text" placeholder="Fax">
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="order-message">
                        <p>Shipping Order</p>
                        <textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                        <label><input type="checkbox"> Shipping to bill address</label>
                     </div>
                  </div>
               </div>
            </div>
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
            <div class="review-payment">
               <h2>Thông tin giỏ hàng & Thanh toán</h2>
            </div>
            <div class="table-responsive cart_info">
               <table class="table table-condensed">
                  <thead>
                     <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach(Cart::content() as $row) :?>
                     <tr>
                        <td class="cart_product">
                           <a href=""><img src="images/cart/one.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                           <h4><strong><?php echo $row->name; ?></strong></h4>
                           <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                        </td>
                        <td class="cart_price">
                           <p style="margin-top: 20px">{{ number_format($row->price, 0, ',','.') . ' VNĐ'}}</p>
                        </td>
                        <td class="cart_quantity">
                           <div class="cart_quantity_button">
                              <?php $rowId = (string)$row->rowId ?>
                              <form>
                                 <input type="button" value=" - " onclick="down('{{ $row->rowId }}')" >
                                 <input type="text" id="{{$row->rowId}}" name="quantity" value="{{ $row->qty }}" size="2" style="text-align: center;" >
                                 <input type="button" value=" + " onclick="up('{{ $row->rowId }}')" >
                              </form>
                           </div>
                        </td>
                        <td class="cart_total">
                           <p class="cart_total_price">{{ number_format($row->subtotal, 0, '.','.') . ' VNĐ' }}</p>
                        </td>
                        <td class="cart_delete">
                           <a class="cart_quantity_delete delete" href="{{ url('carts/delete/' . $row->rowId) }}"><i class="fa fa-times"></i></a>
                        </td>
                     </tr>
                     <?php endforeach;?>
                     <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                           <table class="table table-condensed total-result">
                              <tr>
                                 <td>Cart Sub Total</td>
                                 <td>{{ Cart::subtotal() }}</td>
                              </tr>
                              <tr>
                                 <td>Exo Tax</td>
                                 <td>{{ Cart::tax() }}</td>
                              </tr>
                              <tr class="shipping-cost">
                                 <td>Shipping Cost</td>
                                 <td>Free</td>
                              </tr>
                              <tr>
                                 <td>Total</td>
                                 <td><span>{{ Cart::total() . ' VNĐ' }}</span></td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="payment-options">
               <span>
               <label><input type="checkbox"> Direct Bank Transfer</label>
               </span>
               <span>
               <label><input type="checkbox"> Check Payment</label>
               </span>
               <span>
               <label><input type="checkbox"> Paypal</label>
               </span>
            </div>
         </div>
      </section>
      <!--/#cart_items-->
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
      <script src="{{asset('js/jquery.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
      <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
   </body>
   <script type="text/javascript">
      (function(){
          // $("#cart").on("click", function() {
          //
          //     $(".shopping-cart").fadeToggle( "fast");
          // });
          $("#cart").on("click", function() {
              var root = '{{url('/')}}';
              var str = "";
              $.get(root + '/loadCarts', function(data, status){
                  // console.log(data);
                  $.each(data.data, function (key, value) {
                      // console.log(value);
                      str += '<li>\
                      <span class="item"><span class="item-left">\
                      <img src="http://lorempixel.com/50/50/" alt="" />\
                      <span class="item-info"><span>' + value.name + '</span><span>23$ - </span></span></span>\
                      <span class="item-right"><button class="btn btn-xs btn-danger pull-right">x</button></span></span>\
                      </li>';
                  });
              }).then(function(){
                  // console.log(str);
                  $('.list-cart').replaceWith('<div class="list-cart">' + str + '</div>');
                  // $('#cart-list').append(str);
                  $(".shopping-cart").fadeToggle( "fast");
              });
          });
      })();
      function addCart(id)
      {
          var root = '{{url('/carts')}}';
          $.get(root + '/' + id + '/' + 'add', function(data, status){
              console.log(data);
          //   $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
            $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
          });
      }
      function down(rowId)
      {
      var root = '{{ url('/carts') }}';
      $.get( root + '/' + rowId + '/down-count', function(data, status){
      var sub = data.subtotal.toLocaleString();
      console.log(data);
      $('#'+ rowId).replaceWith('<input type="text" id="'+rowId+'" name="quantity" value="' + data.qty +'" size="2" style="text-align: center;">');
      $('#sub' + rowId).replaceWith('<span id="sub'+rowId+'">'+sub+' VNĐ </span>');
      $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
      });
      }
      function up(rowId)
      {
      var root = '{{ url('/carts') }}';
      $.get( root + '/' + rowId + '/up-count', function(data, status){
      var sub = data.subtotal.toLocaleString();
      console.log(data);
      $('#'+ rowId).replaceWith('<input type="text" id="'+rowId+'" name="quantity" value="' + data.qty +'" size="2" style="text-align: center;">');
      $('#sub' + rowId).replaceWith('<span id="sub'+rowId+'">'+sub+' VNĐ </span>');
      $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
      });
      }
      $( ".delete" ).click(function() {
      alert( "xóa thành công." );
      });
   </script>
   <style>
      ul.dropdown-cart{
      min-width:250px;
      }
      ul.dropdown-cart li .item{
      display:block;
      padding:3px 10px;
      margin: 3px 0;
      }
      ul.dropdown-cart li .item:hover{
      background-color:#f3f3f3;
      }
      ul.dropdown-cart li .item:after{
      visibility: hidden;
      display: block;
      font-size: 0;
      content: " ";
      clear: both;
      height: 0;
      }
      ul.dropdown-cart li .item-left{
      float:left;
      }
      ul.dropdown-cart li .item-left img,
      ul.dropdown-cart li .item-left span.item-info{
      float:left;
      }
      ul.dropdown-cart li .item-left span.item-info{
      margin-left:10px;
      }
      ul.dropdown-cart li .item-left span.item-info span{
      display:block;
      }
      ul.dropdown-cart li .item-right{
      float:right;
      }
      ul.dropdown-cart li .item-right button{
      margin-top:14px;
      }
   </style>
</html>
