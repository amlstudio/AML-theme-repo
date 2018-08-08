<section class="heroes">
    <?php
        //get all posts from the category of heroes
        
        $heroes = new WP_Query([
            'post_type' => 'aml_hero',  //name of post type to fetch
            'order_by' => 'title',      //arrange the posts on title
            'order' => 'DESC',           //in ascending order
            'posts_per_page' => 1,      //total amounth of posts that will be displayed
        ]);
        if($heroes->have_posts()): 
            ?>
                <div class="row">
                    <?php while($heroes->have_posts()) :?>
                        <?php $heroes->the_post(); ?>
                        <hr>
                    
                        <div class="maincontent col-lg-12 text-left">

                           <div class="hero-image-wrapper">

                                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                <div id="hero" class"your-class" style="background-image: url('<?php echo $thumb['0'];?>')">

                                <div class="testovic text-left col-lg-11 offset-lg-1">

                                    <div class="contentbox-center text-left" id="content-slidein">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_content();?>

                                            <div id="icon1">

                                                <a href="https://github.com/amlstudio" class="fa fa-github" ></a>

                                                <a href="https://www.linkedin.com/in/mika-lehtinen-48a33488" class="fa fa-linkedin"></a>
                                        
                                                <a href="#"class="fa fa-envelope-o" id="header-contact"></a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>                  
                    </div>
                </div>
                      
        <?php endwhile; ?>
                </div>
        <?php endif; ?>
        
</section>
