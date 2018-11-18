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




@section('sliderHeadold')
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
						@foreach($sliders as $slider)
						<div class="swiper-slide" style="background-image: url('{{ $slider->url_picture}} ');">
							<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 wow fadeInUp" data-wow-delay="0.6s">{{ $slider->text}} </p>
												<!--<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">PURCHASE NOW</a>-->

											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
						@endforeach
						<!-- /SLIDE 1 -->


					<!-- Swiper Pagination -->
					<div class="swiper-pagination"></div>

					<!-- Swiper Arrows -->
					<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
					<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
				</div>

			</section>
			<!-- /SLIDER -->

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

												<h1 class="font-raleway wow fadeInUp menta_miette_letra open_sans" data-wow-delay="0.4s">MADE WITH L<i class="et-heart corazon"></i>VE</h1>
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

												<h1 class="font-raleway wow fadeInUp menta_miette_letra open_sans" data-wow-delay="0.4s">MADE WITH L<i class="et-heart corazon"></i>VE</h1>
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

												<h1 class="font-raleway wow fadeInUp menta_miette_letra open_sans" data-wow-delay="0.4s">MADE WITH L<i class="et-heart corazon"></i>VE</h1>
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

												<h1 class="font-raleway wow fadeInUp menta_miette_letra open_sans" data-wow-delay="0.4s">MADE WITH L<i class="et-heart corazon"></i>VE</h1>
												<p class="lead font-lato weight-300 wow fadeInUp" data-wow-delay="0.6s">Miette busca rescatar la cocina de las abuelas, esa que se hace a mano, paso a paso, cuidando cada detalle, utilizando ingredientes naturales y frescos, logrando así sabores, texturas y aromas caseros como los de antaño. </p>
												<!--<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">Conocenos Mas</a>-->

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
			<!--<ol class="breadcrumb">
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


@section('productos2')
	<!-- -->
	<section>
		<div class="container">

			<!--<ul id="portfolio_filter" class="nav nav-pills margin-bottom-60">
				<li class="filter active"><a data-filter="*" href="#">All</a></li>
				<li class="filter"><a data-filter=".development" href="#">Development</a></li>
				<li class="filter"><a data-filter=".photography" href="#">Photography</a></li>
				<li class="filter"><a data-filter=".design" href="#">Design</a></li>
			</ul>-->

			<div id="portfolio" class="clearfix portfolio-isotope portfolio-isotope-2">

				<div class="portfolio-item development"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="FotosMiette2018/_NIK5523.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title -->
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title -->

							</span>

							<img class="img-responsive" src="FotosMiette2018/_NIK5523.jpg" width="600" height="399" alt="">
						</figure>
					</div>

				</div><!-- /item -->


				<div class="portfolio-item photography"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="FotosMiette2018/_NIK5615.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title -->
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title -->

							</span>

							<img class="img-responsive" src="FotosMiette2018/_NIK5615.jpg" width="600" height="399" alt="">
						</figure>
					</div>

				</div><!-- /item -->


				<div class="portfolio-item design"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="FotosMiette2018/_NIK5656.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title -->
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title -->

							</span>

							<img class="img-responsive" src="FotosMiette2018/_NIK5656.jpg" width="600" height="399" alt="">
						</figure>
					</div>

				</div><!-- /item -->


				<div class="portfolio-item design"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="FotosMiette2018/_NIK5715.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title -->
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title -->

							</span>

							<img class="img-responsive" src="FotosMiette2018/_NIK5715.jpg" width="600" height="399" alt="">
						</figure>
					</div>

				</div><!-- /item -->


				<div class="portfolio-item development"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="FotosMiette2018/_NIK5744.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title -->
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title -->

							</span>

							<img class="img-responsive" src="FotosMiette2018/_NIK5744.jpg" width="600" height="399" alt="">
						</figure>
					</div>

				</div><!-- /item -->


				<div class="portfolio-item photography"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="FotosMiette2018/_NIK5784.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title -->
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title -->

							</span>
							<img class="img-responsive" src="FotosMiette2018/_NIK5784.jpg" width="600" height="399" alt="">
						</figure>
					</div>

				</div><!-- /item -->


				<div class="portfolio-item design"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="FotosMiette2018/_NIK5817.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title -->
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title -->

							</span>

							<img class="img-responsive" src="FotosMiette2018/_NIK5817.jpg" width="600" height="399" alt="">
						</figure>
					</div>

				</div><!-- /item -->

				<div class="portfolio-item design"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="FotosMiette2018/_NIK5825.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title -->
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title -->

							</span>

							<img class="img-responsive" src="FotosMiette2018/_NIK5825.jpg" width="600" height="399" alt="">
						</figure>
					</div>

				</div><!-- /item -->


				<!--<div class="portfolio-item photography"><!-- item --

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox --
									<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details --
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>

								<!-- overlay title --
								<div class="item-box-overlay-title">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div><!-- /overlay title --


							</span>

							<!-- carousel --
							<div class="flexslider" data-arrowNav="false" data-slideshowSpeed="3000">
								<ul class="slides">

									<!-- Slide 1 --
									<li>
										<a href="#">
											<img class="img-responsive" src="assets/images/demo/mockups/600x399/8-min.jpg" width="600" height="399" alt="">
										</a>
									</li>

									<!-- Slide 2 --
									<li>
										<a href="#">
											<img class="img-responsive" src="assets/images/demo/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
										</a>
									</li>

									<!-- Slide 3 --
									<li>
										<a href="#">
											<img class="img-responsive" src="assets/images/demo/mockups/600x399/10-min.jpg" width="600" height="399" alt="">
										</a>
									</li>

								</ul>
							</div>
							<!-- /carousel --

							</figure>
					</div>

				</div><!-- /item -->

			</div>

		</div>
	</section>
	<!-- / -->
