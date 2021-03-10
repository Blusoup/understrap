<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<nav class="navbar navbar-expand-lg">

			<div class="container">

			<a href="/" class="header__homelink">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sub.svg" alt="Yellow Sub Geo">
			</a>

			<button class="navbar-toggler mainnav__trigger hamburger hamburger--squeeze" 
				type="button" data-toggle="collapse" 
				data-target="#navbarNavDropdown" 
				aria-controls="navbarNavDropdown" 
				aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"> 
				<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
			</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			
			</div><!-- .container -->
			

		</nav><!-- .site-navigation -->

			

	</div><!-- #wrapper-navbar end -->
