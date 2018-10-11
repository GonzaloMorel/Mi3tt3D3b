@extends('layouts.main')


@section('slidetop')

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> WHY SMARTY?</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
							<li><b>Phone:</b> 1-800-565-2390</li>
							<li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->
@endsection


@section('header')
			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky  header-md transparent clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container"><!-- add .full-container for fullwidth -->

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->

							

						</ul>
						<!-- /BUTTONS -->

						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="assets/images/miette/logo_web.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- HOME -->
										<a href="#">
											HOME
										</a>
									</li>
									<li class="dropdown"><!-- OFERTAS -->
										<a href="#promociones">
											PROMOCIONES
										</a>										
									</li>
									<li class="dropdown"><!-- PRODUCTOS -->
										<a href="#productos">
											PRODUCTOS
										</a>										
									</li>
									<li class="dropdown"><!-- CONTACTO -->
										<a href="#contacto">
											CONTACTO
										</a>
									</li>
									<li class="dropdown"><!-- SHORTCODES -->
										<a href="#clientes">
											CLIENTES
										</a>
									</li>

								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

@endsection


@section('sliderHead')
			<!-- 
				SLIDER

				Classes:
					.fullheight = full height slider
			-->
			<section id="slider" class="fullheight">

				<!--
					SWIPPER SLIDER PARAMS
					
					data-effect="slide|fade|coverflow"
					data-autoplay="2500|false" 						(remove to disable autoplay)
				-->
				<div class="swiper-container" data-effect="fade" data-autoplay="5000|false">
					<div class="swiper-wrapper">

						<!-- SLIDE 1 -->
						<div class="swiper-slide" style="background-image: url('{{ asset('assets/images/miette/original/105.jpg') }}');">
							<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 wow fadeInUp" data-wow-delay="0.6s">Sus deliciosos productos, elaborados a mano por su propia dueña, tienen el mágico don de despertar el apetito a cualquiera... </p>
												<!--<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">PURCHASE NOW</a>-->

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 1 -->

						<!-- SLIDE 3 -->
						<div class="swiper-slide" style="background-image: url('{{ asset('assets/images/miette/original/mc-32.jpg') }}');">
							<div class="overlay dark-6"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 wow fadeInUp" data-wow-delay="0.6s">Se trata de Miette, un salón de té ubicado a pasos de Escuela Militar que recientemente abrió sus puertas al público para ofrecer una exquisita repostería artesanal.... </p>
												<!--<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">PURCHASE NOW</a>-->

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 3 -->


						<!-- SLIDE 4 -->
						<div class="swiper-slide" style="background-image: url('{{ asset('assets/images/miette/original/98.jpg') }}');">
							<div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 wow fadeInUp" data-wow-delay="0.6s">Con sus tortas, cheescakes, brownies, blondies, galletas y cinammon rolls.... </p>
												<!--<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">PURCHASE NOW</a>-->

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 4 -->

						<!-- SLIDE 4 -->
						<div class="swiper-slide" style="background-image: url('{{ asset('assets/images/miette/original/102.jpg') }}');">
							<div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 wow fadeInUp" data-wow-delay="0.6s">Miette busca rescatar la cocina de las abuelas, esa que se hace a mano, paso a paso, cuidando cada detalle, utilizando ingredientes naturales y frescos, logrando así sabores, texturas y aromas caseros como los de antaño. </p>
												<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">Conocenos Mas</a>

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 4 -->
					</div>

					<!-- Swiper Pagination -->
					<div class="swiper-pagination"></div>

					<!-- Swiper Arrows -->
					<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
					<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
				</div>
					
			</section>
			<!-- /SLIDER -->

@endsection

@section('section')

			<!-- -->
			<section>
				<div class="container">
					<div class="row">
					
						<div class="col-md-4">
							
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Passion</h3>
							</div>
							
							<p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>
							
							<a href="#">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Precision</h3>
							</div>
							<p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>

							<a href="#">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Simplicity</h3>
							</div>
							<p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>

							<a href="#">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

					</div>
					
				</div>
			</section>
			<!-- / -->
@endsection

