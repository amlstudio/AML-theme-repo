<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
?>

<article <?php post_class('col-md-6 text-center'); ?> id="post-<?php the_ID(); ?>">	
	
	<header class="entry-header">

	</header><!-- .entry-header -->
	<div class="feature-image-wrapper-references">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<img src="<?php the_post_thumbnail_url(); ?>"/>
			</a>
		<?php endif; ?>
	</div>
			

	
</article><!-- #post-## -->
