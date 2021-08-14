

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
					<h3 class="name" autofocus><?php echo $product_info['name']; ?></h3>
					<div class="price_from"><strike>R$ <?php echo number_format($product_info['price_from'], 2); ?></strike></div>
					<div class="top-price">R$ <?php echo number_format($product_info['price'], 2); ?></div>
					<div class="description"><?php echo $product_info['description']; ?></div>

					<form method="POST">
					<div class="product-action">
						<div class="quantity">
                            <input type="number" name="qt" min="1" max="9" step="1" value="1">
                        </div>
                        <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Comprar</a>
					</div>
					</form>
					<div class="product-info">
						<div class="item">Tags: <a href="#">Coffee,</a> <a href="#">Robusta</a></div>
					</div>
				</div>

			</hr>

				<div class="col-md-12">
					<h2 class="related-title">Produtos Relacionados</h2>
					<div class="row">
						<div class="col-md-3">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img src="<?php echo BASE_URL;?>assets/images/prod-img.jpg" alt=""></a></div>
								<a href="#" class="name">100%  Arabica</a>
								<div class="text">Professional espresso serie</div>
								<div class="price">$19</div>
								<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img src="<?php echo BASE_URL;?>assets/images/prod-img1.jpg" alt=""></a></div>
								<a href="#" class="name">Espresso Premium</a>
								<div class="text">Professional espresso serie</div>
								<div class="price">$46</div>
								<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img src="<?php echo BASE_URL;?>assets/images/prod-img.jpg" alt=""></a></div>
								<a href="#" class="name">100%  Arabica</a>
								<div class="text">Professional espresso serie</div>
								<div class="price">$19</div>
								<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img src="<?php echo BASE_URL;?>assets/images/prod-img1.jpg" alt=""></a></div>
								<a href="#" class="name">Espresso Premium</a>
								<div class="text">Professional espresso serie</div>
								<div class="price">$46</div>
								<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- PRODUCT END -->

	