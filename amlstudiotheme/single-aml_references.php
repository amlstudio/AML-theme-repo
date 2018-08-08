<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */
get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

		<div class="row">
			<main class="site-main" id="main">
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'aml_reference-single'); ?>

					
							
					<?php endwhile; // end of the loop. ?>
				</div><!-- /.row -->
			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- .row -->


<?php get_footer(); ?>