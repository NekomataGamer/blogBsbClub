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
	<title>Claylist - Classifieds, Directory, Multipurpose Listing HTML Template</title>
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/fonts/fonts/font-awesome.min.css">

	<!-- Bootstrap Css -->
	<link href="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="<?php echo BASE_URL;?>assets/blog/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />


	<!-- Dashboard css -->
	<link href="<?php echo BASE_URL;?>assets/blog/css/dashboard.css" rel="stylesheet" />
	<link href="<?php echo BASE_URL;?>assets/blog/css/admin-custom.css" rel="stylesheet" />

	<!-- c3.js Charts Plugin -->
	<link href="<?php echo BASE_URL;?>assets/blog/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

	<!---Font icons-->
	<link href="<?php echo BASE_URL;?>assets/blog/css/icons.css" rel="stylesheet"/>

</head>
	<body class="construction-image">
		<!--Loader-->
		<div id="global-loader">
			<img src="<?php echo BASE_URL;?>assets/blog/images/products/products/loader.png" class="loader-img floating" alt="">
		</div>

		<!--Page-->
		<div class="page ">
			<div class="page-content z-index-10">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
							<div class="card mb-0">
                            <?php if(isset($login_error)):?>
                                <div class="alert alert-warning"><?php echo $login_error;?></div>
                            <?php endif;?>
								<div class="card-header">
									<h3 class="card-title">Fazer login Administrativo</h3>
                                </div>
                                
								<form method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Login</label>
                                            <input type="text" class="form-control" placeholder="Login" name="login">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-dark">Senha</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="pass">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <a href="forgot-password.html" class="float-right small text-dark mt-1">I forgot password</a>
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label text-dark">Remember me</span>
                                            </label>
                                        </div> -->
                                        <div class="form-footer mt-2">
                                            <input type="submit" class="btn btn-primary btn-block" value="Entrar">
                                        </div>
                                        <!-- <div class="text-center  mt-3 text-dark">
                                            Don't have account yet? <a href="register.html">SignUp</a>
                                        </div> -->
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- Dashboard js -->
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/selectize.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/rating/jquery.rating-stars.js"></script>
		<!-- Custom scroll bar Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Fullside-menu Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/toggle-sidebar/sidemenu.js"></script>


		<!--Counters -->
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/counters/counterup.min.js"></script>
		<script src="<?php echo BASE_URL;?>assets/blog/plugins/counters/waypoints.min.js"></script>


		<!-- Custom Js-->
		<script src="<?php echo BASE_URL;?>assets/blog/js/admin-custom.js"></script>

    </body>
    BY BCKCODE
</html>