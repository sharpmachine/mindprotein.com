<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 7 ]>    
<html class="no-js ie7" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 8 ]>    
<html class="no-js ie8" <?php language_attributes(); ?>>
 <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class="no-js" <?php language_attributes(); ?>> 
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<title><?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'smm' ), max( $paged, $page ) );
			?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="Sharp Machine Media">
	
		<link rel="profile" href="http://gmpg.org/xfn/11" />
    	<!-- Le styles -->
    	<link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    	<link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    	<!-- Le fav and touch icons -->
    	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">

		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.7.min.js"></script>
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script><![endif]-->
		<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
			?>
	</head>

	<body <?php body_class(); ?>>

		<header>

			<div class="navbar navbar-inverse">
				<div id="menuBKtop" class="navbar-inner">
					<div class="container">
						<div class="row">
							<div class="span12 hidden-phone" id="top-nav">
								<ul class="nav pull-right">
									<li>
										<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/home-icon.png"> Home</a>
									</li>
									<li>
										<a class="contactMenu" href="<?php bloginfo('url'); ?>/contact"><img src="<?php bloginfo('template_directory'); ?>/img/contact-icon.png"> Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		 	<div class="navbar navbar-inverse">
		      <div  class="navbar-inner" id="menuBKmiddle">
		        <div class="container">
		        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
         		 	</a>
         		 	<div id="img-position">
         		 		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
         		 	</div>
		          <div class="nav-collapse collapse" id="middle-nav">
		            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker ) ); ?>
		          </div><!--/.nav-collapse -->
		        </div>
		      </div>
		    </div>
		  
		</header>
			