<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
		 <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/slick-1.6.0/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/slick-1.6.0/slick/slick-theme.css"/>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/reset.css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="menu-sidebar">
		  <nav>
			<?php
				$args = array(
					'menu' => 'principal',
					'container' => false
				);
				wp_nav_menu( $args );
			?>
		  </nav>
		</div>
		<main id="main" class="">
			<div class="topo">
				<div class="button"></div>
				<header class="header">
					<div class="logo">
						UM SITE DO
						<a href="http://www.webedia-group.com/">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="logo webedia" class="logo-img">
						</a>
						GROUP
					</div>
					<nav class="header-menu">
					<?php
						$args = array(
							'menu' => 'principal',
							'container' => false
						);
						wp_nav_menu( $args );
					?>
					</nav>
				</header>
			</div>