<section class="privacy-policy">
    <?php 
        $privacy_policy = new WP_Query([
            'post_type' => 'aml_privacy_policy',
            'order_by' => 'post_title',
            'posts_per_page' => 1,
        ]);

        if($privacy_policy->have_posts()):
            ?>
                    <?php while($privacy_policy->have_posts()):?>
                        <?php $privacy_policy->the_post();?>
                        
                        <div class="row">
                            <div class="col-md-2">    
                            </div>
                            
                            <div class="wrapper col-md-8 text-left">
                                <p>
                                    <button class="btn btn-default" style="width:100%;" id="btn-privacy" type="button" data-toggle="collapse" data-target="#collapseprivacy" aria-expanded="false" aria-controls="collapseprivacy" >
                                        <?php the_title();?>
                                    </button>
                                    <br>
                                </p>
                                <div class="collapse text-left" id="collapseprivacy">
                                    <div class="card card-body">
                                    <?php the_content();?>
                                    </div>
                                </div>
                        </div>
        <?php endwhile;?>
                </div>
        <?php endif;?>
</section>