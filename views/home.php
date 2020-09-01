<!--Categories-->
<section class="sptb">
	<div class="container">
		<div class="section-title center-block text-center">
			<h2>Categorias</h2>
			<p>Tudo o que você procura está apenas há um clique.</p>
		</div>

		<div id="small-categories" class="owl-carousel owl-carousel-icons2">
			
		<?php foreach($listCategories as $item):?>
			
			<?php 
				$a = new Admin();
				$qtCat = $a->countCatById($item['id']);	
				// print_r($qtCat);exit;
			?>
			
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<div class="cat-item text-center">
							<a href="<?php echo BASE_URL."categories/index/".$item['id'];?>"></a>
							<div class="cat-img">
								<img src="<?php echo BASE_URL;?>media/categories/<?php echo $item['icon'];?>" alt="img">
							</div>
							<div class="cat-desc">
								<h5 class="mb-1"><?php echo $item['title'];?></h5>
								<small class="badge badge-pill badge-primary mr-2"><?php echo $qtCat;?></small><span class="text-muted">Anúncios Postados</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		<?php endforeach;?>
			
			
			
			
		</div>
	</div>
</section>
<!--/Categories-->

<!--Blogs-->
<section class="sptb" style="background-color: #fff;">
	<div class="container">
		<div class="section-title center-block text-center">
			<h2>Vitrine Online</h2>
			<p>Anunciantes em evidência.</p>
		</div>
		<div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">

		<?php foreach($listPostFeatured as $item):?>
			<?php 
				$a = new Admin();
				$categoryName = $a->getDadosFromCategory($item['id_category']);
			?>
			<div class="item">
				<div class="card mb-0">
					<div class="item7-card-img">
						<a href="<?php echo BASE_URL."showcase/index/".$item['id'];?>"></a>
						<img src="<?php echo BASE_URL."media/posts/".$item['images'][0]['urlf'];?>" alt="img" class="cover-image">
					</div>
					<div class="card-body p-4">
						<div class="item7-card-desc d-flex mb-2">
							<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i><?php echo date('D - m - Y', strtotime($item['date_added']));?></a>
							<div class="ml-auto">
								<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i></a>
							</div>
						</div>
						<a href="<?php echo BASE_URL."showcase/index/".$item['id'];?>" class="text-dark"><h4 class="fs-20"><?php echo $item['title'];?></h4></a>
						<p title="<?php echo substr($item['description'], 0, 100);?>"><?php echo substr($item['description'], 0, 100);?></p>
						<div class="d-flex align-items-center pt-2 mt-auto">
							<img src="<?php echo BASE_URL;?>assets/blog/images/faces/male/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
							<div>
								<a href="profile.html" class="text-default"><?php echo $item['author'];?></a>
								<small class="d-block text-muted"><?php echo date('d/m/Y', strtotime($item['date_added']));?></small>
							</div>
							<div class="ml-auto text-muted">
							
								<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
								<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach;?>
			
		</div>
	</div>
</section>
<!--Blogs-->

<section>
	<div class="cover-image sptb bg-background-color" data-image-src="http://bsbclub.com.br/assets/blog/images/banners/banner4.jpg" style="background: url(&quot;http://bsbclub.com.br/assets/blog/images/banners/banner4.jpg&quot;) center center;">
		<div class="content-text mb-0">
			<div class="content-text mb-0">
				<div class="container">
					<div class="text-center text-white ">
						<h1 class="mb-2">Adquira seu cartão </h1>
						<p class="fs-16">Venha fazer parte você também</p>
						<div class="row">
							<div class="col-lg-8 mx-auto d-block">
								<form method="POST">
									<div class="mt-5">
										<div class="input-group sub-input mt-1">
											<input type="email" class="form-control input-lg" placeholder="Digite seu email" name="lead_1">
											<div class="input-group-append ">
												<input type="submit" class="btn btn-primary btn-lg br-tr-3  br-br-3" value="Adquirir">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sptb" style="background-color: #94b9e2;">
	<div class="container">
		<div class="section-title center-block text-center">
			<h2>Como Funciona?</h2>
			<p>Veja como é simples</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="">
					<div class="mb-lg-0 mb-4">
						<div class="service-card text-center">
							<div class="bg-white icon-bg  icon-service text-purple about">
								<img src="http://bsbclub.com.br/assets/blog/images/products/about/REGISTER (1).png" alt="img">
							</div>
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-2">Registre-se</h4>
								<p class="text-muted mb-0">Preencha o formulario para entrarmos em contato.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="">
					<div class="mb-lg-0 mb-4">
						<div class="service-card text-center">
							<div class="bg-white icon-bg  icon-service text-purple about">
								<img src="http://bsbclub.com.br/assets/blog/images/products/about/OPEN ACCOUNT.png" alt="img">
							</div>
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-2">Abra sua Conta</h4>
								<p class="text-muted mb-0">Ajudaremos você a abrir a conta</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="">
					<div class="mb-sm-0 mb-4">
						<div class="service-card text-center">
							<div class="bg-white icon-bg  icon-service text-purple about">
								<img src="http://bsbclub.com.br/assets/blog/images/products/about/INVESTMENT.png" alt="img">
							</div>
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-2">Invista seu dinheiro</h4>
								<p class="text-muted mb-0">Aplique seu dinheiro que começará a render.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="">
					<div class="">
						<div class="service-card text-center">
							<div class="bg-white icon-bg  icon-service text-purple about">
								<img src="http://bsbclub.com.br/assets/blog/images/brand/PROFIT.png" alt="img">
							</div>
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-2">Comece a lucrar</h4>
								<p class="text-muted mb-0">Comece a lucrar e usufruir dos nossos beneficios</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Testimonials-->
