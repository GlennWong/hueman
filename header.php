<!DOCTYPE html> 
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/fonts/font-awesome.min.css" rel="stylesheet">
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie/html5.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie/selectivizr.js" type="text/javascript"></script>
	<![endif]-->



</head>

<body class="home blog col-3cm full-width topbar-enabled chrome">

<div id="wrapper">

	<header id="header">
	
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				
				<div class="container">
					<div class="container-inner">		
						<div class="toggle-search"><i class="fa fa-search"></i></div>
						<div class="search-expand">
							<div class="search-expand-inner">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div><!--/.container-inner-->
				</div><!--/.container-->
				
			</nav><!--/#nav-topbar-->
		
		<div class="container group">
			<div class="container-inner">
				
				<div class="group pad">
					<h1 class="site-title"><a href="/">Hi,XXOO</a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div>
				
				<?php if (has_nav_menu('header')): ?>
					<nav class="nav-container group" id="nav-header">
						<div class="nav-toggle"><i class="fa fa-bars"></i></div>
						<div class="nav-text"><!-- put your mobile menu text here --></div>
						<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
					</nav><!--/#nav-header-->
				<?php endif; ?>
				
			</div><!--/.container-inner-->
		</div><!--/.container-->
		
	</header><!--/#header-->
	
	<div class="container" id="page">
		<div class="container-inner">
			<div class="main">
				<div class="main-inner group">
