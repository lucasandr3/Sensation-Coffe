<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="<?php echo BASE_URL;?>assets/images/ico.png">
<title><?php echo $product_info['name']; ?></title>

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800" rel="stylesheet">

<!-- CSS FILES -->
<link href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="<?php echo BASE_URL;?>assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>assets/css/zoomslider.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>assets/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>assets/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
	
	<!-- HEADER -->
	<div class="header-wrap">
		<header class="top-nav inner-page" data-spy="affix" data-offset-top="34">
			<div class="container">
				<div class="row position-relative">
					<div class="col-lg-2 col-md-2">
						<a href="index.html" class="small-logo alt"><img src="<?php echo BASE_URL;?>assets/images/main-logo.png" alt=""></a>	
					</div>
					<div class="col-lg-10 col-md-10">
						<nav class="navbar collapse navbar-collapse" id="coffee-menu">
							<div class="col-lg-10 col-md-10">
								<ul class="main-menu nav">
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
									<!-- <li><i class="fa fa-phone" aria-hidden="true"></i> +80 (041) 2824 504 43</li>
									<li class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i> orders@mistercoffee.us</li> -->
								</ul>
							</div>
							<div class="col-lg-2 col-md-12">
								<div class="top-right">
									<a href="cart.html" class="cart">
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
						</nav>
					</div>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coffee-menu" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
		     	 	</button>
				</div>
			</div>
		</header>
	</div>
	<!-- HEADER END -->

	<!-- PRODUCT -->
	<section class="product-single">
		<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="<?php echo BASE_URL; ?>">Home</a></li>
							<li>Produtos</li>
							<li><?php echo $product_info['name']; ?></li>
						</ul>	
					</div>
				</div>
			</div>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="product-image"><img src="<?php echo BASE_URL; ?>media/products/<?php echo $product_images[0]['url']; ?>" alt=""></div>
					<div class="gallery">
					<?php foreach($product_images as $img): ?>
						<div class="photo_item">
							<img src="<?php echo BASE_URL; ?>media/products/<?php echo $img['url']; ?>" />
						</div>
					<?php endforeach; ?>	
				</div>
				</div>
				
				
				<div class="col-md-7">
					<h3 class="name"><?php echo $product_info['name']; ?></h3>
					<div class="price_from"><strike>R$ <?php echo number_format($product_info['price_from'], 2); ?></strike></div>
					<div class="top-price">R$ <?php echo number_format($product_info['price'], 2); ?></div>
					<div class="description"><?php echo $product_info['description']; ?></div>

					<form method="POST" class="addtocartform" action="<?php echo BASE_URL; ?>cart/add">
					<div class="product-action">
						<input type="hidden" name="id_product" value="<?php echo $product_info['id']; ?>" />
						<div class="quantity">
                            <input type="number" name="qt_product" min="1" max="9" step="1" value="1">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Comprar</button> 
					</div>
					</form>

					<div class="product-info">
						<?php foreach ($product_options as $po): ?>
						<div class="item"><strong>Peso:</strong> <a><?php echo $po['name'];?></a></div>
						<?php endforeach; ?>
						<div class="item"><strong>Tags:</strong> <a>Café,</a> <a>Grão Fino</a></div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="woocommerce-tabs wc-tabs-wrapper">
						<ul class="tabs wc-tabs">
							<li class="description_tab active">
								<a href="#tab-description">Descrição</a>
							</li>
							<li class="reviews_tab">
								<a href="#tab-reviews">Comentários</a>
							</li>
						</ul>
						<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">
							<?php foreach ($product_prepare as $inf): ?>
							<p><?php echo $inf['info']; ?></p>
							<?php endforeach; ?>
						</div>
						<div class="" id="tab-reviews">
							<p></p>
						</div>
					</div> 		
				</div>

			</hr>

<!-- MAIN SHOP -->
	<section class="popular-item">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2>Mais Produtos</h2></div>
				<div class="col-md-12">
					<div class="row owl-carousel shop-slider">
					<?php foreach ($list as $products_item): ?>
						<div class="item">
							<?php $this->loadView('products_item', $products_item); ?>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN SHOP END -->
			</div>
		</div>
	</section>
	<!-- PRODUCT END -->

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
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.js"></script>
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