@endsection

{{--posible--}}
@section('promociones')
	<!-- LAYER SLIDER -->
	<section id="slider">

		<div class="slider">

			<!--
				AVAILABLE CLASSES
					.height-300
					.height-350
					.height-400
					.height-450
					.height-500
					.height-550
					.height-600
					.height-650
					.height-700
					.height-750
					.height-800
			-->
			<div class="layerslider height-500" style="width:100%;">

				<!-- SLIDE -->
				<div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">

					<!-- background image -->
					<img src="assets/images/demo/layerslider/bg.jpg" class="ls-bg" alt="Slide background"/>

					<img class="ls-l" data-ls="
						durationin:1500;
						scalexin:0.8;
						scaleyin:0.8;
						scalexout:0.8;
						scaleyout:0.8;"
						style="top:40px;left:65%;white-space: nowrap;" src="assets/images/demo/desktop.png" alt="">

					<img class="ls-l" style="top:-601px;left:70px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:top;delayin:350;fadein:false;offsetxout:right;durationout:1000;fadeout:false;" src="assets/images/1x1.png" data-src="assets/images/caption_bg.png" alt="">
					<p class="ls-l" style="top:48px;left:100px;color: #fff; text-shadow: none; font-size: 22px; line-height: 34px; padding: 0px 10px; padding-top: 1px; margin: 0px; border-width: 0px; border-style: none; background-color:#000; white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:500;rotatein:30;scalexin:0.2;scaleyin:0.2;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;rotateout:30;scalexout:0.2;scaleyout:0.2;">Smarty Reponsive Template</p>
					<p class="ls-l" style="top:92px;left:100px;font-size: 35px; line-height: 45px; color:#ffffff; white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:750;rotatein:30;scalexin:0.2;scaleyin:0.2;offsetxout:right;durationout:1000;fadeout:false;rotateout:45;scalexout:0.2;scaleyout:0.2;">Great Captions</p>
					<p class="ls-l" style="top:152px;left:100px;color: #fff; font-size: 13px; line-height: 20px; text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5); font-weight: 300; ;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;durationin:1500;delayin:1200;fadein:false;offsetxout:0;offsetyout:bottom;durationout:1000;fadeout:false;">Awesome sliders give you the opportunity to <br />showcase important content. Smarty will constantly be <br /> updatedwith brand new features and additions</p>

				</div>

				<!-- SLIDE -->
				<div class="ls-slide" data-ls="slidedelay:6000; transition2d: all;">

					<img src="assets/images/1x1.png" data-src="assets/images/demo/1200x800/20-min.jpg" class="ls-bg" alt="Slide background" />
					<img class="ls-l" style="top:-201px;left:70px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:top;delayin:350;fadein:false;offsetxout:right;durationout:1000;fadeout:false;" src="assets/images/1x1.png" data-src="assets/images/caption_bg.png" alt="">

					<p class="ls-l" style="top:48px;left:100px;color: #fff; text-shadow: none; font-size: 22px; line-height: 34px; padding: 0px 10px; padding-top: 1px; margin: 0px; border-width: 0px; border-style: none; background-color:#000; white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:500;rotatein:30;scalexin:0.2;scaleyin:0.2;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;rotateout:30;scalexout:0.2;scaleyout:0.2;">Smarty Reponsive Template</p>
					<p class="ls-l" style="top:92px;left:100px;font-size: 35px; line-height: 45px; color:#ffffff; white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:750;rotatein:30;scalexin:0.2;scaleyin:0.2;offsetxout:right;durationout:1000;fadeout:false;rotateout:45;scalexout:0.2;scaleyout:0.2;">Great Captions</p>
					<p class="ls-l" style="top:152px;left:100px;color: #fff; font-size: 13px; line-height: 20px; text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5); font-weight: 300; ;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;durationin:1500;delayin:1200;fadein:false;offsetxout:0;offsetyout:bottom;durationout:1000;fadeout:false;">Awesome sliders give you the opportunity to <br />showcase important content. Smarty will constantly be <br /> updatedwith brand new features and additions</p>
				</div>

				<!-- SLIDE -->
				<div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
					<img src="assets/images/1x1.png" data-src="assets/images/demo/layerslider/bg4.jpg" class="ls-bg" alt="Slide background" />
					<img class="ls-l" style="top:179px;left:528px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:top;durationin:3500;delayin:500;easingin:swing;fadein:false;rotatein:30;scalexin:0.2;scaleyin:0.2;offsetxout:0;offsetyout:bottom;durationout:2000;fadeout:false;" src="assets/images/1x1.png" data-src="assets/images/demo/layerslider/baloon2.png" alt="">
					<img class="ls-l" style="top:28px;left:117px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;durationin:3500;delayin:350;easingin:linear;fadein:false;rotatein:-20;scalexin:0.2;scaleyin:0.2;offsetxout:0;offsetyout:top;durationout:2500;easingout:linear;fadeout:false;" src="assets/images/1x1.png" data-src="assets/images/demo/layerslider/baloon1.png" alt="">
					<img class="ls-l" style="top:441px;left:897px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;durationin:3500;delayin:550;easingin:swing;fadein:false;scalexin:0.2;scaleyin:0.2;offsetxout:0;offsetyout:bottom;durationout:1000;fadeout:false;" src="assets/images/1x1.png" data-src="assets/images/demo/layerslider/baloon3.png" alt="">

					<img class="ls-l" style="top:-161px;left:790px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:top;delayin:1200;fadein:false;offsetxout:right;durationout:1000;fadeout:false;" src="assets/images/1x1.png" data-src="assets/images/caption_bg.png" alt="">
					<p class="ls-l" style="top:70px;left:820px;color: #fff; text-shadow: none; font-size: 22px; line-height: 34px; padding: 0px 10px; padding-top: 1px; margin: 0px; border-width: 0px; border-style: none; background-color:#000; white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1400;rotatein:30;scalexin:0.2;scaleyin:0.2;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;rotateout:30;scalexout:0.2;scaleyout:0.2;">Smarty Includes</p>
					<p class="ls-l" style="top:112px;left:820px;font-size: 42px; line-height: 45px; color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1600;rotatein:30;scalexin:0.2;scaleyin:0.2;offsetxout:right;durationout:1000;fadeout:false;rotateout:45;scalexout:0.2;scaleyout:0.2;">Premium Sliders</p>
					<p class="ls-l" style="top:163px;left:820px;color: #fff; font-size: 13px; line-height: 20px; text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5); font-weight: 700; ;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1800;offsetxout:0;offsetyout:bottom;durationout:1000;fadeout:false;">That allow you to create beautiful, unique <br />slides to grab the attention of your viewers.</p>
				</div>

			</div>

			<script type="text/javascript">
				var layer_options = {
					responsive: 		false,
					responsiveUnder: 	1280,
					layersContainer: 	1280,
					hoverPrevNext: 		true,
					skinsPath: 			'assets/plugins/slider.layerslider/skins/'
				}
			</script>

		</div>

	</section>
	<!-- /LAYER SLIDER -->
