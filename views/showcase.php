<section class="sptb" style="">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-12">

				<!--Classified Description-->
				<div class="card overflow-hidden">
				
					<div class="card-body">
						<div class="item-det mb-4">
							<a href="#" class="text-dark"><h3><?php echo $dataPost['title'];?></h3></a>
							<div class=" d-flex">
								<ul class="d-flex mb-0">
									<li class="mr-5"><a href="http://bsbclub.com.br/educacao.html#" class="icons"><i class="icon icon-briefcase text-muted mr-1"></i> <?php echo $getCategory['title'];?></a></li>
									<li class="mr-5"><a href="" https:="" www.google.com="" maps="" embed?pb="!1m18!1m12!1m3!1d3737.0925154126085!2d-40.36224668452957!3d-20.502433361659904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb843d82bac922d%3A0xa8b96cf675c54738!2sLagoa%20Grande%20-%20Ponta%20da%20Fruta!5e0!3m2!1spt-BR!2sbr!4v1596024760207!5m2!1spt-BR!2sbr"> <?php echo $dataPost['localizacao'];?></a></li>
									<li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i> <?php echo date("d/m/Y", strtotime($dataPost['date_added']));?></a></li>
									
								</ul>
								<div class="rating-stars d-flex mr-5">
									<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" id="rating-stars-value" value="4">
									<div class="rating-stars-container mr-2">
										<div class="rating-star sm is--active">
											<i class="fa fa-star"></i>
										</div>
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
									</div> 4.0
								</div>
								<div class="rating-stars d-flex">
									<div class="rating-stars-container mr-2">
										<div class="rating-star sm">
											<i class="fa fa-heart"></i>
										</div>
									</div> 235
								</div>
							</div>
						</div>
						<!-- SLIDER -->
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							<?php for($q=0;$q<count($imagesPost);$q++):?>
								<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $q;?>" class=""></li>
							<?php endfor;?>
								<!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
							</ol>
							<div class="carousel-inner">

							<?php foreach($imagesPost as $q => $img):?>
								<div class="carousel-item <?php echo ($q == 0)?'active':''?>" style="height:470px;">
									<img class="d-block w-100" src="<?php echo BASE_URL."media/posts/".$img['urlf'];?>" alt="">
								</div>
							<?php endforeach;?>
								
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Voltar</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Avançar</span>
							</a>
							</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Descrição</h3>
					</div>
					<div class="card-body">
						<div class="mb-4">
							<?php echo $dataPost['body'];?>
						</div>
						
						
					</div>
					<div class="pt-4 pb-4 pl-5 pr-5 border-top border-top">
						<div class="list-id">
							<div class="row">
								<div class="col">
									<a class="mb-0">ID de Classificação : #<?php echo $dataPost['id'];?></a>
								</div>
								<div class="col col-auto">
									Anunciado por <a class="mb-0 font-weight-bold"><?php echo $dataPost['author'];?></a> / <?php echo date('d/m/Y', strtotime($dataPost['date_added']));?>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="icons">
							<a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Compartilhar</a>
							<a href="#" class="btn btn-primary icons"><i class="icon icon-heart  mr-1"></i> 235</a>
							<a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i> Imprimir</a>
						</div>
					</div>
				</div>
				<!--/Classified Description-->

				<!--Comments-->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Avaliações</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-4">
									<p class="mb-2">
										<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>5</span>
									</p>
									<div class="progress progress-md mb-4 h-4">
										<div class="progress-bar bg-success w-100">9,232</div>
									</div>
								</div>
								<div class="mb-4">
									<p class="mb-2">
										<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>4</span>
									</p>
									<div class="progress progress-md mb-4 h-4">
										<div class="progress-bar bg-info w-80">8,125</div>
									</div>
								</div>
								<div class="mb-4">
									<p class="mb-2">
										<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  3</span>
									</p>
									<div class="progress progress-md mb-4 h-4">
										<div class="progress-bar bg-primary w-60">6,263</div>
									</div>
								</div>
								<div class="mb-4">
									<p class="mb-2">
										<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  2</span>
									</p>
									<div class="progress progress-md mb-4 h-4">
										<div class="progress-bar bg-secondary w-30">3,463</div>
									</div>
								</div>
								<div class="mb-5">
									<p class="mb-2">
										<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  1</span>
									</p>
									<div class="progress progress-md mb-4 h-4">
										<div class="progress-bar bg-orange w-20">456</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<?php foreach($comments as $item):?>
							<div class="media mt-0 p-5">
								<div class="d-flex mr-3">
									<a href="#"><img src="<?php echo BASE_URL;?>assets/blog/images/faces/male/26.jpg" class="media-object brround" alt="50x50"> </a>
								</div>
								<div class="media-body">
									<h5 class="mt-0 mb-1 font-weight-semibold"><?php echo $item['name'];?>
										<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										<span class="fs-14 ml-2"> 5 <i class="fa fa-star text-yellow"></i></span>
									</h5>
									<small class="text-muted"><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', strtotime($item['date_comment']));?>  <i class=" ml-3 fa fa-clock-o"></i> <?php echo date('H:i', strtotime($item['date_comment']));?>  <i class=" ml-3 fa fa-map-marker"></i> Brasil</small>
									<p class="font-13  mb-2 mt-2">
										“<?php echo $item['comment'];?>”
									</p>
									<a href="#" class="mr-2"><span class="badge badge-primary">Curtir</span></a>
									<!-- <a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span>Comentar</span></a> -->
									<a href="" class="mr-2" data-toggle="modal" data-target="#report"><span>Compartilhar</span></a>
									<div class="media mt-5">
										
										
									</div>
								</div>
							</div>
						<?php endforeach;?>
						
						
					</div>
				</div>
				<!--/Comments-->
				<div class="card mb-lg-0">
					<div class="card-header">
						<h3 class="card-title">Deixe um Comentário</h3>
					</div>
					<div class="card-body">
						<form method="POST">
							<div>
								<div class="form-group">
									<input type="text" class="form-control" name="name1" placeholder="Seu Nome">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="msg" rows="6" placeholder="Comentário"></textarea>
								</div>
								<input type="submit" value="Enviar" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>

			<!--Right Side Content-->
			<div class="col-xl-4 col-lg-4 col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Anunciado por</h3>
					</div>
					<div class="card-body  item-user">
						<div class="profile-pic mb-0">
							<img src="<?php echo BASE_URL;?>assets/blog/images/faces/male/man-004.png" class="brround avatar-xxl" alt="user">
							<div>
								<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold"><?php echo $dataPost['author'];?></h4></a>
								<span class="text-muted"></span>
								<!-- <h6 class="mt-2 mb-0"><a href="#" class="btn btn-primary btn-sm">Ver todos os anúncios</a></h6> -->
							</div>

						</div>
					</div>
					<div class="card-body item-user">
						<h4 class="mb-4">Informação de contato</h4>
						<div>
							<h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body"> <?php echo $dataPost['email'];?></a></h6>
							<h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-primary"> <?php echo $dataPost['telefone'];?></a></h6>
							<h6><span class="font-weight-semibold"><i class="fa fa-link mr-3 "></i></span><a href="<?php echo $dataPost['link'];?>" class="text-primary"><?php echo $dataPost['link'];?></a></h6>
						</div>
						<div class=" item-user-icons mt-4">
							<a href="https://www.facebook.com/excellence.educ" class="facebook-bg"><i class="fa fa-facebook"></i></a>
			<a class="facebook-bg" style="background-color:green;" href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=<?php echo $dataPost['telefone'];?>">
			<i class="fa fa-whatsapp" style="color:#fff;"></i></a>
			<a class="facebook-bg" style="background-color:#d6249f;" href="https://www.instagram.com/excellenceeduc/">
			<i class="fa fa-instagram" style="color:#fff;"></i></a>
						
						</div>
					</div>
					<div class="card-footer">
						<div class="text-left">
							<a href="tel:<?php echo $dataPost['telefone'];?>" class="btn  btn-info"><i class="fa fa-phone"></i> Ligar</a>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Fale Conosco</a>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Buscar</h3>
					</div>
					<div class="card-body product-filter-desc">
						<div class="product-tags clearfix">
							<ul class="list-unstyled mb-0">
								<li><a href="#">Academia</a></li>
								<li><a href="#">Moda</a></li>
								<li><a href="#">Veículos</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Compartilhar</h3>
					</div>
					<div class="card-body product-filter-desc">
						<div class="product-filter-icons text-center">
							<a href=" https://www.facebook.com/sharer/sharer.php?u=http://www.excellenceeduc.com/" class="facebook-bg"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/intent/tweet?url=[URL]&amp;text=[TEXTO-DO-TWEET]&amp;via=[NOME-DE-USUARIO-DO-TWITTER]&amp;hashtags=[LISTA-DE-HASHTAGS]" class="twitter-bg"><i class="fa fa-twitter"></i></a>
							
							<a href="https://www.pinterest.com/pin/create/button/?url=[URL]&amp;media=[IMAGEM]&amp;description=[DESCRIÇÃO]" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Localização</h3>
					</div>
					<div class="card-body">
					<iframe src="<?php echo $dataPost['map'];?>" width="325px" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="card">
							<div class="card-header">
								<h3 class="card-title">Procurar Anuncios</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" id="search-text" placeholder="O que você está procurando?">
								</div>
								
								<div class="form-group">
									<select name="country" id="select-countries" class="form-control custom-select select2-show-search select2-hidden-accessible" data-select2-id="select-countries" tabindex="-1" aria-hidden="true">
										<option value="1" selected="" data-select2-id="2">Todas as categorias</option>
										<option value="2">Moda</option>
										<option value="3">Academias</option>
										<option value="4">Restaurante</option>
										<option value="5">Educação</option>
										<option value="6">Turismo</option>
										<option value="7">Música e Hobbie</option>
										<option value="8">Saúde</option>
										<option value="9">Esportes e Lazer</option>
										<option value="10">Decoração</option>
										<option value="11">Eletrônicos</option>
									</select>									
								</div>
								<div>
									<a href="#" class="btn  btn-primary">Pesquisar</a>
								</div>
							</div>
						</div>
