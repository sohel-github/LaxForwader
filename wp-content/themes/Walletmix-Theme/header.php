<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<?php wp_head(); ?>
	</head>
<body>

	<div id="top-menu">
		<div class="container">
			<div class="col-sm-12">
				<div class="pull-left">
					<a href="#">
						<img class="img-responsive logo" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/logo.png"/>
					</a>
				</div>
				<div class="pull-right">
					<span id="res_menu"></span>
					<!--
					<ul id="navigation">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Resources</a></li>
						<li><a href="#">Contact</a></li>
					</ul> -->
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'header_navigation', // menu slug from step 1
							'container' => false, // 'div' container will not be added
							//'menu_class' => 'nav', // <ul class="nav"> 
							'menu_id'	 => 'navigation',
							'fallback_cb' => 'default_header_nav', // name of default function from step 2
						));
					?>
				</div>
			</div>
		</div>
	</div> 
	
	<div id="slider">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img style="width:100%" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/1.jpg" alt="">
					<div class="carousel-caption">
						<h1>Services You Can Trust</h1>
						<a href="#">Learn more</a>
					</div>
				</div>
				<div class="item">
					<img style="width:100%" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/2.jpg" alt="">
					<div class="carousel-caption">
						<h1>Services You Can Trust</h1>
						<a href="#">Learn more</a>
					</div>
				</div>
				<div class="item">
					<img style="width:100%" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/3.jpg" alt="">
					<div class="carousel-caption">
						<h1>Services You Can Trust</h1>
						<a href="#">Learn more</a>
					</div>
				</div>
				<div class="item">
					<img style="width:100%" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/4.jpg" alt="">
					<div class="carousel-caption">
						<h1>Services You Can Trust</h1>
						<a href="#">Learn more</a>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	
	<div id="mission">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<a href="#">Mission</a>
					<h3>Our mission is to provide exceptional service in international freight solutions simple and easy.</h3><br/>
					<p>Our team of logistics consultants will shop the best rates available in the market with<br/> all the top carriers in the globe. We strive to provide worry-free, high-quality freight service for all your shipping needs.</p>
				</div>
			</div>
		</div>
	</div>