@endsection



@section('promociones3')
	<!--
		data-controlNav="thumbnails" 	- thumbnails navigation
		data-controlNav="true" 		- arrows navigation
		data-controlNav="false"		- no navigation
		data-arrowNav="false"		- no arrows navigation
		data-slideshowSpeed="7000"	- slideshow speed
		data-pauseOnHover="true"	- pause on mouse over
	-->
	<section id="slider">

		<div class="flexslider">
			<ul class="slides">

				<!-- Slide 1 -->
				<li>
					<a href="#">
						<img src="assets/images/demo/content_slider/10-min.jpg" alt="Slide 2">
						<div class="flex-caption">Flexslider Caption #1</div>
					</a>
				</li>

				<!-- Slide 2 -->
				<li>
					<a href="#">
						<img src="assets/images/demo/content_slider/3-min.jpg" alt="Slide 3">
						<div class="flex-caption">Flexslider Caption #2</div>
					</a>
				</li>

				<!-- Slide 3 -->
				<li>
					<a href="#">
						<img src="assets/images/demo/content_slider/21-min.jpg" alt="Slide 4">
						<div class="flex-caption">Flexslider Caption #3</div>
					</a>
				</li>

				<!-- Slide 4 -->
				<li>
					<a href="#">
						<img src="assets/images/demo/content_slider/23-min.jpg" alt="Slide 5">
						<div class="flex-caption">Flexslider Caption #4</div>
					</a>
				</li>

			</ul>
		</div>

	</section>
@endsection
