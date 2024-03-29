<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuestra Boda &mdash; Oscar y Miriam </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="¡Gracias por formar parte de nuestra felicidad!" />
	<meta name="keywords" content="boda,celebración" />
	<meta name="author" content="INTELIRED" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <meta property="og:site_name" content="Boda">
    <meta property="og:title" content="Nuestra Boda - Oscar y Miriam" />
    <meta property="og:description" content="¡Gracias por formar parte de nuestra felicidad!" />
    <meta property="og:image" itemprop="image" content="{{ asset('event/images/flores.jpg')}}">
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="1440432930" />
  	<!-- Facebook and Twitter integration -->
	{{--
    <meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
    --}}
	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('event/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('event/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('event/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('event/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('event/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('event/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('event/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ asset('event/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="">NuestraBoda<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
                    {{--

						<li class="active"><a href="index.html">Inicio</a></li>
						<li><a href="about.html">Historia</a></li>
						<li class="has-dropdown">
							<a href="services.html">Servicios</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="gallery.html">Gallery</a>
							<ul class="dropdown">
								<li><a href="#">HTML5</a></li>
								<li><a href="#">CSS3</a></li>
								<li><a href="#">Sass</a></li>
								<li><a href="#">jQuery</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
                        --}}
					</ul>
				</div>
			</div>

		</div>
	</nav>
    

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(../../event/images/pareja-5.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Oscar &amp; Miriam</h1>
                            <h2>¡Gracias por formar parte de nuestra felicidad!</h2>
							<h2> {{ $booking->ride->departure_place }} Te Invitamos a Nuestra Boda.
                                {{--<br> Pase valido para {{ $booking->name }} personas más. --}}</h2>
                            {{--
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>--}}
                            
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hola!</h2>
					<h3>Julio 22, 2023 Oaxaca, México</h3>
					<p>Te invitamos a celebrar nuestra boda.</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="{{ asset('event/images/oscar4.jpeg')}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Oscar</h3>
						{{--
						<p>Texto Personalizado..</p>--}}
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="{{ asset('event/images/miry2.jpeg')}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Miriam</h3>
						{{--
						<p>Texto Personalizado..</p>--}}
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(../../event/images/gallery-6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Agenda</span>
					<h2>Eventos de la Boda</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Ceremonia Religiosa</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>3:00 PM</span>
                                        {{--
										<span>6:00 PM</span>--}}
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Sábado 22</span>
										<span>Julio, 2023</span>
									</div>
									<p>
                                    Iglesia Monte de los Olivos <br>
                                    Dirección: Av. Hidalgo N° 220-B Col. 25 de enero, Sta. Lucía del Camino, Oaxaca <br>
                                    Ubicación: clic <a href="https://goo.gl/maps/9ZGYu6sCRB2NHiDVA" target="_blank">AQUÍ <i class="icon-download"></i></a> 
                                    </p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Evento Social</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>5:00 PM</span>
                                        {{--
										<span>12:00 AM</span>--}}
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Sábado 22</span>
										<span>Julio, 2023</span>
									</div>
                                    <p>
                                    Jardín Los Cipreses <br>
                                    Dirección: La Luz 103, Universidad, Agencia de Policia de Candiani, 68130 Oaxaca de Juárez<br>
                                    Ubicación: clic <a href="https://goo.gl/maps/FD2K3qFSF4sUt1yb6" target="_blank">AQUÍ <i class="icon-download"></i></a> 
                                    </p>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				{{--	
				<span>Nos Amamos</span>--}}
					<h2>Nuestra Historia</h2>
					{{--
					<p>Texto Personalizado...</p>--}}
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(../../event/images/pareja1.jpeg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<i class="icon-heart"></i>
									{{--
									<h3 class="timeline-title">First We Meet</h3>
									<span class="date">December 25, 2015</span>--}}
								</div>
								<div class="timeline-body">
									<p>Dios no pone en tu vida a la persona que pides. Dios pone en tu vida a la persona que necesitas.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(../../event/images/pareja2.jpeg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
								<i class="icon-heart"></i>
									{{--
									<h3 class="timeline-title">First We Meet</h3>
									<span class="date">December 25, 2015</span>--}}
								</div>
								<div class="timeline-body">
									<p>Es fácil encontrar una relación, pero necesitamos encontrar una... ¡que ponga a Dios en el centro!</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(../../event/images/pareja3.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
								<i class="icon-heart"></i>
									{{--
									<h3 class="timeline-title">First We Meet</h3>
									<span class="date">December 25, 2015</span>--}}
								</div>
								<div class="timeline-body">
									<p>Eres tú la historia más bonita, que Dios escribió en mi vida.</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>

    <div id="fh5co-event" class="fh5co-bg" style="background-image:url(../../event/images/gallery-6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Pase de acceso al</span>
					<h2>Evento Social</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1 ">
							<div class="col-md-12 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>¡Gracias por formar parte de nuestra felicidad! <br>

									@if($booking->ride->departure_place == "Invitado")
									Te Invitamos
									@else
									Te Invitamos {{ $booking->ride->departure_place }}
									@endif
									</h3>
									
                                    @if($booking->name == "0")

									@elseif($booking->name == "29")
									<h3>Pase valido para 1 persona</h3>

                                    @else
							        <h3>Pase valido para {{ $booking->name }} personas más. </h3>
						
                                    @endif
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>5:00 PM</span>
                                        {{--
										<span>12:00 AM</span>--}}
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Sábado 22</span>
										<span>Julio, 2023</span>
									</div>
                                    <p>
                                    Jardín Los Cipreses <br>
                                    Dirección: La Luz 103, Universidad, Agencia de Policia de Candiani, 68130 Oaxaca de Juárez, Oaxaca.
									<br>
									{!!QrCode::size(115)->margin(1)->style('round')->eyeColor(0, 238, 71, 236, 238, 71,236)->eyeColor(1, 238, 71, 236, 238, 71,236)->eyeColor(2, 238, 71, 236, 238, 71,236)->generate(url()->current()) !!}
									
                                    </p>


								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{{--
	<div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Memories</span>
					<h2>Wedding Gallery</h2>
					<p>Texto Personalizado...</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-1.jpg); ">
						<a href="images/gallery-1.jpg">
							<div class="case-studies-summary">
								<span>14 Photos</span>
								<h2>Two Glas of Juice</h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-2.jpg); ">
						<a href="#" class="color-2">
							<div class="case-studies-summary">
								<span>30 Photos</span>
								<h2>Timer starts now!</h2>
							</div>
						</a>
					</li>


					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-3.jpg); ">
						<a href="#" class="color-3">
							<div class="case-studies-summary">
								<span>90 Photos</span>
								<h2>Beautiful sunset</h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-4.jpg); ">
						<a href="#" class="color-4">
							<div class="case-studies-summary">
								<span>12 Photos</span>
								<h2>Company's Conference Room</h2>
							</div>
						</a>
					</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-5.jpg); ">
							<a href="#" class="color-3">
								<div class="case-studies-summary">
									<span>50 Photos</span>
									<h2>Useful baskets</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-6.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>45 Photos</span>
									<h2>Skater man in the road</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-7.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>35 Photos</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-8.jpg); ">
							<a href="#" class="color-5">
								<div class="case-studies-summary">
									<span>90 Photos</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../../event/images/gallery-9.jpg); ">
							<a href="#" class="color-6">
								<div class="case-studies-summary">
									<span>56 Photos</span>
									<h2>Beautiful sunset</h2>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    --}}
    {{--
	<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(../../event/ images/img_bg_5.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-users"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Estimated Guest</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-user"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">We Catter</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-calendar"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Events Done</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Hours Spent</span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Best Wishes</span>
						<h2>Friends Wishes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="owl-carousel-fullwidth">
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-1.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-2.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-3.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    --}}

{{--
	<div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">

			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>We Offer Services</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-calendar"></i>
						</span>
						<div class="feature-copy">
							<h3>We Organized Events</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-image"></i>
						</span>
						<div class="feature-copy">
							<h3>Photoshoot</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>Video Editing</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 animate-box">
					<div class="fh5co-video fh5co-bg" style="background-image: url(../../event/ images/img_bg_3.jpg); ">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>


		</div>
	</div>

	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(../../event/   images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Are You Attending?</h2>
					<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="name" class="form-control" id="name" placeholder="Name">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">I am Attending</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    --}}

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2023 All Rights Reserved.</small>
						<small class="block">Diseñado por <a href="https://intelired.mx/" target="_blank">INTELIRED</a></small>
					</p>
                    {{--
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
                    --}}
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('event/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('event/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('event/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('event/js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{ asset('event/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{ asset('event/js/jquery.countTo.js')}}"></script>

	<!-- Stellar -->
	<script src="{{ asset('event/js/jquery.stellar.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('event/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('event/js/magnific-popup-options.js')}}"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="{{ asset('event/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{ asset('event/js/main.js')}}"></script>

	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>

	</body>
</html>
