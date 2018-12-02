<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<?php
if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ) : ?>
	<style type="text/css">
		.wp-bs-4-jumbotron {
			background-image: url(<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ); ?>);
			background-position: 50% 50%;
			background-size: cover;
		}
		.wp-bp-jumbo-overlay {
			background: rgba(33,37,41, 0.0);
		}
	</style>
<?php
endif; ?>

<section class="jumbotron text-center wp-bs-4-jumbotron border-bottom text-white">
    <div class="wp-bp-jumbo-overlay">
        <div class="container">
						<h1 class="jumbotron-heading"><?php the_title(); ?></h1>
						</div>
    </div>
</section>

<section class="wp-bp-main-content">
<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
					<?php endwhile; ?>
			</div>
			<!-- /.col-md-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>

<?php
get_footer();
