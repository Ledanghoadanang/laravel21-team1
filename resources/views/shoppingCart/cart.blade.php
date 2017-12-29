<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Cart | TEAM 1</title>
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
                           <li><a href="{{url('checkout')}}" ><i class="fa fa-crosshairs"></i> Checkout</a></li>
                           <li><a href="{{url('carts')}}" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                           @if (Auth::check())
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
                  <li><a href="#">Home</a></li>
                  <li class="active">Shopping Cart</li>
               </ol>
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
                           <a href=""><img src="{{asset('images/products/10.jpg')}}" alt=""></a>
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
                              <?php $rowId = (string)$row->rowId?>
                              <form>

                                 <input type="button" value=" - " onclick="down('{{ $row->rowId }}')">
                                 <input type="text" id="{{$row->rowId}}" name="quantity" value="{{ $row->qty }}" size="2" style="text-align: center;" >
                                 <input type="button" value=" + " onclick="up('{{ $row->rowId }}')" >
                              </form>
                           </div>
                        </td>
                        <td class="cart_total">
                           <p class="cart_total_price">
                             <td><span id="subtotal">{{ $row->subtotal }}</span></td>

                           </p>
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
                             <div class="total_area">
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
                                 <td><span id="total">{{ Cart::total() . ' VNĐ' }}</span></td>
                              </div>
                              </tr>
                           </table>
                           <table>
                             <a class="btn btn-default check_out" href="{{ url('/checkout')}}">Check Out</a>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </section>
      <!--/#cart_items-->
      <section id="do_action">
         <div class="container">
            <div class="heading">
               <h3>What would you like to do next?</h3>
               <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
               <div class="col-sm-6">
                  <div class="chose_area">
                     <ul class="user_option">
                        <li>
                           <input type="checkbox">
                           <label>Use Coupon Code</label>
                        </li>
                        <li>
                           <input type="checkbox">
                           <label>Use Gift Voucher</label>
                        </li>
                        <li>
                           <input type="checkbox">
                           <label>Estimate Shipping & Taxes</label>
                        </li>
                     </ul>
                     <ul class="user_info">
                        <li class="single_field">
                           <label>Country:</label>
                           <select>
                              <option>United States</option>
                              <option>Bangladesh</option>
                              <option>UK</option>
                              <option>India</option>
                              <option>Pakistan</option>
                              <option>Ucrane</option>
                              <option>Canada</option>
                              <option>Dubai</option>
                           </select>
                        </li>
                        <li class="single_field">
                           <label>Region / State:</label>
                           <select>
                              <option>Select</option>
                              <option>Dhaka</option>
                              <option>London</option>
                              <option>Dillih</option>
                              <option>Lahore</option>
                              <option>Alaska</option>
                              <option>Canada</option>
                              <option>Dubai</option>
                           </select>
                        </li>
                        <li class="single_field zip-field">
                           <label>Zip Code:</label>
                           <input type="text">
                        </li>
                     </ul>
                     <a class="btn btn-default update" href="">Get Quotes</a>
                     <a class="btn btn-default check_out" href="">Continue</a>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="total_area">
                     <ul>
                        <li>Cart Sub Total <span>$59</span></li>
                        <li>Eco Tax <span>$2</span></li>
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>$61</span></li>
                     </ul>
                     <a class="btn btn-default update" href="">Update</a>
                     <a class="btn btn-default check_out" href="">Check Out</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/#do_action-->
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

         $('#subtotal').replaceWith('<span id="subtotal">' + data.count +'</span> ');


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
          $('#subtotal').replaceWith('<span id="subtotal">' + data.subtotal +'</span> ');
         });
         }
         $( ".delete" ).click(function() {
         alert( "xóa thành công." );
         });
      </script>
   </body>
</html>
