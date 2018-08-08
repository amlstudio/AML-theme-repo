<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<header class="entry-header">
		

</header><!-- .entry-header -->
	<div class="featured-image-bg-wrapper">

		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<div id="post" class"your-class" style="background-image: url('<?php echo $thumb['0'];?>')">
			<h1 style="color:white;"><u><?php the_title(); ?></u></h1>
		</div>

	</div>

	<div class="content-wrapper-single text-center offset-lg-2 col-lg-8 offset-md-1 col-md-10">
			<?php the_content(); ?>
		</div>
		
			<div class="row">
			
				<div class="commentcontainer col-md-6 text-left">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div><!--.end commentcontainer -->
			</div><!-- .end row -->
	<footer class="entry-footer">
		<?php understrap_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

