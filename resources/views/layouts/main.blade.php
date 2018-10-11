<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Miette - Made With Love</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{{  asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- SWIPER SLIDER -->
		<link href="{{  asset('assets/plugins/slider.swiper/dist/css/swiper.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="{{ asset('assets/css/essentials.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{  asset('assets/css/layout.css') }}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{  asset('assets/css/header-1.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{  asset('assets/css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- Miette -->
		<link href="{{  asset('assets/css/miette.css') }}" rel="stylesheet" type="text/css" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE <div together=".boxed" with="" class=""></div>
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- Slidetop -->
		

		<!-- wrapper -->
		<div id="wrapper">
		
			@yield('header')

			@yield('sliderHead')
			
			<br/><br/>
			<div id="promociones"></div>
			<br/><br/>

			@yield('titulo_promociones')
			<br/><br/>
			@yield('revolution_slider')

			<br/><br/>
			<div id="productos"></div>
			<br/><br/>

			@yield('titulo_produtos')
			<br/><br/>
			@yield('portafolio')
			
			<br/><br/>
			@yield('contacto_mayorista')

			<div id="clientes"></div>
			<br/><br/>
			@yield('clientes')

			<br/><br/>

			@yield('footer')

		</div>
		<!-- /wrapper -->

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '{{  asset('assets/plugins') }}/';</script>
		<script type="text/javascript" src="{{  asset('assets/plugins/jquery/jquery-2.1.4.min.js') }}"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>

		<!-- SCRIPTS -->
		<script type="text/javascript" src="{{  asset('assets/js/scripts.js')}}"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<!--<script async type="text/javascript" src="{{  asset('assets/plugins/styleswitcher/styleswitcher.js')}}"></script>-->

		<!-- SWIPER SLIDER -->
		<script type="text/javascript" src="{{  asset('assets/plugins/slider.swiper/dist/js/swiper.min.js')}}"></script>
		<script type="text/javascript" src="{{  asset('assets/js/view/demo.swiper_slider.js')}}"></script>
		
	</body>
</html>