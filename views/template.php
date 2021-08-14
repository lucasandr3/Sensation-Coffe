<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="<?php echo BASE_URL;?>assets/images/ico.png">
<title>Sensation Coffee</title>

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800" rel="stylesheet">

<!-- CSS FILES -->
<link href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="<?php echo BASE_URL;?>assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>assets/css/zoomslider.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>assets/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.js"></script>

</head>
<body>
	<!-- HEADER -->
	<header class="top-nav" data-spy="affix" data-offset-top="34">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="index.html" class="main-logo"><img src="<?php echo BASE_URL;?>assets/images/main-logo.png" alt=""></a>
					<a href="index.html" class="small-logo"><img src="<?php echo BASE_URL;?>assets/images/main-logo.png" alt=""></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coffee-menu" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
		     	 	</button>
				</div>
				<nav id="coffee-menu" class="navbar collapse navbar-collapse">
						<div class="row">
						<div class="col-lg-2 col-md-12">
							<ul class="top-social">
								<li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-8 col-md-12">
							<ul class="main-menu nav">
								<li class="active"><a href="<?php echo BASE_URL; ?>">Home</a></li>

								<li class="">
									<a href="shop.html">Certificação</a>
									<!-- <ul class="sub-menu">
										<li><a href="product.html">Single item</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul> -->
								</li>

								<li><a href="contacts.html">Sobre Nós</a></li>
								<li><a href="contacts.html">Contato</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-12">
							<div class="top-right">
								<a href="<?php echo BASE_URL;?>cart" class="cart">
									<span class="name">Carrinho</span>
									<i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
									<span class="count"><?php echo $viewData['cart_qt']; ?></span> 
								</a>
								<!-- <div class="top-search">
									<input type="text" placeholder="Search">
									<a href="#" class="fa fa-search search" aria-hidden="true"></a>
								</div> -->
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- HEADER END -->

	<!-- MAIN SLIDER -->
        <section id="demo-1" class="main-slider" data-zs-interval=4500 data-zs-bullets="false" data-zs-src='[&quot;<?php BASE_URL;?>assets/images/main-slider-img.jpg&quot;, &quot;<?php BASE_URL;?>assets/images/slide3.jpg&quot;, &quot;<?php BASE_URL;?>assets/images/slide2.jpg&quot;]'>
			<div class="main-slider-caption">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-12">
            				<div class="top-title"><span>Sabor</span> Único</div>
		                	<div class="big-title">Sensation Coffee</div>
		                	<p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget<br> magna aliquet ultricies. Praesent gravida hendrerit ex, nec eleifend sem convallis vitae. </p>	
            			</div>
            		</div>
            	</div>
            </div>
		</section>
		
    <!-- MAIN SLIDER END -->

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<!-- WHERE TO BUY -->
	<section class="where-buy">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2>Onde Encontrar Nossos Produtos</h2></div>
				<div class="col-md-12">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#germany" aria-controls="germany" role="tab" data-toggle="tab">Aeroportos</a></li>
						<li role="presentation"><a href="#italy" aria-controls="italy" role="tab" data-toggle="tab">Quiosques</a></li>
						<li role="presentation"><a href="#portugal" aria-controls="portugal" role="tab" data-toggle="tab"></a></li>
					</ul>
					<div class="tab-content">
						<!-- Aeroportos -->
						<div role="tabpanel" class="tab-pane fade in active" id="germany">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="buy-item">
										<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<div class="info">
											<address>481 Goodisson str. 60544 New York City - MisterCoffee</address>	
											<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
											<a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="buy-item">
										<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<div class="info">
											<address>3 Big Avenue 1422 Seattle</address>	
											<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
											<a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="buy-item">
										<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<div class="info">
											<address>481 Goodisson str. 17790-60544 Washington</address>	
											<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
											<a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Italia -->
						<div role="tabpanel" class="tab-pane fade" id="italy">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="buy-item">
										<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<div class="info">
											<address>481 Goodisson str. 60544 New York City - MisterCoffee</address>	
											<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
											<a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="buy-item">
										<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<div class="info">
											<address>3 Big Avenue 1422 Seattle</address>	
											<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
											<a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="buy-item">
										<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<div class="info">
											<address>481 Goodisson str. 17790-60544 Washington</address>	
											<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
											<a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- WHERE TO BUY END -->

	<!-- MAIN REVIEWS -->
	<section class="main-reviews">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2><span>O Que Nossos</span> Clientes Dizem</h2></div>
				<div class="col-md-12">
					<div class="owl-carousel review-slider owl-theme">
					    <div class="item">
					    	<div class="review-item">
					    		<p class="text">Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget<br> magna aliquet ultricies. Praesent gravida hendrerit ex, nec eleifend sem convallis vitae. Sed sagittis<br> sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. </p>
					    		<div class="img-wrap"><img src="<?php echo BASE_URL;?>assets/images/review-ava.jpg" alt=""></div>
					    		<div class="name">Leona Richards</div>
					    		<div class="date">1 year ago</div>
					    	</div>
					    </div>
					    <div class="item">
					    	<div class="review-item">
					    		<p class="text">Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget<br> magna aliquet ultricies. Praesent gravida hendrerit ex, nec eleifend sem convallis vitae. Sed sagittis<br> sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. </p>
					    		<div class="img-wrap"><img src="<?php echo BASE_URL;?>assets/images/review-ava.jpg" alt=""></div>
					    		<div class="name">Leona Richards</div>
					    		<div class="date">1 year ago</div>
					    	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN REVIEWS END -->

	<!-- SUBSCRIBE FORM -->

	<section class="subscribe">
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<div class="inner">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="top-title">Quer saber sobre novos tipos de café?</div>
								<div class="bottom-title">Receba Nosso E-mail Semanal</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<!-- Begin Mailchimp Signup Form -->
							<form action="https://gmail.us20.list-manage.com/subscribe/post?u=db9a11c9058422a0d4e9b9e6b&amp;id=a09c6a6412" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate subs-form" target="_blank" novalidate>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Digite Seu E-mail" style="outline: 0;">
								<input type="hidden" name="b_db9a11c9058422a0d4e9b9e6b_a09c6a6412" tabindex="-1" value="">
							    <input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="button">
							</form>

							</div>	
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- SUBSCRIBE FORM END -->

	<!-- FOOTER -->
	<footer class="footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<a href="#" class="footer-logo"><img src="<?php echo BASE_URL;?>assets/images/footer-logo.png" alt=""></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<ul class="footer-contacts">
							<li><i class="fa fa-truck"></i><a href="#">Políticas de entrega</a></li>
							<li><i class="fa fa-history"></i><a href="#">Políticas de trocas e devoluções</a></li>
							<li><i class="fa fa-low-vision"></i><a href="#">Política de privacidade</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<ul class="footer-contacts">
							<li><i class="fa fa-phone" aria-hidden="true"></i>(064) 99699-3453</li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i>sensationcoffe@.com</li>
							<li><i class="fa fa-skype" aria-hidden="true"></i>Sensation Coffe</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-social">
							<div class="title">Redes Sociais</div>
							<ul class="social">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copyrights"><a href="#">Sensation Coffe</a> <?php echo date('Y'); ?> &copy; Todos os Direitos Reservados <a href="#">Termos de Uso</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->

<!-- JAVASCRIPT FILES -->

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script> -->	
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/map-style.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.zoomslider.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/waypoint.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/custom-number.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.select2.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/main.js"></script>

</body>

</html>