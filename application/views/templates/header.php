<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>

	<meta name="description" content="Foody HTML Template by Jewel Theme" >

	<meta name="author" content="Jewel Theme">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Include modernizr-2.8.0.min.js -->
	<script src="/assets/js/modernizr-2.8.0.min.js"></script>

	<!-- Bootstrap  -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Icon Fonts  -->
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="/assets/css/linecons-font-style.css" rel="stylesheet">

	<!-- Plugins  -->
	<link href="/assets/css/jquery.fs.boxer.css" rel="stylesheet" /> 
	<link rel="stylesheet" href="/assets/css/owl.carousel.css">  
	<link href="/assets/css/animate.css" rel="stylesheet"/>
	
	<!-- Custom Styles -->
	<link href="/assets/css/style.css" rel="stylesheet"> 
	<link href="/assets/css/responsive.css" rel="stylesheet">
	
</head>
<body class="home"> 

	<!-- Menu -->
	<div class="navbar-fixed-top main-menu-continer">
		<!-- Responsive Navigation -->
		<button type="button" class="btn menubar-toggle"> 
			<i class="fa fa-bars"></i>
		</button> <!-- /.navbar-toggle -->

		<div id="main-menu" class="navbar navbar-default"> 
			<div class="navbar-header"> 
				<!-- Logo -->
				<a class="navbar-brand" href="./">
					<img src="/images/logo.png" alt="Foody Logo">
				</a><!-- /.navbar-brand -->
			</div> <!-- /.navbar-header -->

			<nav class="navbar-collapse clearfix" role="navigation">
				<!-- Main navigation -->
				<ul id="headernavigation" class="nav navbar-nav">
					<li <?php if(isset($active)){echo $active;} ?> ><a href="/#top-section">Home</a></li>
					<li><a href="/#welcome">About</a></li>
					<li><a href="/#our-menus">Menu</a></li>
					<li><a href="/#events">Events</a></li> 
					<li class="menu-item-has-children">
						<a href="/#blog">Blog</a>
						<ul class="sub-menu">
							<li><a href="blog-page.html">Blog Page</a></li>
							<li><a href="single-page.html">Single Page</a></li> 
							<li><a href="our-menu.html">Our Menu</a></li>  
						</ul><!-- /.sub-menu -->
					</li><!-- /.menu-item-has-children --> 
					<li><a href="#our-crew">Team</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul> <!-- /.nav .navbar-nav -->
			</nav> <!-- /.navbar-collapse  --> 

			<div class="nav-social-btn">
				<a href="#" class="twitter-btn"><i class="fa fa-twitter-square"></i></a>
				<a href="#" class="facebook-btn"><i class="fa fa-facebook-square"></i></a> 
				<a href="#" class="pinterest-btn"><i class="fa fa-pinterest-square"></i></a> 
				<a href="#" class="youtube-btn"><i class="fa fa-youtube-square"></i></a>
				<a href="#" class="rss-btn"><i class="fa fa-vimeo-square"></i></a>
			</div><!-- /.nav-social-btn --> 
		</div><!-- /#main-menu -->

	</div><!-- /.main-menu-continer -->
	<!-- Menu End --> 