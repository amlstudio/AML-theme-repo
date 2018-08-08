<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
?>

<article <?php post_class('col-md-6 text-left'); ?> id="post-<?php the_ID(); ?>">	
	
	<header class="entry-header">
	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
	<?php the_date();?>
	</header><!-- .entry-header -->

    <div class="row" id="row-blog">

			<?php echo get_the_post_thumbnail( $post->ID, 'news-image' ); ?>
	</div><!-- /row -->
	
</article><!-- #post-## -->