@section('paralax_productos')

	<!-- 
		PAGE HEADER 
		
		CLASSES:
			.page-header-xs	= 20px margins
			.page-header-md	= 50px margins
			.page-header-lg	= 80px margins
						.page-header-xlg= 130px margins
			.dark		= dark page header
			.light		= light page header
	-->
	<section class="page-header page-header-lg parallax parallax-3" style="background-image:url('assets/images/miette/paralax/productos.jpg')">
		<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

		<div class="container">

			<h1>Productos</h1>
			<!--<span class="font-lato size-18 weight-300">We believe in Simple & Creative</span>-->

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Features</a></li>
				<li class="active">Page Title</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->
@endsection

@section("productos")

			<!-- OWL SLIDER -->
			<section>
				<div class="container">

					<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"items": 1, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/blondie_frambuesa.jpg" alt="">
							<div class="descripcion-producto">
								<h3>Descripci&oacute;n</h3>
								<p>Esta es la descripción del producto</p>
							</div>
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/brownie_nuez.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/brownie_tradicional.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/carrot_cake.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/cinnamon_rolls.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/galletas.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/galletones.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_amapolas.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_avellana_nutela.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_chocolate_beileys.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_meme.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_pompadour.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_zanahoria.jpg" alt="">
						</div>
					</div>

				</div>
			</section>
			<!-- /OWL SLIDER -->
@endsection

@section("titulo_produtos")

	<!-- 
		PAGE HEADER 
		
		CLASSES:
			.page-header-xs	= 20px margins
			.page-header-md	= 50px margins
			.page-header-lg	= 80px margins
						.page-header-xlg= 130px margins
			.dark		= dark page header
			.light		= light page header
	-->
	<section class="page-header miette_menta_claro">
		<div class="container">

			<h1><strong>Productos</strong></h1>
			<!--<span class="font-lato size-18 weight-300">We believe in Simple & Creative</span>-->

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Features</a></li>
				<li class="active">Page Title</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->
@endsection


@section("titulo_promociones")

	<!-- 
		PAGE HEADER 
		
		CLASSES:
			.page-header-xs	= 20px margins
			.page-header-md	= 50px margins
			.page-header-lg	= 80px margins
						.page-header-xlg= 130px margins
			.dark		= dark page header
			.light		= light page header
	-->
	<section class="page-header miette_menta_claro">
		<div class="container">

			<h1><strong>Promociones</strong></h1>
			<!--<span class="font-lato size-18 weight-300">We believe in Simple & Creative</span>-->

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Features</a></li>
				<li class="active">Page Title</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->
@endsection


@section('footer')

	<footer id="footer">
		<div class="container">

			<div class="row">
				
				<div class="col-md-8">

					<!-- Footer Logo -->
					<img class="footer-logo footer-2" src="assets/images/miette/logo_web.png" alt="" />

					<!-- Small Description -->
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

					<hr />

					<div class="row">
						<div class="col-md-6 col-sm-6">

							<!-- Newsletter Form -->
							<p class="margin-bottom-10">Subscribe to Our <strong>Newsletter</strong></p>

							<form id="newsletterForm" action="php/newsletter.php" role="form" method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" required="required">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->
						</div>

						<div class="col-md-6 col-sm-6 hidden-xs">

							<!-- Social Icons -->
							<div class="margin-left-50 clearfix">

								<p class="margin-bottom-10">Follow Us</p>
								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>

							</div>
							<!-- /Social Icons -->

						</div>
						
					</div>



				</div>

				<div class="col-md-4" id="contacto">

					<h4 class="letter-spacing-1">CONTACTANOS</h4>

					<!-- CONTACT MESSAGES -->
					<p id="alert_success" class="alert alert-success alert-mini">Message sent! Thank You!</p>
					<p id="alert_failed" class="alert alert-danger alert-mini">Message not sent!</p>
					<p id="alert_mandatory" class="alert alert-danger alert-mini">Please, complete all mandatory fields</p>

					<!-- CONTACT FORM -->
					<form class="validate" method="post" action="php/contact.php">
						
						<input type="text" value="" placeholder="Nombre*" maxlength="100" class="form-control required" name="contact[name]" />
						<input type="email" value="" placeholder="Email*" data-msg-email="Por favor Ingresar una dirección de correo válida." class="form-control required" name="contact[email]" />
						<textarea maxlength="5000" placeholder="Mensaje*" rows="3" class="form-control required" name="contact[message]"></textarea>
						<input type="submit" value="ENVIAR MENSAJE" class="btn btn-success" />

					</form>
					<!-- /CONTACT FORM -->

				</div>

			</div>

		</div>

		<div class="copyright">
			<div class="container">
				<ul class="list-inline inline-links mobile-block pull-right nomargin">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Contact</a></li>
				</ul>

				&copy; All Rights Reserved, Company LTD
			</div>
		</div>
	</footer>

