<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
	$container   = get_theme_mod( 'understrap_container_type' );
?>
<div class="wrapper" id="archive-wrapper">

				<?php if ( have_posts() ) : ?>

					<header class="page-header text-center">
						<?php
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );

						?>
                    
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'aml_references');
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>
				</div><!--/.end row -->
			

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
