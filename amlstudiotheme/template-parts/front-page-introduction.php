<section class="introductions">
    <div class="container text-center">
        <?php
            $introductions = new WP_Query([
                'post_type' => 'aml_introduction',
                'page_id' => '14',
                'posts_per_page' => 1,
            ]);
            if($introductions->have_posts()) :
            ?>
                <div class="row">
                    <?php while($introductions->have_posts()): ?>

                    <?php $introductions->the_post();?>
                    <hr>
                    <div class="introduction">
                        <?php the_content();?>
                    </div>
                </div>
            <?php endwhile;?>
    </div>
            <?php endif; ?>
</section>