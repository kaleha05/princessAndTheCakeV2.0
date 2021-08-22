<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{asset('assets/img/faiza-logo.png')}}" type="image/x-icon" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Princess and the Cake</title>

	<!-- Icon css link -->
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendors/linearicons/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Rev slider css -->
	<link href="{{asset('assets/vendors/revolution/css/settings.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendors/revolution/css/layers.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendors/animate-css/animate.css')}}" rel="stylesheet">

	<!-- Extra plugin css -->
	<link href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendors/magnifc-popup/magnific-popup.css')}}" rel="stylesheet">

	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

	<!--================Main Header Area =================-->
	<header class="main_header_area">
        <div class="top_header_area row m0">
			<div class="container">
				<div class="float-left">
					<a></a>
				</div>
			</div>
		</div>
		<div class="main_menu_area">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.html">
						<img src="{{asset('assets/img/faiza-logo.png')}}" width="80px" height="80px" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="my_toggle_menu">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li><a href="{{url('')}}">Home</a></li>
							<li><a href="{{url('portfolio')}}">Portfolio</a></li>
							<li><a href="{{url('blog')}}">Recipe Blog</a></li>
							<li><a href="{{url('faq')}}">Services</a></li>
						</ul>
						<ul class="navbar-nav justify-content-end">
							<li><a href="{{url('prices')}}">Price Guide</a></li>
							<li><a href="{{url('reviews')}}">Reviews</a></li>
							<li><a href="{{url('faq')}}">Faq</a></li>
							<li><a href="{{url('contacts')}}">Contact Us</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>