<!-- 						<div class="card">
					<div class="card-header">
						<h3 class="card-title">Últimos Anúncios</h3>
					</div>
					<div class="card-body ">
						<ul class="vertical-scroll">
							<li class="news-item">
								<table>
									<tr>
										<td><img src="../../assets/images/products/1.png" alt="image" class="w-8 border"/></td>
										<td><h5 class="mb-1 ">Best New Model Watch</h5><a href="#" class="btn-link">Ver mais</a><span class="float-right font-weight-bold">R$17</span></td>
									</tr>
								</table>
							</li>
							<li class="news-item">
								<table>
									<tr>
										<td><img src="../../assets/images/products/2.png" alt="image" class="w-8 border"/></td>
										<td><h5 class="mb-1 ">Trending New Model Watches</h5><a href="#" class="btn-link">Ver mais</a><span class="float-right font-weight-bold">R$17</span></td>
									</tr>
								</table>
							</li>
							<li class="news-item">
								<table>
									<tr>
										<td><img src="../../assets/images/products/3.png" alt="image" class="w-8 border" /></td>
										<td><h5 class="mb-1 ">Best New Model Watch</h5><a href="#" class="btn-link">Ver mais</a><span class="float-right font-weight-bold">R$17</span></td>
									</tr>
								</table>
							</li>
							<li class="news-item">
								<table>
									<tr>
										<td><img src="../../assets/images/products/4.png" alt="image" class="w-8 border" /></td>
										<td><h5 class="mb-1 ">Trending New Model Watches</h5><a href="#" class="btn-link">Ver mais</a><span class="float-right font-weight-bold">R$17</span></td>
									</tr>
								</table>
							</li>
							<li class="news-item">
								<table>
									<tr>
										<td><img src="../../assets/images/products/5.png" alt="image" class="w-8 border" /></td>
										<td><h5 class="mb-1 ">Best New Model Watch</h5><a href="#" class="btn-link">Ver mais</a><span class="float-right font-weight-bold">R$17</span></td>
									</tr>
								</table>
							</li>
							<li class="news-item">
								<table>
									<tr>
										<td><img src="../../assets/images/products/6.png" alt="image" class="w-8 border" /></td>
										<td><h5 class="mb-1 ">Best New Model Shoes</h5><a href="#" class="btn-link">Ver mais</a><span class="float-right font-weight-bold">R$17</span></td>
									</tr>
								</table>
							</li>
							<li class="news-item">
								<table>
									<tr>
										<td><img src="../../assets/images/products/7.png" alt="image" class="w-8 border" /></td>
										<td><h5 class="mb-1 ">Trending New Model Shoes</h5><a href="#" class="btn-link">Ver mais</a><span class="float-right font-weight-bold">R$17</span></td>
									</tr>
								</table>
							</li>
						</ul>
					</div>
				</div> -->

