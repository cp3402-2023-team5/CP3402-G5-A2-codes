<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CP3402-G5-A2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cp3402-g5-a2' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="container pt-2 pb-2">
			<div class="row">
				<div class="col site-header__logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="col about jcu">
					<div style="margin-top: 50px"><h5>About JCU</h5></div>
				</div>
				<div class="col highlights">
					<div style="margin-top: 50px"><h5>Highlights</h5></div>
				</div>
				<div class="col venue">
					<div style="margin-top: 50px"><h5>Venue</h5></div>
				</div>
				<div class="col register now">
					<div style="margin-top: 50px"><h5>Register Now</h5></div>
				</div>
			</div>
		</div>

		<!-- <video width="100%" height="600" loop controls autoplay>
    		<source src="C:\Users\Lenovo\Local Sites\cp3402-g5-a2\app\public\wp-content\themes\cp3402-g5-a2\video.mp4" type="video/mp4">
    	</video> -->

		<iframe width="100%" height="600" loop=1 autoplay=1
			src="https://www.youtube.com/watch?v=UhqJ6h9KL-k">
		</iframe>

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cp3402-g5-a2' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>#site-navigation -->
	</header><!-- #masthead -->
