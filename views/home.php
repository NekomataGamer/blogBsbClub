<!--  dashboard.css -->
	<!--Sliders Section-->
    
    <div class="wrap" id="back-img-responsive">
      <div class="bg-video" id="bg-img-responsive">
        <div class="container" style="margin-top:250px;" id="back-video">
          <div class="text-center text-white mb-6">
            <p class="line-1 anim-typewriter" id="typewriterr">BSB CLUB&nbsp;</p>
            <p class="line-1A" style="border-right: 0; font-size: 20px;" id="paragraph2">Um cartão para tudo, um cartão para todos!</p>
<!--             <span>Um cartão para tudo, um cartão para todos!</span>
                  <p id="paragraph2">Um cartão para tudo, um cartão para todos</p> -->

        <!-- 							<a href="#" class="typewrite" data-period="2000" data-type='[ "BSB CLUB" ]' >
                    <span class="wrap"></span>
                  </a> -->
            
          </div>
        </div>

          <video autoplay loop muted src="<?php echo BASE_URL;?>assets/blog/images/thumbnails/Video_Header_Site_BSB_CLUB_1920x4351.mp4"  style="margin-top:-300px;" id="video-background"></video>
      </div>

      <div class="row" id="form-index" style="margin-top: -120px;">
            <div class="col-xl-6 col-lg-6 col-md-6 d-block mx-auto">
              <div class="search-background bg-transparent">
                <div class="form row no-gutters ">
                  <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
                    <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Palavra Chave">
                  </div>
                  <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
                    <input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Localização">
                    <span><i class="fa fa-map-marker location-gps mr-1"></i> </span>
                  </div>
                  <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                    <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Categoria">
                      <optgroup label="Categorias">
                        <option>Selecione</option>
                        <option value="1">Academias</option>
                        <option value="2">Educação</option>
                        <option value="3">Veículos</option>
                        <option value="4">Decoração</option>
                        <option value="5">Escritórios</option>
                        <option value="6">Turismo</option>
                        <option value="7">Imóveis</option>
                      </optgroup>
                    </select>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-12 mb-0" id="btn-pesquisar">
                    <a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Pesquisar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      <!--   Slider Section Mobile   -->
    
    <div id="slider-mobile" style="display: none;" style="height: 500px; ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('../../assets/images/slider/s1.png');">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">BSB Club</h2>
              <p class="lead">Um cartão para tudo, um cartão para todos!</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../../assets/images/slider/s2.png');">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Second Slide</h2>
              <p class="lead">This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../../assets/images/slider/s3.png');">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Third Slide</h2>
              <p class="lead">This is a description for the third slide.</p>
            </div>
          </div>
          <!-- Slide Four - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../../assets/images/slider/s4.png');">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Third Slide</h2>
              <p class="lead">This is a description for the fourth slide.</p>
            </div>
          </div>
        </div>
