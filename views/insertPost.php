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
		<title>Claylist– Clean & Modern Admin Dashboard Bootstrap 4 HTML Template</title>
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
							<a class="header-brand" href="index.html">
								<img src="<?php echo BASE_URL;?>assets/blog/images/brand/logo.png" class="header-brand-img" alt="Claylist logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
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
<div class="page-header">
    <h4 class="page-title">Inserir Post</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Ad</li>
    </ol>
</div>
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Inserir Post</div>
            </div>
            <div class="card-body">

                <?php if(isset($msg)):?>
                    <div class="alert alert-success"><?php echo $msg;?></div>
                <?php endif;?>

                <form method="POST">
                    <div class="form-group ">
                        <label class="form-label">Titulo do Post</label>
                        <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="title">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Select Category</label>
                        <select class="form-control" data-placeholder="Choose Browser" name="category">
                            <?php foreach($listCategories as $item):?>
                                <option value="<?php echo $item['id'];?>"><?php echo $item['title'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Upload Imagens do Slider</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="example-file-input-custom">
                            <label class="custom-file-label">Upload Imagens</label>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <label class="form-label">Corpo do Post</label>
                        <textarea name="body" id="editor" class="form-control w-100 editor" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="form-group ">
                        <label class="form-label">Nome do Altor</label>
                        <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="althor_name">
                    </div>
<div class="richText"><div class="richText-toolbar"><ul><li><a class="richText-btn" data-command="bold" title="Bold"><span class="fa fa-bold"></span></a></li><li><a class="richText-btn" data-command="italic" title="Italic"><span class="fa fa-italic"></span></a></li><li><a class="richText-btn" data-command="underline" title="Underline"><span class="fa fa-underline"></span></a></li><li><a class="richText-btn" data-command="justifyLeft" title="Align left"><span class="fa fa-align-left"></span></a></li><li><a class="richText-btn" data-command="justifyCenter" title="Align centered"><span class="fa fa-align-center"></span></a></li><li><a class="richText-btn" data-command="justifyRight" title="Align right"><span class="fa fa-align-right"></span></a></li><li><a class="richText-btn" data-command="insertOrderedList" title="Add ordered list"><span class="fa fa-list-ol"></span></a></li><li><a class="richText-btn" data-command="insertUnorderedList" title="Add unordered list"><span class="fa fa-list"></span></a></li><li><a class="richText-btn" title="Add font"><span class="fa fa-font"></span><div class="richText-dropdown-outer"><ul class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><li><a style="font-family:Arial;" data-command="fontName" data-option="Arial">Arial</a></li><li><a style="font-family:Arial Black;" data-command="fontName" data-option="Arial Black">Arial Black</a></li><li><a style="font-family:Comic Sans MS;" data-command="fontName" data-option="Comic Sans MS">Comic Sans MS</a></li><li><a style="font-family:Courier New;" data-command="fontName" data-option="Courier New">Courier New</a></li><li><a style="font-family:Geneva;" data-command="fontName" data-option="Geneva">Geneva</a></li><li><a style="font-family:Georgia;" data-command="fontName" data-option="Georgia">Georgia</a></li><li><a style="font-family:Helvetica;" data-command="fontName" data-option="Helvetica">Helvetica</a></li><li><a style="font-family:Impact;" data-command="fontName" data-option="Impact">Impact</a></li><li><a style="font-family:Lucida Console;" data-command="fontName" data-option="Lucida Console">Lucida Console</a></li><li><a style="font-family:Tahoma;" data-command="fontName" data-option="Tahoma">Tahoma</a></li><li><a style="font-family:Times New Roman;" data-command="fontName" data-option="Times New Roman">Times New Roman</a></li><li><a style="font-family:Verdana;" data-command="fontName" data-option="Verdana">Verdana</a></li></ul></div></a></li><li><a class="richText-btn" title="Add font size"><span class="fa fa-text-height"></span><div class="richText-dropdown-outer"><ul class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><li><a style="font-size:24px;" data-command="fontSize" data-option="24">Text 24px</a></li><li><a style="font-size:18px;" data-command="fontSize" data-option="18">Text 18px</a></li><li><a style="font-size:16px;" data-command="fontSize" data-option="16">Text 16px</a></li><li><a style="font-size:14px;" data-command="fontSize" data-option="14">Text 14px</a></li><li><a style="font-size:12px;" data-command="fontSize" data-option="12">Text 12px</a></li></ul></div></a></li><li><a class="richText-btn" title="Add Heading/title"><span class="fa fa-header fa-heading"></span><div class="richText-dropdown-outer"><ul class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><li><a data-command="formatBlock" data-option="h1">Title #1</a></li><li><a data-command="formatBlock" data-option="h2">Title #2</a></li><li><a data-command="formatBlock" data-option="h3">Title #3</a></li><li><a data-command="formatBlock" data-option="h4">Title #4</a></li></ul></div></a></li><li><a class="richText-btn" title="Add font color"><span class="fa fa-paint-brush"></span><div class="richText-dropdown-outer"><ul class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><li class="inline"><a data-command="forecolor" data-option="#FFFFFF" style="text-align:left;" title="White"><span class="box-color" style="background-color:#FFFFFF"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#000000" style="text-align:left;" title="Black"><span class="box-color" style="background-color:#000000"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#7F6000" style="text-align:left;" title="Brown"><span class="box-color" style="background-color:#7F6000"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#938953" style="text-align:left;" title="Beige"><span class="box-color" style="background-color:#938953"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#1F497D" style="text-align:left;" title="Dark Blue"><span class="box-color" style="background-color:#1F497D"></span></a></li><li class="inline"><a data-command="forecolor" data-option="blue" style="text-align:left;" title="Blue"><span class="box-color" style="background-color:blue"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#4F81BD" style="text-align:left;" title="Light Blue"><span class="box-color" style="background-color:#4F81BD"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#953734" style="text-align:left;" title="Dark Red"><span class="box-color" style="background-color:#953734"></span></a></li><li class="inline"><a data-command="forecolor" data-option="red" style="text-align:left;" title="Red"><span class="box-color" style="background-color:red"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#4F6128" style="text-align:left;" title="Dark Green"><span class="box-color" style="background-color:#4F6128"></span></a></li><li class="inline"><a data-command="forecolor" data-option="green" style="text-align:left;" title="Green"><span class="box-color" style="background-color:green"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#3F3151" style="text-align:left;" title="Purple"><span class="box-color" style="background-color:#3F3151"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#31859B" style="text-align:left;" title="Dark Turquois"><span class="box-color" style="background-color:#31859B"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#4BACC6" style="text-align:left;" title="Turquois"><span class="box-color" style="background-color:#4BACC6"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#E36C09" style="text-align:left;" title="Dark Orange"><span class="box-color" style="background-color:#E36C09"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#F79646" style="text-align:left;" title="Orange"><span class="box-color" style="background-color:#F79646"></span></a></li><li class="inline"><a data-command="forecolor" data-option="#FFFF00" style="text-align:left;" title="Yellow"><span class="box-color" style="background-color:#FFFF00"></span></a></li></ul></div></a></li><li><a class="richText-btn" title="Add image"><span class="fa fa-image"></span><div class="richText-dropdown-outer"><div class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><div class="richText-form" id="richText-Image" data-editor="richText-isnnkf"><div class="richText-form-item"><label for="imageURL">Image URL</label><input type="text" id="imageURL"></div><div class="richText-form-item"><label for="align">Align</label><select id="align"><option value="left">Left</option><option value="center">Center</option><option value="right">Right</option></select></div><div class="richText-form-item"><button class="btn">Add</button></div></div></div></div></a></li><li><a class="richText-btn" title="Add file"><span class="fa fa-file-text-o far fa-file-alt"></span><div class="richText-dropdown-outer"><div class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><div class="richText-form" id="richText-File" data-editor="richText-isnnkf"><div class="richText-form-item"><label for="fileURL">File URL</label><input type="text" id="fileURL"></div><div class="richText-form-item"><label for="fileText">Link text</label><input type="text" id="fileText"></div><div class="richText-form-item"><button class="btn">Add</button></div></div></div></div></a></li><li><a class="richText-btn" title="Add video"><span class="fa fa-video-camera fa-video"></span><div class="richText-dropdown-outer"><div class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><div class="richText-form" id="richText-Video" data-editor="richText-isnnkf"><div class="richText-form-item"><label for="videoURL">URL</label><input type="text" id="videoURL"></div><div class="richText-form-item"><label for="size">Size</label><select id="size"><option value="responsive">Responsive</option><option value="640x360">640x360</option><option value="560x315">560x315</option><option value="480x270">480x270</option><option value="320x180">320x180</option></select></div><div class="richText-form-item"><button class="btn">Add</button></div></div></div></div></a></li><li><a class="richText-btn" title="Add URL"><span class="fa fa-link"></span><div class="richText-dropdown-outer"><div class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><div class="richText-form" id="richText-URL" data-editor="richText-isnnkf"><div class="richText-form-item"><label for="url">URL</label><input type="text" id="url"></div><div class="richText-form-item"><label for="urlText">Text</label><input type="text" id="urlText"></div><div class="richText-form-item"><label for="openIn">Open in</label><select id="openIn"><option value="_self">Same tab</option><option value="_blank">New tab</option></select></div><div class="richText-form-item"><button class="btn">Add</button></div></div></div></div></a></li><li><a class="richText-btn" title="Add table"><span class="fa fa-table"></span><div class="richText-dropdown-outer"><div class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><div class="richText-form" id="richText-Table" data-editor="richText-isnnkf"><div class="richText-form-item"><label for="tableRows">Rows</label><input type="number" id="tableRows"></div><div class="richText-form-item"><label for="tableColumns">Columns</label><input type="number" id="tableColumns"></div><div class="richText-form-item"><button class="btn">Add</button></div></div></div></div></a></li><li><a class="richText-btn" data-command="removeFormat" title="Remove styles"><span class="fa fa-recycle"></span></a></li><li><a class="richText-btn" data-command="toggleCode" title="Show HTML code"><span class="fa fa-code"></span></a></li></ul></div><div class="richText-editor" id="richText-isnnkf" contenteditable="true"><div><br></div></div><textarea class="content richText-initial" name="example" placeholder="Enter Description" style="display: none;"></textarea><div class="richText-toolbar"><a class="richText-undo is-disabled" title="Undo"><span class="fa fa-undo"></span></a><a class="richText-redo is-disabled" title="Redo"><span class="fa fa-repeat fa-redo"></span></a><a class="richText-help"><span class="fa fa-question-circle"></span></a></div></div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
