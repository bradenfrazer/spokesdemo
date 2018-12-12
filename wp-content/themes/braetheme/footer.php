<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center bg-white mt-4 text-muted">

		<section class="footer-widgets text-left">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
								<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php endif; ?>

				</div>
				<!-- /.row -->
			</div>
		</section>

		<div class="container">
			<div class="site-info">
				<p> Theme by
					<a href="http://www.bradenfrazer.com"> Braden Frazer </a>
					 | Modified from the
					<a href="https://bootstrap-wp.com/">Bootstrap 4 WordPress Theme</a>
				</p>
			</div><!-- .site-info -->
		</div>
		<!-- /.container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
