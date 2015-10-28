<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script  type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/masonry.pkgd.min.js"></script>
	<?php wp_head();?>
</head>
<body>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-xs-12 col-s-2 col-md-2 col-lg-2">
  			<div id="header">
  				<div class="logo">
  					

  					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/adorecarol-logo.png" class="img-responsive 
  						<?php if(is_home()){
  							echo 'animated fadeInDown';
  							} else {
  							echo '';
  						} ?>
					" alt="Carol Reyes"></a>

  						
  				</div><!-- .logo -->

   				<div class="nav">
  					<ul class="nav nav-pills nav-stacked">
						<li><a href="<?php bloginfo('url'); ?>/about">about</a></li>
						<li><a href="#">graphic design</a></li>
						<li><a href="#">illustrator</a></li>
						<div class="separator"></div>
						<li><a href="#">shop</a></li>
						<div class="separator"></div>
						<li><a href="#">blog</a></li>
						<li><a href="#">contact</a></li>	
						<div class="separator"></div>			
					</ul>
  				</div><!-- .nav -->

  				<div>
  					<ul class="social">
						<li class="fb"><a href="https://www.facebook.com/adorkableecarol" target="_blank" title="Facebook">Facebook</a></li>
						<li class="tw"><a href="https://twitter.com/adorecarol" target="_blank" title="Twitter">Twitter</a></li>
						<li class="ig"><a href="https://instagram.com/_carolreyes/" target="_blank" title="Instagram">Instagram</a></li>		
					</ul><!-- .social -->
  				</div>

  				<div class="ads">
					<a href="#">advertise with us</a>
  				</div><!-- .ads -->

 	 		</div><!-- #header -->
  		</div><!-- .col-xs-12 -->


  		<div class="col-xs-12 col-s-10 col-md-10 col-lg-10">
			<div class="row">
	  			<div class="content">
	  			
  		

