<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>


		<div class="row">
		
			<div class="footer-wrapper col-lg-12">
				
				<footer class="site-footer" id="colophon">
						
					<div class="site-info">		
					<?php get_template_part('template-parts/front-page', 'contact');?>
					<p class="footer-branding">Created by Mika Lehtinen</p>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

