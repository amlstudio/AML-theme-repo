<section class="references">
<?php 
    $references = new WP_Query([
        'post_type' => 'aml_references',
        'order_by' => 'post_title',
        'order' => 'ASC',
        'posts_per_page' => -1,
    ]);

    if($references->have_posts()):
        ?>
        <div class="container" id="references-container">
        <h1 style="text-align:Center;">Referenser.</h1>
            <div class="row col-lg-12">
                <?php while($references->have_posts()):?>
                <?php $references->the_post();?>
                    <div class="references-section col-sm-12 col-lg-6 text-center">
                        <div class="references-image-wrapper text-center">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <img src="<?php the_post_thumbnail_url('news-image'); ?>"/>
                            </a>
                        </div>
                           
                    </div>
    <?php endwhile;?>
            </div>
        </div>
    <?php endif;?>
    </section>