<!--         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Voltar</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Avançar</span>
            </a> -->
      </div>

      <div id="form-mobile">
          <div class="row" id="form-index" style="">
            <div class="col-xl-6 col-lg-6 col-md-6 d-block mx-auto">
              <div class="search-background bg-transparent">
                <div class="form row no-gutters ">
                  <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
                    <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Palavra Chave">
                  </div>
                  <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
                    <input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Localização">
                    <span><i class="fa fa-map-marker location-gps mr-1"></i> </span>
                  </div>
                  <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                    <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Categoria">
                      <optgroup label="Categorias">
                        <option>Selecione</option>
                        <option value="1">Academias</option>
                        <option value="2">Educação</option>
                        <option value="3">Veículos</option>
                        <option value="4">Decoração</option>
                        <option value="5">Escritórios</option>
                        <option value="6">Turismo</option>
                        <option value="7">Imóveis</option>
                      </optgroup>
                    </select>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-12 mb-0" id="btn-pesquisar">
                    <a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Pesquisar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!--   Slider Section Mobile   -->
		
		<!--Sliders Section-->

		<!-- Categories-->
        <br><br>
		<section class="sptb bg-white" id="cat">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Categorias</h2>
					<p>Tudo o que você procura está apenas há um clique.</p>
				</div>
				<div class="row">
					<?php foreach($listCategories as $item):?>
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
							<div class="card bg-card-light">
								<div class="card-body">
									<div class="cat-item text-center">
										<a href="<?php echo BASE_URL."categories/index/".$item['id'];?>"></a>
										<div class="cat-img">
											<img src="<?php echo BASE_URL;?>media/categories/<?php echo $item['icon'];?>" alt="img">
										</div>
										<div class="cat-desc">
											<h5 class="mb-1"><?php echo $item['title']?></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</section>
		<!--Categories-->

        <!--Featured Ads-->
		<section class="sptb" style="background-color: #94b9e2;">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Vitrine Online</h2>
					<p>Anuciantes em evidência.</p>
				</div>
				<div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
					<!-- Wrapper for carousel items -->
					
				
					<?php foreach($listPostFeatured as $item):?>
						<?php 
							$a = new Admin();
							$categoryName = $a->getDadosFromCategory($item['id_category']);
						?>
					<div class="item">
						<div class="card mb-0">
						
							<div class="item-card7-imgs">
								<a href="<?php echo BASE_URL."showcase/index/".$item['id'];?>" ></a>
								<img src="<?php echo BASE_URL."media/posts/".$item['images'][0]['urlf'];?>" alt="img" class="cover-image" width="185px" height="185px">
							</div>
							<div class="item-card7-overlaytext">
                			<a href="<?php echo $item['link'];?>" class="text-white"> <?php echo $categoryName['title'];?></a>
								
								
							</div>
							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text">
										<a href="<?php echo BASE_URL."showcase/".$item['id'];?>" class="text-dark"><h4 class=""><?php echo $item['title'];?></h4></a>
									</div>
									<ul class="item-cards7-ic mb-0">
										
										<li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> Vila Velha</a></li>
										<li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 1 hora atrás</a></li>
										<li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i>27 99801-1100</a></li>
									</ul>
									<p class="mb-0"><?php echo $item['description'];?></p>
                            
								</div>
							</div>
							<div class="card-footer">
								<div class="footerimg d-flex mt-0 mb-0">
									<div class="d-flex footerimg-l mb-0" style="background-color: #fff;">
										<img src="<?php echo BASE_URL;?>assets/blog/images/avatar.png" alt="image" class="avatar brround  mr-2">
										<h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0"><?php echo $item['author'];?><i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
									</div>
									<!-- <div class="mt-2 footerimg-r ml-auto">
										<a href="#" class="text-muted" data-toggle="tooltip" data-placement="top" title="Add Wishlist"><i class="fa fa-heart"></i></a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
					
				</div>
			</div>
		</section>
		<!--/Featured Ads-->

        <!--post section-->
		<section>
			<div class="cover-image sptb bg-background-color" data-image-src="<?php echo BASE_URL;?>assets/blog/images/banners/banner4.jpg">
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
		<!--/post section-->

        <!--Blogs-->
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
										<img src="<?php echo BASE_URL;?>assets/blog/images/products/about/REGISTER (1).png" alt="img">
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
										<img src="<?php echo BASE_URL;?>assets/blog/images/products/about/OPEN ACCOUNT.png" alt="img">
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
										<img src="<?php echo BASE_URL;?>assets/blog/images/products/about/INVESTMENT.png" alt="img">
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
										<img src="<?php echo BASE_URL;?>assets/blog/images/brand/PROFIT.png" alt="img">
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
		<!--Blogs-->

        <!--Testimonials-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2 class=" position-relative">Depoimentos</h2>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="">
							<div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
								<div class="item text-center">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-8 col-md-12 d-block mx-auto">
												<div class="">
													
													<p>
														<i class="fa fa-quote-left"></i> Com o BSB Club eu consegui encontrar descontos em diversos estabelecimentos.
													<div class="testimonia-data">
														<h4 class="fs-20 mb-1">Esther Oliveira</h4>
														<div class="rating-stars">
															<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="5">
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
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item text-center">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-8 col-md-12 d-block mx-auto">
												<div class="">
												
													<p><i class="fa fa-quote-left"></i> No BSB Club consegui divulgar a minha empresa, e triplicar o número de clientes nela.  </p>
													<div class="testimonia-data">
														<h4 class="fs-20 mb-1">Fernando Cruz</h4>
														<div class="rating-stars">
															<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="5">
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
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item text-center">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-8 col-md-12 d-block mx-auto">
												<div class="">
													
													<p><i class="fa fa-quote-left"></i> Minha experiencia com o BSB Club está sendo extraordinária, estou 100% Satisfeito .</p>
													<div class="testimonia-data">
														<h4 class="fs-20 mb-1">Felipe Arantes</h4>
														<div class="rating-stars">
															<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="5">
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

        <!--Locations-->
		<section class="sptb" style="background-color: #94b9e2;">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Ultimas Notícias</h2>
					<p>Se Atualize nas ultimas noticias</p>
				</div>
				<div class="row">
					<!-- Wrapper for carousel items -->

					<div class="col-lg-4 col-md-12 col-xl-4">
					<div class="card">
						<div class="item-card2-img">
							<a href="https://www.tecmundo.com.br/ciencia/154833-boas-noticias-vacina-covid-19-chega-brasil-video.htm"></a>
							<img src="<?php echo BASE_URL;?>assets/blog/images/products/products/corona4.png" alt="img" class="cover-image" height="250px" width="200px">
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
							<img src="<?php echo BASE_URL;?>assets/blog/images/products/products/terapia.png" alt="img" class="cover-image"  height="250px" width="200px">
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
							<img src="<?php echo BASE_URL;?>assets/blog/images/products/products/menino2.png" alt="img" class="cover-image" height="250px" width="200px">
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
		</section>
		<!--/Locations-->

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
