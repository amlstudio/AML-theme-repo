<section class="staff">
    <?php
        $staff = new WP_Query([
            'post_type' => 'aml_staff',
            'order_by' => 'post_title',
            'order' => 'ASC',
            'posts_per_page' =>-1,
        ]);

        if($staff->have_posts()):
        ?>
          <br>
                <div class="row" id="comein-row">
           
                    <?php while($staff->have_posts()) :?>
                        <?php $staff->the_post();?>

                            <div class="offset-md-2 staff-photo col-md-3">
   
                                <div class="circle-image text-center">

                                 <?php the_post_thumbnail('staff-image'); ?><br>
                                 <h3><?php the_title(); ?></h3>
                                 <!-- for custom field staff position -->
                                    <div class="entry-meta text-center">
                                    
                                        <?php 
                                            $staff_position = get_field('staff_position');
                                            echo "<i>$staff_position</i>";
                                        ?>
                                    </div>
                                    <div class="entry-meta text-center">
                                    <?php
                                            $staff_number = get_field('staff_number');
                                            echo"<i>$staff_number</i>";
                                    ?>
                                    </div>
                                </div>
                        
                            </div>
                   
                            <div class="col-md-5 text-left">
                                
                                <br><br>
                                <?php the_content();?>
                                <!-- for custom field staff email  -->
                                <div class="entry-meta text-left">
                                   
                                    <?php 
                                        $staff_email = get_field('staff_email');
                                        echo "<b>$staff_email</b>";
                                    ?>
                                </div>
                            </div>
                            
                    <?php endwhile;?>
                </div> <!-- /.row -->
            <?php endif;?>
       
</section>