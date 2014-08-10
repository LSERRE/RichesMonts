<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.jpg">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="container_12">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container_class' => 'main-nav menu_left',      	// class of container (should you choose to use it)
    					'menu' => __( 'Menu principal 1', 'bonestheme' ),  	// nav name
    					'menu_class' => 'nav top-nav cf desktop-nav-1',              		// adding custom nav class
    					'theme_location' => 'main-nav1',                	// where it's located in the theme
    					'before' => '',                                 	// before the menu
	        			'after' => '',                                  	// after the menu
	        			'link_before' => '',                            	// before each link
	        			'link_after' => '',                             	// after each link
	        			'depth' => 0,                                   	// limit the depth of the nav
    					'fallback_cb' => ''                             	// fallback function (if there is one)
						)); ?>

					</nav>

					<h1 class="main-logo"><a href="<?php bloginfo('url'); ?>"><img class="logo" src="<?php bloginfo('template_url'); ?>/library/images/richesmonts-logo.png" alt="<?php wp_title( '&#124;', true, 'right' ); ?>"/></a></h1>

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container_class' => 'main-nav menu_right',         // class of container (should you choose to use it)
    					'menu' => __( 'Menu principal 2', 'bonestheme' ),  	// nav name
    					'menu_class' => 'nav top-nav cf desktop-nav-2',               	// adding custom nav class
    					'items_wrap' => '
	    					<ul id="%1$s" class="%2$s">%3$s
								<li>
									<a class="facebook" href="http://www.facebook.com">Facebook</a>
									<a class="twitter" href="http://www.twitter.com">Twitter</a>
									<a class="youtube" href="http://www.youtube.com">Youtube</a>
									<a class="pinterest" href="http://www.pinterest.com">Pinterest</a>
								</li>
							</ul>',
    																		// Insert socials links at the end of the menu
    					'theme_location' => 'main-nav2',                	// where it's located in the theme
    					'before' => '',                                 	// before the menu
	        			'after' => '',                                  	// after the menu
	        			'link_before' => '',                            	// before each link
	        			'link_after' => '',                             	// after each link
	        			'depth' => 0,                                   	// limit the depth of the nav
    					'fallback_cb' => ''                             	// fallback function (if there is one)
						)); ?>

					</nav>

					<a class="toggle-menu-responsive" href=""></a>

				</div>
				<div class="clearfix"></div>

			</header>
			<div class="responsive-nav">
				<nav  role="navigation">
					<?php wp_nav_menu(array(
					'container_class' => 'responsive-menu',         // class of container (should you choose to use it)
					'menu' => __( 'Responsive menu', 'bonestheme' ),  	// nav name
					'menu_class' => 'nav top-nav cf desktop-nav-2',               	// adding custom nav class
					'items_wrap' => '
						<ul id="%1$s" class="%2$s">%3$s
    						<li>
    							<form action="" method="post" class="search-box">
	    							<p>
										<input type="search" placeholder="Recherche" name="footer_search">
										<input type="submit" value="ok">
									</p>
								</form>
							</li>
							<li>
								<div class="social-wrapper">
									<a class="facebook" href="http://www.facebook.com">Facebook</a>
									<a class="twitter" href="http://www.twitter.com">Twitter</a>
									<a class="youtube" href="http://www.youtube.com">Youtube</a>
									<a class="pinterest" href="http://www.pinterest.com">Pinterest</a>
								</div>
							</li>
						</ul>',
																		// Insert socials links at the end of the menu
					'theme_location' => 'main-nav2',                	// where it's located in the theme
					'before' => '',                                 	// before the menu
        			'after' => '',                                  	// after the menu
        			'link_before' => '',                            	// before each link
        			'link_after' => '',                             	// after each link
        			'depth' => 0,                                   	// limit the depth of the nav
					'fallback_cb' => ''                             	// fallback function (if there is one)
					)); ?>
				</nav>
			</div>