<!-- 						<div class="card mb-0">
					<div class="card-header">
						<h3 class="card-title">Anúncios em alta</h3>
					</div>
					<div class="card-body">
						<div class="rated-products">
							<ul class="vertical-scroll">
								<li class="item">
									<div class="media m-0 mt-0 p-5">
										<img class="mr-4" src="../../assets/images/products/toys.png" alt="img">
										<div class="media-body">
											<h4 class="mt-2 mb-1">Kids Toys</h4>
											<span class="rated-products-ratings">
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
											</span>
											<div class="h5 mb-0 font-weight-semibold mt-1">R$17 - $29</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="media p-5 mt-0">
										<img class="mr-4" src="../../assets/images/products/1.png" alt="img">
										<div class="media-body">
											<h4 class="mt-2 mb-1">Leather Watch</h4>
											<span class="rated-products-ratings">
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star-o text-warning"> </i>
											</span>
											<div class="h5 mb-0 font-weight-semibold mt-1">R$22 - $45</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="media p-5 mt-0">
										<img class=" mr-4" src="../../assets/images/products/4.png" alt="img">
										<div class="media-body">
											<h4 class="mt-2 mb-1">Digital Watch</h4>
											<span class="rated-products-ratings">
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star-half-o text-warning"> </i>
											</span>
											<div class="h5 mb-0 font-weight-semibold mt-1">R$35 - $72</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="media p-5 mt-0">
										<img class=" mr-4" src="../../assets/images/products/6.png" alt="img">
										<div class="media-body">
											<h4 class="mt-2 mb-1">Sports Shoe</h4>
											<span class="rated-products-ratings">
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star-half-o text-warning"> </i>
												<i class="fa fa-star-o text-warning"> </i>
											</span>
											<div class="h5 mb-0 font-weight-semibold mt-1">R$12 - $21</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="media  mb-0 p-5 mt-0">
										<img class=" mr-4" src="../../assets/images/products/8.png" alt="img">
										<div class="media-body">
											<h4 class="mt-2 mb-1">Ladies shoes</h4>
											<span class="rated-products-ratings">
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star text-warning"> </i>
												<i class="fa fa-star-o text-warning"> </i>
												<i class="fa fa-star-o text-warning"> </i>
											</span>
											<div class="h5 mb-0 font-weight-semibold mt-1">R$89 - $97</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div> -->
			</div>
			<!--/Right Side Content-->
		</div>
	</div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<?php if(isset($msg) && !empty($msg)):?>
			<script>
				Swal.fire({
					position: 'top-end',
					icon: 'success',
					title: 'Pronto :)',
					html: 'Seu comentário foi adicionado',
					showConfirmButton: false,
					timer: 3500
				})
			</script>
		<?php endif;?>