@endsection

@section('revolution_slider')
					<!-- REVOLUTION SLIDER -->
					<div class="slider fullwidthbanner-container roundedcorners margin-bottom-100">
						<!--
							Navigation Styles:
							
								data-navigationStyle="" theme default navigation
								
								data-navigationStyle="preview1"
								data-navigationStyle="preview2"
								data-navigationStyle="preview3"
								data-navigationStyle="preview4"
								
							Bottom Shadows
								data-shadow="1"
								data-shadow="2"
								data-shadow="3"
								
							Slider Height (do not use on fullscreen mode)
								data-height="300"
								data-height="350"
								data-height="400"
								data-height="450"
								data-height="500"
								data-height="550"
								data-height="600"
								data-height="650"
								data-height="700"
								data-height="750"
								data-height="800"
						-->
						<div class="fullwidthbanner" data-height="500" data-shadow="3" data-navigationStyle="">
							<ul class="hide">

								<!-- SLIDE  -->
								<li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
									<img src="assets/images/1x1.png" data-lazyload="assets/images/miette/productos/blondie_frambuesa.jpg" alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />

									<div class="tp-caption lft start" 
										data-x="0" 
										data-y="0" 
										data-speed="750" 
										data-start="750" 
										data-easing="easeOutExpo" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300">
											<img src="assets/images/1x1.png" alt="" data-lazyload="assets/images/caption_bg.png">
									</div>

									<div class="tp-caption medium_light_white lfb start" 
										data-x="left" data-hoffset="70"
										data-y="96" 
										data-speed="300" 
										data-start="1200" 
										data-easing="easeOutExpo" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300">
											Smarty Great<br /> Revolution Captions
									</div>

									<div class="tp-caption block_black lfl start" 
										data-x="left" data-hoffset="70"
										data-y="195" 
										data-speed="300" 
										data-start="1500" 
										data-easing="easeOutExpo" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300" >
											New Features Always Added
									</div>

									<div class="tp-caption small_light_white lfl start" 
										data-x="left" data-hoffset="70"
										data-y="250" 
										data-speed="1000" 
										data-start="1800" 
										data-easing="easeOutExpo" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300" >
											Awesome sliders give you the opportunity<br />  
											to showcase important content. Smarty will<br />  
											constantly be updated with brand new<br /> 
											features and additions.
									</div>
								</li>

								<!-- SLIDE  -->
								<li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off" >
									<img src="assets/images/1x1.png" data-lazyload="assets/images/miette/productos/brownie_nuez.jpg" alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />

									<div class="tp-caption lft start" 
										data-x="right" 
										data-y="0" 
										data-speed="750" 
										data-start="750" 
										data-easing="easeOutExpo" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300">
											<img src="assets/images/1x1.png" alt="" data-lazyload="assets/images/caption_bg.png">
									</div>

									<div class="tp-caption medium_light_white lfb start" 
										data-x="left" data-hoffset="810"
										data-y="96" 
										data-speed="300" 
										data-start="1200" 
										data-easing="easeOutExpo" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300">
											Epona Great<br /> Revolution Captions
									</div>

									<div class="tp-caption block_black lfl start" 
										data-x="left" data-hoffset="810"
										data-y="195" 
										data-speed="300" 
										data-start="1500" 
										data-easing="easeOutExpo" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300" >
											New Features Always Added
									</div>

									<div class="tp-caption small_light_white lfl start" 
										data-x="left" data-hoffset="810"
										data-y="250" 
										data-speed="1000" 
										data-start="1800" 
										data-easing="easeOutExpo" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300" >
											Awesome sliders give you the opportunity<br />  
											to showcase important content. Smarty will<br />  
											constantly be updated with brand new<br /> 
											features and additions.
									</div>
								</li>

								<!-- SLIDE  -->
								<li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off" >
									<img src="assets/images/1x1.png" data-lazyload="assets/images/miette/productos/carrot_cake.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

									<div class="tp-caption lft start" 
										data-x="-86" 
										data-y="296" 
										data-speed="750" 
										data-start="750" 
										data-easing="easeOutExpo" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300">
										<img src="assets/images/1x1.png" alt="" data-lazyload="assets/images/caption_bg.png">
									</div>

									<div class="tp-caption medium_light_white lfb start" 
										data-x="34" 
										data-y="320" 
										data-speed="300" 
										data-start="1500" 
										data-easing="easeOutExpo" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300" >
											Smarty Responsive<br /> Template
									</div>

									<div class="tp-caption small_light_white lfb start" 
										data-x="34" 
										data-y="400" 
										data-speed="300" 
										data-start="1500" 
										data-easing="easeOutExpo" 
										data-splitin="none" 
										data-splitout="none" 
										data-elementdelay="0.1" 
										data-endelementdelay="0.1" 
										data-endspeed="300" >
											Awesome sliders give you the <br /> 
											opportunity to showcase important<br />
											content.
									</div>

								</li>

							</ul>

							<div class="tp-bannertimer"><!-- progress bar --></div>
						</div>
					</div>
					<!-- /REVOLUTION SLIDER -->
