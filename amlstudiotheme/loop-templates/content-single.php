<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header text-center">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta text-left">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
	<div class="featured-image-wrapper col-md-12 text-center">
			<?php echo get_the_post_thumbnail( $post->ID, 'hero-image' ); ?>
		</div>
	<div class="row">
	
	<div class="entry-content col-md-12 text-left">

		<?php the_content(); ?>
		<div class="row">
				<div class="entry-meta-featured-1 text-left">
				<?php 
				
					// for 2nd featured image
					$featured_image2 = get_field('featured_image_2');

					if(!empty($featured_image2)): ?>
						<img src="<?php echo  $featured_image2['url']; ?>" 
						alt="<?php echo $featured_image2['alt']; ?>" />

					<?php endif;?>
				</div>
				
				<div class="entry-meta-featured-2 text-left">
				<?php
					// for 3rd featured image
					$featured_image3 = get_field('featured_image_3');

					if(!empty($featured_image3)): ?>
						<img src="<?php echo  $featured_image3['url']; ?>" 
						alt="<?php echo $featured_image3['alt']; ?> " />

					<?php endif;
				?>
				</div>
		</div>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
	</div>
	<footer class="entry-footer">

	<?php understrap_entry_footer(); 
		?>
		

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
