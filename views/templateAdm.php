<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Claylist - Classifieds, Directory, Multipurpose Listing HTML Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="directory listing html template, bootstrap html template, directory html template, directory website template, directory listing html template, directory listing template, listing website template, business directory template, membership directory template, directory template, service directory template, bootstrap business directory template, directory listing website template, business directory html template, online directory template, online directory website templates, best website templates, html template, html5 template, themeforest html, themeforest html templates">
		
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Administrativo BSB Club</title>
		<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/fonts/fonts/font-awesome.min.css">

		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">


		<!-- Bootstrap Css -->
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="<?php echo BASE_URL;?>assets/blog/css/dashboard.css" rel="stylesheet" />
		<link href="<?php echo BASE_URL;?>assets/blog/css/admin-custom.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo BASE_URL;?>assets/blog/css/icons.css" rel="stylesheet"/>
		<link href="<?php echo BASE_URL;?>assets/blog/plugins/iconfonts/icons.css" rel="stylesheet" />

	</head>
	<body class="app sidebar-mini">

		<div id="global-loader">
			<img src="<?php echo BASE_URL;?>assets/blog/images/products/products/loader.png" class="loader-img floating" alt="">
		</div>

		<div class="page">
			<div class="page-main">
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="<?php echo BASE_URL."admin";?>">
								<img src="<?php echo BASE_URL;?>assets/blog/images/brand/Artboard-22.png" class="header-brand-img" alt="BSB logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="<?php echo BASE_URL."admin";?>"></a>
							<div class="header-navicon">
								<a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
									<i class="fa fa-search"></i>
								</a>
							</div>
							<div class="header-navsearch">
								<a href="#" class=" "></a>
								<form class="form-inline mr-auto">
									<div class="nav-search">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >
										<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown d-none d-md-flex" >
									<a  class="nav-link icon full-screen-link">
										<i class="fe fe-maximize-2"  id="fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-none d-md-flex country-selector">
									<a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
										<img src="<?php echo BASE_URL;?>assets/blog/images/us_flag.jpg" alt="img" class="avatar avatar-xs mr-1 align-self-center">
										<div>
											<strong class="text-dark">English</strong>
										</div>
									</a>
									<div class="language-width dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/french_flag.jpg"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>French</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/germany_flag.jpg"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>Germany</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/italy_flag.jpg"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>Italy</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/russia_flag.jpg"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>Russia</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/spain_flag.jpg"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>Spain</strong>
											</div>
										</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-bell-o"></i>
										<span class=" nav-unread badge badge-danger  badge-pill">4</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item text-center">You have 4 notification</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-envelope-o"></i>
											</div>
											<div>
												<strong>2 new Messages</strong>
												<div class="small text-muted">17:50 Pm</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-calendar"></i>
											</div>
											<div>
												<strong> 1 Event Soon</strong>
												<div class="small text-muted">19-10-2019</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-comment-o"></i>
											</div>
											<div>
												<strong> 3 new Comments</strong>
												<div class="small text-muted">05:34 Am</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-exclamation-triangle"></i>
											</div>
											<div>
												<strong> Application Error</strong>
												<div class="small text-muted">13:45 Pm</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">See all Notification</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-envelope-o"></i>
										<span class=" nav-unread badge badge-warning  badge-pill">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/faces/male/41.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Blake</strong> I've finished it! See you so.......
												<div class="small text-muted">30 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/faces/female/1.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Caroline</strong> Just see the my Admin....
												<div class="small text-muted">12 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/faces/male/18.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Jonathan</strong> Hi! I'am singer......
												<div class="small text-muted">1 hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="../../assets/images/faces/female/18.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Emily</strong> Just a reminder that you have.....
												<div class="small text-muted">45 mins ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Messages</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-grid"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  app-selector">
										<ul class="drop-icon-wrap">
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-speech text-dark"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-map text-dark"></i>
													<span class="block">map</span>
												</a>
											</li>

											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-bubbles text-dark"></i>
													<span class="block">Messages</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-user-follow text-dark"></i>
													<span class="block">Followers</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-picture text-dark"></i>
													<span class="block">Photos</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-settings text-dark"></i>
													<span class="block">Settings</span>
												</a>
											</li>
										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div>
								<div class="dropdown ">
									<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
										<img src="<?php echo BASE_URL;?>assets/blog/images/faces/male/cristiano.png" alt="profile-img" class="avatar avatar-md brround">
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<a class="dropdown-item" href="profile.html">
											<i class="dropdown-icon icon icon-user"></i> My Profile
										</a>
										<a class="dropdown-item" href="emailservices.html">
											<i class="dropdown-icon icon icon-speech"></i> Inbox
										</a>
										<a class="dropdown-item" href="editprofile.html">
											<i class="dropdown-icon  icon icon-settings"></i> Account Settings
										</a>
										<a class="dropdown-item" href="<?php echo BASE_URL."admin/logout";?>">
											<i class="dropdown-icon icon icon-power"></i> Log out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="<?php echo BASE_URL;?>assets/blog/images/faces/male/cristiano.png" alt="user-img" class="avatar avatar-lg brround">
								<a href="editprofile.html" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2>Rubin Carmody</h2>
								<span>Web Designer</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
                    <li>
                        <a class="side-menu__item" href="<?php echo BASE_URL."admin";?>"><i class="side-menu__icon fa fa-dashboard"></i><span class="side-menu__label"> Dashboard</span></a>
                    </li>
                    
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Posts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo BASE_URL."admin/insertPost/";?>" class="slide-item">Adicionar Post</a>
								</li>
								<li>
									<a href="<?php echo BASE_URL."admin/listPost";?>" class="slide-item">Todos os Posts</a>
								</li>
							</ul>
                        </li>
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Categorias</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo BASE_URL."admin/insertCategory/";?>" class="slide-item">Adicionar Categoria</a>
								</li>
								<li>
									<a href="<?php echo BASE_URL."admin/listCategories";?>" class="slide-item">Todas as Categorias</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Leads</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo BASE_URL."admin/listLeads/";?>" class="slide-item">Novos Leads (adquirir Cartão)</a>
								</li>

								<li>
									<a href="<?php echo BASE_URL."admin/listLeadsListen/";?>" class="slide-item">Leads Visualisados (adquirir Cartão)</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Contato</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo BASE_URL."admin/contacts/";?>" class="slide-item">Novos Contatos</a>
								</li>

								<li>
									<a href="<?php echo BASE_URL."admin/contactsRead/";?>" class="slide-item">Marcados Como Lido</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Comentarios</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo BASE_URL."admin/comments/";?>" class="slide-item">Todos os Comentarios</a>
								</li>
							</ul>
						</li>
						
					</ul>
					<div class="app-sidebar-footer">
						<a href="">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</a>
						<a href="">
							<span class="fa fa-user" aria-hidden="true"></span>
						</a>
						<a href="">
							<span class="fa fa-cog" aria-hidden="true"></span>
						</a>
						<a href="<?php echo BASE_URL."admin/logout";?>">
							<span class="fa fa-sign-in" aria-hidden="true"></span>
							</a>
						<a href="">
							<span class="fa fa-comment" aria-hidden="true"></span>
						</a>
					</div>
				</aside>
                <div class="app-content  my-3 my-md-5">
                    <div class="side-app">
                        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
                    </div>
                </div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2019 <a href="#">Claylist</a>. Designed by <a href="#">Spruko</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>


		<!-- Dashboard Core -->
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/selectize.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/rating/jquery.rating-stars.js"></script>

		<!--Counters -->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/counters/counterup.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/counters/waypoints.min.js"></script>

		<!-- Fullside-menu Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/toggle-sidebar/sidemenu.js"></script>

		<!-- CHARTJS CHART -->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/chart/Chart.bundle.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/chart/utils.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- ECharts Plugin -->
		<script src=".<?php echo BASE_URL;?>assets/blog/plugins/echarts/echarts.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/echarts/echarts.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/index1.js"></script>

		<!-- Custom Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/admin-custom.js"></script>

	</body>
</html>