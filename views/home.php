<!-- MAIN TOP PRODUCT -->
    <section class="top-prod-wrap">
		<div class="top-prod-types">
			<div class="container">
				<div class="row no-gutter">
					<div class="col-md-4">
						<div class="item first">
							<img src="<?php echo BASE_URL;?>assets/images/main_icon1.png" width="150" height="150" alt="">
							<div class="name dark"><span>Café</span> Natural</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item second">
							<img src="<?php echo BASE_URL;?>assets/images/main_icon2.png" width="150" height="150" alt="">
							<div class="name"><span>Aroma</span> Único</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item third">
							<img src="<?php echo BASE_URL;?>assets/images/main_icon3.png" width="150" height="150" alt="">
							<div class="name"><span>Sabor</span> Que Marca</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN TOP PRODUCT END -->

<!-- MAIN ABOUT -->
	<section class="about-us">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="about-text">
						<h2>Sensation <span>Coffee</span></h2>
						<p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies. Praesent gravida hendrerit ex, nec eleifend sem convallis vitae. </p>
						<ul class="about-slogan">
							<li>
								<div class="icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
								<div class="text">
									<div class="title">100% Natural</div>
									<p>Produto Totalmente Natural, Cultivado com as Melhores Práticas do Mercado. </p>
								</div>
							</li>
							<li>
								<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
								<div class="text">
									<div class="title">Enterga Rápida</div>
									<p>Receba Seu Produto com rapidez, e qualidade. </p>
								</div>
							</li>
							<li>
								<div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
								<div class="text">
									<div class="title">Produto de Alta Qualidade</div>
									<p>Sabor, textura e Aroma Todos em um só produto. </p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="about-img"><img src="<?php echo BASE_URL;?>assets/images/about-img.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN ABOUT END -->

	<!-- MAIN REASONS -->
	<section class="reasons parallax" style="background-image: url(<?php echo BASE_URL;?>assets/images/parallax.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>Porque as Pessoas</span> Escolhem o Sensation Coffee</h2>
				</div>
				<div class="col-md-3">
					<div class="item">
						<div class="count">1</div>
						<div class="title">Grãos Selecionados</div>
						<p class="text">Somente os Melhores grãos.<br> Nossa Triagem de grãos é feita pensando em Você. </p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item">
						<div class="count">2</div>
						<div class="title">Torras Diferentes</div>
						<p class="text">Torra no Ponto Certo. A torra influência diretamente no sabor do café. </p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item">
						<div class="count">3</div>
						<div class="title">Aroma Único</div>
						<p class="text">Aquela Lembrança.<br> O aroma que te traz boas Lembranças. </p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item">
						<div class="count">4</div>
						<div class="title">Sabor Indiscutivel</div>
						<p class="text">Momento que Marca. O sabor que te leva aos Melhores Momentos. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN REASONS END -->

<!-- MAIN SHOP -->
	<section class="popular-item">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2>Nossos Produtos</h2></div>
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


					