<section class="sptb cover-image sptb-tab bg-background2" data-image-src="<?php echo BASE_URL;?>assets/blog/images/banners/banner3.jpg">
	<div class="container">
		<div class="section-title center-block text-center">
			<h1 class="text-white position-relative">Depoimentos</h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
					<div class="item text-center">
						<div class="row">
							<div class="col-xl-8 col-md-12 d-block mx-auto">
								<div class="testimonia">
									<p class="text-white-80">
										<i class="fa fa-quote-left text-white-80"></i>  Com o BSB Club eu consegui encontrar descontos em diversos estabelecimentos.
													
									</p>
									<h3 class="title">Esther Oliveira</h3>
									<span class="post"></span>
									<div class="rating-stars">
										<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
										<div class="rating-stars-container">
											<div class="rating-star sm is--active">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm is--active">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm is--active">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
									<div class="owl-controls clickable">
										<div class="owl-pagination">
											<div class="owl-page active">
												<span class=""></span>
											</div>
											<div class="owl-page ">
												<span class=""></span>
											</div>
											<div class="owl-page">
												<span class=""></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item text-center">
						<div class="row">
							<div class="col-xl-8 col-md-12 d-block mx-auto">
								<div class="testimonia">
									<p class="text-white-80"><i class="fa fa-quote-left"></i>  No BSB Club consegui divulgar a minha empresa, e triplicar o número de clientes nela.   </p>
									<div class="testimonia-data">
										<h3 class="title">Fernando Cruz</h3>
										<span class="post"></span>
										<div class="rating-stars">
											<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
											<div class="rating-stars-container">
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="owl-controls clickable">
												<div class="owl-pagination">
													<div class="owl-page ">
														<span class=""></span>
													</div>
													<div class="owl-page active">
														<span class=""></span>
													</div>
													<div class="owl-page">
														<span class=""></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item text-center">
						<div class="row">
							<div class="col-xl-8 col-md-12 d-block mx-auto">
								<div class="testimonia">
									<p class="text-white-80"><i class="fa fa-quote-left"></i>  Minha experiencia com o BSB Club está sendo extraordinária, estou 100% Satisfeito .</p>
									<div class="testimonia-data">
										<h3 class="title">Felipe Arantes</h3>
										<span class="post"></span>
										<div class="rating-stars">
											<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
											<div class="rating-stars-container">
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="owl-controls clickable">
												<div class="owl-pagination">
													<div class="owl-page ">
														<span class=""></span>
													</div>
													<div class="owl-page">
														<span class=""></span>
													</div>
													<div class="owl-page active">
														<span class=""></span>
													</div>
												</div>
											</div>
										</div>
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
<!--/Testimonials-->

