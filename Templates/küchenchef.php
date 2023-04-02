<?php get_header();
//Template Name: Küchenchef
?>


<section class="section1-reserv" style="overflow-x: hidden">
        <div class="sec1_center_txt_kuch">
            <div class="container">
                <div class="reserv-content__elements">
                    <h3 data-aos="fade-right" data-aos-duration="1000"><?php echo get_the_title();?></h3>
                    <h2 class="text-welcome-kuchen" data-aos="fade-right" data-aos-duration="2000"><?php the_field('txt_welc_kuchenchef');?></h2>
                </div>
            </div>
            </div>
    <div class="row">

        <div class="image-reservleft"><div class="image_header_layer"></div>
                <img src="<?php the_field('kuchenchef_image');?>" alt="">
        </div>

        <div class="reserv-rightside">
                <div class="blk">
                </div>
        </div>

</div>
</section>




<section class="section2-küchenchef">
        <div class="container">
            <div class="line-top2" data-aos="zoom-in-down" data-aos-duration="700"></div>
                <h1 class="ttl-intro" data-aos="zoom-in-down" data-aos-duration="700">Treffen Sie unsere Küchenchef</h1>
                <h4 class="" data-aos="fade-left" data-aos-duration="1000"><?php the_field('section2-text');?></h4>
                <!-- <div class="" data-aos="fade-left" data-aos-duration="1300"><?php dynamic_sidebar('dinner_logo');?></div> -->


            <div class="row">
                
                   
                                <?php
                                $args = array(
                                'post_type' => 'team',
                                'posts_per_page' => '-1',
                                );
                                $loop = new WP_Query($args);
                                while($loop->have_posts()):
                                $loop->the_post();
                                ?>


                              
                                    <div class="elementteam-pos wow animated col-lg-4 col-md-6" data-aos="flip-down" data-aos-duration="1000">
                                        <div class="team-img">
                                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                                        </div>

                                        <div class="text-team">
                                              
                                            <h1 class="team-name wow animated"><?php the_title();?></h1>
                                            <h2 class="team-profession wow animated"><?php the_content();?></h2>
                                            
                                        </div>

                                    </div>
                             
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>

 </div>
        </div>
</section>


<?php get_footer();?>