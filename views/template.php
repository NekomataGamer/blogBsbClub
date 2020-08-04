<!doctype html>
<html lang="zxx" dir="ltr">
	<head>
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Claylist - Classifieds, Directory, Multipurpose Listing HTML Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="bsb, bsb club, bsb bank, cartão, credito, debito, desconto, categorias">

		<link rel="icon" type="image/jpg" href="http://bsbclub.com.br/assets/images/brand/BSB CLUB - ICONE NEGATIVO.png">

		<!-- Title -->
		<title>BSB CLUB</title>

		<!-- Bootstrap Css -->
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="<?php echo BASE_URL;?>assets/blog/css/dashboard.css" rel="stylesheet" />

		<!-- Font-awesome  Css -->
		<link href="<?php echo BASE_URL;?>assets/blog/css/icons.css" rel="stylesheet"/>

		<!--Horizontal Menu-->
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/Horizontal2/Horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet" />
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/Horizontal2/Horizontal-menu/horizontal.css" rel="stylesheet" />
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/Horizontal2/Horizontal-menu/color-skins/color.css" rel="stylesheet" />

		<!--Select2 Plugin -->
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- Cookie css -->
<!-- 		<link href="../../assets/plugins/cookie/cookie.css" rel="stylesheet"> -->

		<!-- Owl Theme css-->
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- COLOR-SKINS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL;?>assets/blog/webslidemenu/color-skins/color10.css" />
    
    <!--   Slider-Mobile   -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/blog/css/slider.css">
    
    <!--   Menu Mobile   -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/blog/css/menu-mobile.css">

	</head>
	<body>

		<!--Loader-->
		<div id="global-loader">
			<img src="<?php echo "../assets/blog/images/brand/Artboard-22.png";?>" class="loader-img floating" alt="">
		</div>

	<!--Topbar-->
	<div class="header-main">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
						<div class="top-bar-left d-flex">
							<div class="clearfix">
								<ul class="socials">
									<li>
										<a class="social-icon text-dark" href="https://www.facebook.com/BSB-CLUB-112437210556987/"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a class="social-icon text-dark" href="https://www.instagram.com/bsbcluboficial/?igshid=xkbpe8556dea"><i class="fa fa-instagram"></i></a>
									</li>
								</ul>
							</div>
							<div class="clearfix">
								<ul class="contact border-left">
									<li class="mr-5 d-lg-none">
										<a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>: +425 345 8765</span></a>
									</li>

									<li class="dropdown mr-5">


									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
						<div class="top-bar-right">
							<ul class="custom">
								<li>
									<a href="register.html" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Cadastre-se</span></a>
								</li>
								<li>
									<a href="login.html" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Entrar</span></a>
								</li>
								<li class="dropdown">
									<a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> Painel</span></a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="mydash.html" class="dropdown-item" >
											<i class="dropdown-icon icon icon-user"></i> Meu Perfil
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon icon icon-speech"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon icon icon-bell"></i> Notificações
										</a>
										<a href="mydash.html" class="dropdown-item" >
											<i class="dropdown-icon  icon icon-settings"></i> Configurações da Conta
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon icon icon-power"></i> Sair
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Header -->
        
      <header id="topo-site" style="display: none;">
        <div>
           <a href="<?php echo BASE_URL;?>"><img style="height: auto; width:200px; margin-left: 100px !important;" src="<?php echo BASE_URL."assets/blog/images/brand/Artboard-22.png";?>" alt=""></a>
        </div>
      </header>
      <input type="checkbox" id="chk" >
      <label for="chk" class="menu-icon" style="display: none;">&#9776;</label>
      
      
      <div class="bg">

      </div>

      <nav class="menu-menu1" id="principal">
        <ul id="menu-listaa">
          <li><a href="index.html">HOME</a></li>
          <li><a href="index.html">SOBRE</a></li>
          <li><a href="index.html">NOTÍCIAS</a></li>
          <li><a href="index.html">CATEGORIAS <span>+</span></a></li>
          <li><a href="index.html">CONTATO</a></li>
        </ul>
      </nav>
      
      
      