<section class="sptb" style="background-color: #94b9e2;">
	<div class="container">
		<div class="section-title center-block text-center">
			<h2 id="noticias">Ultimas Notícias</h2>
			<p>Se Atualize nas ultimas noticias</p>
		</div>
		<div class="row">
			<!-- Wrapper for carousel items -->

			<div class="col-lg-4 col-md-12 col-xl-4">
			<div class="card">
				<div class="item-card2-img">
					<a href="https://www.tecmundo.com.br/ciencia/154833-boas-noticias-vacina-covid-19-chega-brasil-video.htm"></a>
					<img src="http://bsbclub.com.br/assets/blog/images/products/products/corona4.png" alt="img" class="cover-image" height="250px" width="200px">
				</div>
				
				<div class="card-body">
					<div class="item-card2">
						<div class="item-card2-desc">
							<h4 class="font-weight-semibold">Boas notícias: vacina contra COVID-19 chega ao Brasil </h4>
			<br>
							<p>No Plantão de Boas Notícias desta semana falamos sobre a imunidade que pode estar mais difundida do que imaginamos e vacinas contra coronavírus, que já chegaram ao Brasil!</p>
							<a href="https://www.tecmundo.com.br/ciencia/154833-boas-noticias-vacina-covid-19-chega-brasil-video.htm" class="btn btn-primary">Corona Vírus</a>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="item-card2-footer d-flex">
						<div class="item-card2-rating">
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							
						</div>
						<div class="ml-auto">
							<a href="https://www.tecmundo.com.br/ciencia/154833-boas-noticias-vacina-covid-19-chega-brasil-video.htm" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Brasil</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 col-xl-4">
			<div class="card">
				<div class="item-card2-img">
					<a href="https://www.sonoticiaboa.com.br/2020/07/25/terapia-comunitaria-medico-nordestino-romeiro-ajuda-5-milhoes/"></a>
					<img src="http://bsbclub.com.br/assets/blog/images/products/products/terapia.png" alt="img" class="cover-image" height="250px" width="200px">
				</div>
			
				<div class="card-body">
					<div class="item-card2">
						<div class="item-card2-desc">
							<h4 class="font-weight-semibold">Terapia comunitária de médico nordestino romeiro ajuda 5 milhões</h4>
			<br>
							<p>Uma terapia comunitária  cuida do corpo e da alma  ajudou mais de 5 milhões de pessoas no mundo – as fotos acima foram feitas antes da pandemia. </p>
							<a href="https://www.sonoticiaboa.com.br/2020/07/25/terapia-comunitaria-medico-nordestino-romeiro-ajuda-5-milhoes/" class="btn btn-primary">Boas Ações</a>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="item-card2-footer d-flex">
						<div class="item-card2-rating">
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							
						</div>
						<div class="ml-auto">
							<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i>Brasil</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 col-xl-4">
			<div class="card">
				<div class="item-card2-img">
					<a href="https://www.sonoticiaboa.com.br/2020/07/26/homem-agarra-salva-menino-2-anos-caiu-4o-andar-video/"></a>
					<img src="http://bsbclub.com.br/assets/blog/images/products/products/menino2.png" alt="img" class="cover-image" height="250px" width="200px">
				</div>
				
				<div class="card-body">
					<div class="item-card2">
						<div class="item-card2-desc">
							<h4 class="font-weight-semibold">Homem agarra menino de 2 anos que caiu do 4º andar </h4>
			<br>
							<p>Um vídeo impressionante mostra o momento em que um homem salva a vida de menino de 2 anos que escorregou e caiu do 4º andar de um prédio.</p>
			<br>
							<a href="https://www.sonoticiaboa.com.br/2020/07/26/homem-agarra-salva-menino-2-anos-caiu-4o-andar-video/" class="btn btn-primary">Boas Ações</a>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="item-card2-footer d-flex">
						<div class="item-card2-rating">
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							<a href="#"><i class="fa fa-star text-warning"></i></a>
							
						</div>
						<div class="ml-auto">
							<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> China</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<form method="POST">
	<section class="sptb bg-white border-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-xl-6 col-md-12">
					<div class="sub-newsletter">
						<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Se Inscreva para Receber Novidades</h3>
						<p class="mb-0">Cadastre seu email para ficar por dentro das nossas novidades</p>
					</div>
				</div>
				
					<div class="col-lg-5 col-xl-6 col-md-12">
						<div class="input-group sub-input mt-1">
							<input type="text" class="form-control input-lg " placeholder="Seu email" name="lead_2">
							<div class="input-group-append ">
								<input type="submit" class="btn btn-primary btn-lg br-tr-3  br-br-3" value="enviar">
							</div>
						</div>
					</div>
				
			</div>
		</div>
	</section>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php if(isset($msg) && !empty($msg)):?>
	<script>
		Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: 'Obrigado :)',
			html: 'Entraremos em contato em breve com você!',
			showConfirmButton: false,
			timer: 2500
		})
	</script>
<?php endif;?>
