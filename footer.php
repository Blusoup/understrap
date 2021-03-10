<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">


		<div class="footer__inner">
			<a href="/" class="footer__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/yellow-sub-geo-long.svg" alt="Yellow Sub Geo">
			</a>
			<div class="footer__info">
				<span class="footer__copyright">© Yellow Sub Geo <?php echo date("Y"); ?></span>
				<span><a href="/">How we use cookies</a></span>
				<span><a href="/">How we protect your privacy</a></span>
				<span><a href="/">Website by Yellowsub Creative</a></span>
			</div>
			<nav class="footer__social socialnav">
				<ul class="socialnav__list">
					<li class="socialnav__listitem">
						<a href="/"><i class="fa fa-facebook-f" title="Facebook" aria-hidden="true"></i><span class="sr-only">Facebook</span></a>
					</li>
					<li class="socialnav__listitem">
						<a href="/"><i class="fa fa-twitter" title="Twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span></a>
					</li>
					<li class="socialnav__listitem">
						<a href="/"><i class="fa fa-linkedin" title="LinkedIn" aria-hidden="true"></i><span class="sr-only">LinkedIn</span></a>
					</li>
					<li class="socialnav__listitem">
						<a href="/"><i class="fa fa-instagram" title="Instagram" aria-hidden="true"></i><span class="sr-only">Instagram</span></a>
					</li>
				</ul>
			</nav>
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