@endsection

@section('contacto_mayorista')
			<!-- CALLOUT -->
			<div class="callout bg_miette_menta_claro ">
				<div class="container">

					<div class="row">

						<div class="col-md-9"><!-- title + shortdesc -->
							<h3>¿Eres empresa o tienes tu negocio y te interesan nuestros productos?</h3>
							<p>Ingresa, contesta el formulario, y te contactaremos!</p>
						</div>

						<div class="col-md-3"><!-- button -->
							<a href="page-careers.html" class="btn btn-primary btn-lg">Contacto</a>
						</div>

					</div>

				</div>
			</div>
			<!-- /CALLOUT -->
@endsection

@section('clientes')
			<!-- CLIENTS -->
			<section class="padding-xs" id="clientes">
				<div class="container">
	
					<header class="text-center margin-bottom-60">
						<h4>CLIENTES FELICES</h4>
					</header>
					

					<ul class="row clients-dotted list-inline">
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/1.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/2.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/3.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/4.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/5.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/6.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/7.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/8.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/1.jpg" alt="client" />
							</a>
						</li>
						<li class="col-md-5th col-sm-5th col-xs-6">
							<a href="#">
								<img class="img-responsive" src="assets/images/demo/brands/2.jpg" alt="client" />
							</a>
						</li>
					</ul>

				</div>
			</section>
			<!-- /CLIENTS -->
@endsection

@section("portafolio")
			<!-- -->
			<section>
				<div class="container">

					<div id="portfolio" class="portfolio-gutter">

						<ul class="nav nav-pills mix-filter margin-bottom-60">
							<li data-filter="all" class="filter active"><a href="#">All</a></li>
							<li data-filter="development" class="filter"><a href="#">Development</a></li>
							<li data-filter="photography" class="filter"><a href="#">Photography</a></li>
							<li data-filter="design" class="filter"><a href="#">Design</a></li>
						</ul>


						<div class="row mix-grid">

							<div class="col-md-4 col-sm-4 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>

										<!-- carousel -->
										<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
											<div>
												<img class="img-responsive" src="assets/images/demo/mockups/600x399/8-min.jpg" width="600" height="399" alt="">
											</div>
											<div>
												<img class="img-responsive" src="assets/images/demo/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
											</div>
											<div>
												<img class="img-responsive" src="assets/images/demo/mockups/600x399/10-min.jpg" width="600" height="399" alt="">
											</div>
										</div>
										<!-- /carousel -->

										</figure>
								</div>

							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix development"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/20-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>
										<img class="img-responsive" src="assets/images/demo/mockups/600x399/20-min.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/19-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>
										<img class="img-responsive" src="assets/images/demo/mockups/600x399/19-min.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>
										<img class="img-responsive" src="assets/images/demo/mockups/600x399/11-min.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>
										<img class="img-responsive" src="assets/images/demo/mockups/600x399/12-min.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix development"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/13-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>
										<img class="img-responsive" src="assets/images/demo/mockups/600x399/13-min.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>
										<img class="img-responsive" src="assets/images/demo/mockups/600x399/14-min.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/17-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>
										<img class="img-responsive" src="assets/images/demo/mockups/600x399/17-min.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/16-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>
										<img class="img-responsive" src="assets/images/demo/mockups/600x399/16-min.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

						</div>

					</div>
					
				</div>
			</section>
			<!-- / 
@endsection