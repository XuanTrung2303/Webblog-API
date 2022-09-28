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
        <title>GAMEX</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.html"> <img width="200px" src="{{asset('images/logo-2.jpg')}}" alt="" /> </a>
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
						<li><a href="{{url('/')}}"  >HOME</a></li>
						<!-- <li><a href="about.html">Về chúng tôi</a></li> -->
						@foreach($category as $key => $cate)
                        <li><a href="{{route('danh-muc.show',['id'=>$cate->id,'slug'=>Str::slug($cate->title)])}}">{{$cate->title}}</a></li>
                        @endforeach
					</ul>
			</div>
			<div class="header-right">
                <form action="{{url('tim-kiem')}}" method="GET">
                    @csrf
				<div class="search-bar">
					<input type="text" name="keywords" placeholder="Tìm kiếm.....">
					<input type="submit" value="Tìm kiếm" name="timkiem">
				</div>
                </form>
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

	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>© 2022. All Rights Reserved | Design by Nguyen Xuan Trung </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>
