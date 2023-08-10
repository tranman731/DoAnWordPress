<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package procons
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'procons'); ?></a>

		<header id="masthead" class="site-header">
			<div id="top-header">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="hotline">
								<span>Chính sách bảo hành sản phẩm và quan điểm phục vụ</span>

							</div>
						</div>
						<div class="col-md-3">
							<i class="fa-sharp fa-solid fa-phone-volume"></i>
							<span>Hotline: 0909 904 364</span>
						</div>
						<div class="col-md-3">
							<i class="fa-sharp fa-solid fa-envelope"></i>
							<span>Email mr.hieutruong@gmail.com</span>
						</div>
					</div>
				</div>
			</div>

			<div class="branding">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-6 logo">
							<div class="site-branding">
								<?php
								the_custom_logo();
								if (is_front_page() && is_home()) :
								?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
								<?php
								else :
								?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
								<?php
								endif;
								$devthemes_description = get_bloginfo('description', 'display');
								if ($devthemes_description || is_customize_preview()) :
								?>
									<p class="site-description"><?php echo $devthemes_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																?></p>
								<?php endif; ?>
							</div><!-- .site-branding -->
						</div>


						<div class="col-md-6 col-6 search">
							<div class="title">
								<a href="">Tiếng Việt</a>
							</div>
							<div class="socical">
								<a href="https://www.facebook.com/profile.php?id=100036713001628"><i style="color: darkgray;" class="fa-brands fa-facebook"></i></a>
								<a href=""><i style="color: darkgray;" class="fa-brands fa-twitter"></i></a>
								<a href=""><i style="color: darkgray;" class="fa-brands fa-google-plus"></i></a>
								<a href=""><i style="color: darkgray;" class="fa-brands fa-youtube"></i></a>
								<a href=""><i style="color: darkgray;" class="fa-brands fa-blogger-b"></i></a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="new-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-11">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'devthemes'); ?></button>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->