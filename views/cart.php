<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="<?php echo BASE_URL;?>assets/images/ico.png">
<title>Carrinho</title>

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800" rel="stylesheet"> 

<!-- CSS FILES -->
<link href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="<?php echo BASE_URL;?>assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>assets/css/zoomslider.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>assets/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<!-- HEADER -->
	<div class="header-wrap">
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

								<li class="">
									<a href="shop.html">Loja</a>
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
	</div>
	<!-- HEADER END -->

	<!-- CART --> 
	<section class="cart-wrap">
		<div class="container">
			<h1>Carrinho</h1>	
			<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li>Carrinho</li>
						</ul>
					</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="woocommerce">
					    <div class="page_woo woo_cart">
					        <form method="post">
					            <table class="shop_table shop_table_responsive cart">
					                <thead>
					                    <tr>
					                        <th class="product-remove">&nbsp;</th>
					                        <th class="product-thumbnail">Produto</th>
					                        <th class="product-name">&nbsp;</th>
					                        <th class="product-quantity">Quantidade</th>
					                        <th class="product-subtotal">Preço</th>
					                    </tr>
					                </thead>
					                <tbody>
					                	<?php 
					                	$subtotal = 0;
					                	?>
					                	<?php foreach($list as $item): ?>
					                	<?php 
					                	$subtotal += (floatval($item['price']) * intval($item['qt']));
					                	?>
					                    <tr class="cart_item">
					                        <td class="product-remove">
					                            <a href="<?php echo BASE_URL; ?>cart/del/<?php echo $item['id']; ?>" class="remove" title="Remove this item"><i class="fa fa-close" aria-hidden="true"></i></a> 
				                            </td>
					                        <td class="product-thumbnail">
					                            	<img src="<?php echo BASE_URL; ?>media/products/<?php echo $item['image']; ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image img-cart" alt="" >
					                        </td>
					                        <td class="product-name" data-title="Product">
					                            <a><?php echo $item['name']; ?></a> 
				                            </td>
					                        <td class="product-quantity" data-title="Quantity">
					                            <div class="quantity">
					                                <input type="number" min="1" step="1" value="<?php echo $item['qt'];?>">
					                            </div>
					                        </td>
					                        <td class="product-subtotal" data-title="Total">
					                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">R$ </span><?php echo number_format($item['price'],2,',','.'); ?></span>
					                        </td>
					                    </tr>
					                	<?php endforeach; ?>
					                   
					                    <tr>
					                        <td colspan="6" class="actions">
					                            <div class="coupon">
					                                <label for="coupon_code">Coupon:</label>
					                                <input name="coupon_code" class="input-text" id="coupon_code" value="" type="text">
					                                <input class="button" name="apply_coupon" value="APLICAR" type="submit">
					                            </div>
				                            </td>
					                    </tr>
					                </tbody>
					            </table>
					        </form>
					        <div class="cart-collaterals">
					            <div class="cart_totals">
					                <table class="shop_table shop_table_responsive">
					                    <tbody>
					                        <tr class="cart-subtotal">
					                            <th>TOTAL</th>
					                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">R$ </span><?php echo number_format($subtotal,2,',','.'); ?></span>
					                            </td>
					                        </tr>
					                        <tr class="order-total">
					                            <th>Total</th>
					                            <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>65</span></strong> </td>
					                        </tr>
					                    </tbody>
					                </table>
					                <div class="wc-proceed-to-checkout">
					                    <a href="<?php echo BASE_URL;?>psckttransparente" class="checkout-button btn btn-default alt wc-forward">Checkout</a>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CART END --> 

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>	
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/map-style.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.zoomslider.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.parallax-1.1.3.js"></script>
<!-- <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/waypoint.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.counterup.min.js"></script> -->
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/custom-number.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.select2.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/main.js"></script>

</body>

</html>