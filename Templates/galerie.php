<?php get_header();
//Template Name: Galerie
?>


<section class="section1-speise" style="overflow-x: hidden">
        <div class="sec1_center_txt_galerie">
                <div class="container">
                    <div class="galerie-content__elements">
                            <h3 data-aos="fade-left" data-aos-duration="1000"><?php echo get_the_title();?></h3>
                            <h2 class="text-welcome-galerie" data-aos="fade-left" data-aos-duration="2000"><?php the_field('txt_welc_galerie');?></h2>
                        </div>
                </div>
        </div> 
        <div class="row">

                <div class="speise-image-homeleft"><div class="image_header_layer"></div>
                        <div class="blk">
                        </div>
                </div>


                <div class="speise-image-homeright"><div class="image_header_layer"></div>
                        <img src="<?php the_field('galerie_upimage');?>" alt="">
                </div>

        </div>
</section>

<section class="section2-galerie">
         <div class="container">
                <div class="line-top2" data-aos="zoom-in-down" data-aos-duration="700"></div>
                <h1 class="ttl-intro" data-aos="zoom-in-down" data-aos-duration="700">Unsere Restaurant Galerie</h1>
                <h4 class="" data-aos="fade-left" data-aos-duration="1000"><?php the_field('section2-text');?></h4>
                <!-- <div class="" data-aos="fade-left" data-aos-duration="1300"><?php dynamic_sidebar('dinner_logo');?></div> -->

                <?php the_field('reservation_form'); ?>


                
                <div class="gallery">
                        <div class="container clearfix">
                        
                                <ul id="lightgallery">
                                <?php getGallery(); ?>                                 
                                </ul>
                        
                                <?php
                                wp_reset_query();
                                function getGallery(){
                                $gallery = get_post_gallery($post, false);
                                $gids = explode( ",", $gallery['ids'] );
                                foreach( $gids as $id ) {
                                ?>    

                                <li data-src="<?php echo wp_get_attachment_url( $id ); ?>" class="gallery-item img-fluid wow animated shake" data-aos="zoom-in">
                                <a href="" class="gallery__item gallery__item--1">

                                        <div class="thumbnail" style="background-image:url(<?php echo wp_get_attachment_url( $id ); ?>)"></div>
                                        <img class="img-fluid thumbnail" src="<?php echo wp_get_attachment_url( $id ); ?>">
                                        
                                </a>
                                </li>
                                
                                <?php
                                }
                                }
                                ?>

                        </div>
                </div>


         </div>
</section>



<?php get_footer();?>