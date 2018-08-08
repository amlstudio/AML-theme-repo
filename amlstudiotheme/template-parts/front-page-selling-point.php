<section class="sellingpoints">
<?php 
    $sellingpoints = new WP_Query([
        'post_type' => 'aml_selling_points',
        'order_by' => 'post_title',
        'order' => 'ASC',
        'posts_per_page' => 4,
    ]);

    if($sellingpoints->have_posts()):
        ?>
        <div class="container">
            <div class="row col-lg-12">
                <?php while($sellingpoints->have_posts()):?>
                <?php $sellingpoints->the_post();?>
                    <div class="sellingpoint-section col-sm-6 col-lg-3 text-center">
                        <div class="sellingpoint-image-wrapper text-center">
                            <?php the_post_thumbnail('sellingpoint-image');?>
                        </div>
                            <h5><b><?php the_title();?></b></h5>
                            <p><?php the_content();?></p>
                    </div>
    <?php endwhile;?>
            </div>
        </div>
    <?php endif;?>
    </section>