<?php 
    $usps = new WP_Query([
        'post_type' => 'aml_usps',
        'order_by' => 'post_title',
        'order' => 'ASC',
        'posts_per_page' => 1,
    ]);

    if($usps->have_posts()): 
        ?>
            <div class="row" id="#comein-row">
            
                <?php while($usps->have_posts()):?>
                <?php $usps->the_post();?>
        
                    <div class="usp-section col-md-6">
                        
                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                    <div id="usp" class"your-class" style="background-image: url('<?php echo $thumb['0'];?>')">
                                    <div class="usp-content text-left offset-md-2 col-md-8">
                                <h3 class="text-left"><b><?php the_title(); ?></b></h3>
                                <?php the_content();?>
                                <div class="text-right">
                                <button type="button" class="btn btn-contact" id="contact-button">Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-center" id="particles-js">
                    </div>

    <?Php endwhile;?>
            </div>
    <?php endif; ?>