<!-- 			<div class="horizontal-header clearfix ">
				<div class="container">
          
					<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
					<span class="smllogo"><img src="../../assets/images/brand/Artboard 22.png" width="120"  width="110" alt="" style="margin-top:-12px ;"/></span>
					<a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
          
				</div>
			</div> -->
			<!-- /Mobile Header -->
      
      

			<div class="horizontal-main bg-dark-transparent clearfix" style="background-color: #413e3f; height: 110px" id="menu-none">
				<div class="horizontal-mainwrapper container clearfix">
					<div class="desktoplogo" style="margin-top: -18px;">
						<a href="<?php echo BASE_URL;?>"><img style="height: 110px; width:auto;" src="<?php echo BASE_URL."assets/blog/images/brand/Artboard-22.png";?>" alt=""></a>
					</div>
					<div class="desktoplogo-1" style="margin-top: -25px;">
						<a href="<?php echo BASE_URL;?>"><img style="height: ; width:200px;" src="<?php echo BASE_URL."assets/blog/images/brand/Artboard-22.png";?>" alt=""></a>
					</div>
					<!--Nav-->
					<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list" style="margin-top: 15px;">
							<li aria-haspopup="true"><a href="<?php echo BASE_URL."";?>"  style="color: #fff !important;">Inicio </a>
								
							</li>
							<li aria-haspopup="true"><a href="<?php echo BASE_URL."pages/about";?>" style="color: #fff !important;">Sobre </a></li>


							<li aria-haspopup="true"><a href="<?php echo BASE_URL."pages/news";?>" style="color: #fff !important;">Notícias </a>
								
							</li>
							<li aria-haspopup="true"><a href="<?php echo BASE_URL."pages/categories";?>" style="color: #fff !important;">Categorias </a>

							</li>
							<li aria-haspopup="true"><a href="<?php echo BASE_URL."pages/contact";?>" style="color: #fff !important;"> Contato <span class="wsarrow"></span></a></li>
							<li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
							
							</li>
						</ul>
						<ul class="mb-0">
							<li aria-haspopup="true" class="mt-5 d-none d-lg-block ">
								
							</li>
						</ul>
					</nav>
					<!--Nav-->
				</div>
			</div>
		</div>	
		</div>

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

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
							<input type="text" class="form-control input-lg " placeholder="Seu email">
							<div class="input-group-append ">
								<button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
									Enviar
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!--Footer Section-- (EDITADO)-->
		<section>
			<footer class="bg-dark-purple text-white">
				<div class="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<h6>Sobre</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto" style="border-color: #B5D356 !important;">
								<p>Um banco feito para atender todas as suas necessidades. </p>
                                <p>Contribuindo para o desenvolvimento econômico e social do País</p>
							</div>
							<div class="col-lg-2 col-md-12">
								<h6>Nossos Serviços</h6>
								 <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto" style="border-color: #B5D356 !important;">
								<ul class="list-unstyled mb-0">
									<li><a href="javascript:;" id="hoverConc">Nosso Time</a></li>
									
									<li><a href="javascript:;" id="hoverConc">Sobre</a></li>
									<li><a href="javascript:;" id="hoverConc">Serviços</a></li>
									
									
								</ul>
							</div>

							<div class="col-lg-3 col-md-12">
								<h6>Contato</h6>
								<hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="border-color: #B5D356 !important;">
								<ul class="list-unstyled mb-0">
									<li>
										<a href="https://goo.gl/maps/UB6kdxmvsmLQGRxJ8"  id="hoverConc"><i class="fa fa-home mr-3 " style="color: #B5D356;" id="hoverConc"></i> Rua Itaboraí, 1058 - Ed Ilhas Fiji - LJ 7  Praia de Itaparica - Vila Velha - ES <br> CEP 29.102-195</a>
									</li>
									<li>
										<a href="mailto:contato@bsbclub.com.br"  id="hoverConc"><i class="fa fa-envelope mr-3" style="color: #B5D356;" ></i> contato@bsbclub.com.br</a></li>
									<li>
										<a href="tel:27 4042-3511"  id="hoverConc"><i class="fa fa-phone mr-3" style="color: #B5D356;"></i> 27 4042-3511</a>
									</li>
									 <li>
										
									</li>
								</ul>
								<ul class="list-unstyled list-inline mt-3">
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light" href="https://www.facebook.com/BSB-CLUB-112437210556987/">
										<i class="fa fa-facebook bg-facebook"></i>
									  </a>
									</li>
									<li class="list-inline-item" >
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light" href = "https://instagram.com/bsbcluboficial?igshid=xkbpe8556dea">
										<i class="fa fa-instagram bg-info" ></i>
									  </a>
									</li>
									
									
								</ul>
							</div>
							<div class="col-lg-4 col-md-12">
								<form method="POST">
									<h6>Faça Parte</h6>
									<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="border-color: #B5D356 !important;">
									<div class="clearfix"></div>
									<div class="input-group w-70">
										<input type="text" class="form-control br-tl-3  br-bl-3 " name="lead_1" placeholder="Email">
										<div class="input-group-append ">
										<input type="submit" class="btn btn-primary br-tr-3  br-br-3" value="Adquirir" style="background-color: #B5D356 !important;" value="Enviar">
											<!-- <button type="button" class="btn btn-primary br-tr-3  br-br-3" > Enviar </button> -->
										</div>
									</div>
								</form>
								
								<!-- <hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto" style="border-color: #B5D356 !important;"> -->
								
								
							</div>
						</div>
					</div>
				</div>
				<div class="bg-dark-purple text-white p-0">
					<div class="container">
						<div class="row d-flex">
							<div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
								Copyright © 2020 <a href="#" class="fs-14 text-primary"></a>. BSB Club. <a href="#" class="fs-14 text-primary"></a> Todos os direitos reservados.
							</div>
						</div>
					</div>
				</div>
			</footer>
		</section>
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		<!-- JQuery js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap js -->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

		<!--JQuery Sparkline Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/circle-progress.min.js"></script>

		<!-- Star Rating Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/rating/jquery.rating-stars.js"></script>

		<!--Owl Carousel js -->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/owl-carousel/owl.carousel.js"></script>

		<!--Horizontal Menu-->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/Horizontal2/Horizontal-menu/horizontal.js"></script>

		<!--Counters -->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/counters/counterup.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/counters/waypoints.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/counters/numeric-counter.js"></script>

		<!--JQuery TouchSwipe js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/jquery.touchSwipe.min.js"></script>

		<!--Select2 js -->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/select2/select2.full.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/select2.js"></script>

		<!-- Cookie js -->
		<!-- <script src="<?php echo BASE_URL;?>assets/blog/plugins/cookie/jquery.ihavecookies.js"></script> -->
		<!-- <script src="<?php echo BASE_URL;?>assets/blog/plugins/cookie/cookie.js"></script> -->

		<!-- sticky Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/sticky.js"></script>

        <!-- Custom scroll bar Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Swipe Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/swipe.js"></script>

		<!-- Scripts Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/scripts2.js"></script>

		<!-- Typewritter Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/typewritter.js"></script>

		<!-- Custom Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/custom.js"></script>

		<!-- SweetAlert 2 -->

		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		

	</body>
</html>
