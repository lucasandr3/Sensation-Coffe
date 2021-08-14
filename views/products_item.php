
	<div class="img-wrap"><a href="<?php echo BASE_URL; ?>product/open/<?php echo $id; ?>"><img src="<?php echo BASE_URL;?>media/products/<?php echo $images[0]['url']?>" alt=""></a></div>
	<a href="<?php echo BASE_URL; ?>product/open/<?php echo $id; ?>" class="name"><?php echo $name; ?></a>
	<div class="text"><?php echo $brand_name; ?></div>
	<div class="price"><small><strike><?php echo 'R$ '.number_format($price_from, 2, ',', '.'); ?></div>
	</strike></small><p class="price_from"><?php echo 'R$ '.number_format($price, 2, ',', '.'); ?></p>
	<a href="<?php echo BASE_URL; ?>product/open/<?php echo $id; ?>" class="btn btn-default"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>Comprar</a>
