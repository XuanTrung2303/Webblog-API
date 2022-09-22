<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
        <title>Blog API Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.html"><img src="{{asset('images/logo-1.png')}}" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span>
					<ul class="navig">
						<li><a href="{{url('/')}}"  class="active">Trang chủ</a></li>
						<li><a href="about.html">Về chúng tôi</a></li>
						<li><a href="gallery.html">Tin tức</a></li>
					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="" placeholder="Tìm kiếm.....">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="gg"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
            <!-- main start -->
    @yield('content')
            <!-- main end -->
	<!--slide-starts-->
	<div class="slide">
		<div class="container">
			<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{asset('images/s-1.jpg')}}" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{asset('images/s-2.jpg')}}" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{asset('images/s-3.jpg')}}" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{asset('images/s-4.jpg')}}" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{asset('images/s-5.jpg')}}" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{asset('images/s-6.jpg')}}" class="img-responsive" alt="">
						</div>
					</a>
				</li>
			</ul>

							 <script type="text/javascript">
								$(window).load(function() {

									$("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: {
											portrait: {
												changePoint:480,
												visibleItems: 2
											},
											landscape: {
												changePoint:640,
												visibleItems: 3
											},
											tablet: {
												changePoint:768,
												visibleItems: 3
											}
										}
									});

								});
								</script>
                <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>© 2015 Coffee Break. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>
