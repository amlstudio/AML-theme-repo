<section class="abouts">
    <div class="container text-center">
        <?php
            $about = new WP_Query([
                'post_type' => 'aml_about',
                'posts_per_page' => 1,
            ]);
            if($about->have_posts()) :
            ?>
                <div class="row">
                    <?php while($about->have_posts()): ?>

                    <?php $about->the_post();?>
                    <hr>
                    <div class="introduction">                  
                        <h1><?php the_title();?> </h1><br>
                            <div class="introduction-content">
                             <?php the_content();?>
                            </div>
                       
                    </div>
                </div>
            <?php endwhile;?>
        </div>
            <?php endif; ?>
        

</section>