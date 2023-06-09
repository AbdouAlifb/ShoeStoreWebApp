<!DOCTYPE HTML>
<html>
	<head>
	<title>Shoe Shop</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('storage/images/my_logo.png') }}">
   
	
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<!-- Animate.css -->
<link rel="stylesheet" href="{{ url('web/css/animate.css') }}">

<!-- Icomoon Icon Fonts -->
<link rel="stylesheet" href="{{ url('web/css/icomoon.css') }}">

<!-- Ion Icon Fonts -->
<link rel="stylesheet" href="{{ url('web/css/ionicons.min.css') }}">

<!-- Bootstrap -->
<!-- <link rel="stylesheet" href="{{ url('web/css/bootstrap.min.css') }}"> -->
<link rel="stylesheet" href="{{ asset('web/css/custom.css') }}">


<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ url('web/css/magnific-popup.css') }}">

<!-- Flexslider -->
<link rel="stylesheet" href="{{ url('web/css/flexslider.css') }}">


<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ url('web/css/owl.carousel.min.css') }}">
<!--  -->
	<link rel="stylesheet" href="{{url('web/css/owl.theme.default.min.css')}}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{url('web/css/bootstrap-datepicker.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{url('web/fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{url('web/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="{{ route('home') }}">Shoe Store</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
						<!-- search barre  -->

						<form action="{{ route('search') }}" method="GET" class="search-wrap">
							<div class="form-group">
								<input type="search" name="query" class="form-control search" placeholder="Search" autocomplete="off">
								<button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
							</div>
						</form>


			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
						<ul>
						
					<li><a href="{{ route('house') }}">Home</a></li>
							<li class="has-dropdown">
								<a href="{{ route('shoes.men') }}" id="men-link">Men</a>
								
					</li>
							<li><a href="{{ route('shoes.women') }}">Women</a></li>
							<li><a href="{{ route('shoes.about') }}">About</a></li>
							<li><a href="{{ route('shoes.contactUs') }}">Contact</a></li>
							<!-- cart  -->
								
							@auth
								<li>
									<a class="nav-link" href="{{ route('cart.show') }}">
								
										<span class="icon-shopping-cart">[ {{ $cartItemCount }} ]</span>
									</a>
								</li>
							@endauth 

  <!-- auth name and logout -->
							<li class="cart">
								@auth
									<span>Welcome</span>
									<span>{{ Auth::user()->name }}</span>
									<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger logout-button" style="background-color: #88c8bc; border-color: #88c8bc; color: #fff;">Logout</a>


							
							</a>


									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								@else
									<a href="{{ route('login') }}">Login</a>
								@endauth
							</li>
							<li class="cart">
								@guest
									<a href="{{ route('register') }}">Register</a>
								@endguest
							</li>



</ul>

						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">Welcome to your favorite Store </a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Where every Shoe style is HERE !!!!</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav> 


		<section>
        @yield('content')
    </section>







		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Footwear</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col footer-col">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	

	
	<!-- jQuery -->
	<script src="{{url('web/js/jquery.min.js')}}"></script>
   <!-- popper -->
   <script src="{{url('web/js/popper.min.js')}}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{url('web/js/bootstrap.min.js')}}"></script>
   <!-- jQuery easing -->
   <script src="{{url('web/js/jquery.easing.1.3.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{url('web/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{url('web/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{url('web/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{url('web/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('web/js/magnific-popup-options.js')}}"></script>
	<!-- Date Picker -->
	<script src="{{url('web/js/bootstrap-datepicker.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{url('web/js/jquery.stellar.min.js')}}"></script>
	<!-- Main -->
	<script src="{{url('web/js/main.js')}}"></script>


	</body>
</html>