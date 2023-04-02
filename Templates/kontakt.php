<?php get_header();
//Template Name: Kontakt
?>

<section class="section1-kontakt" style="overflow-x: hidden">
        <div class="sec1_center_txt_kuch">
            <div class="container">
                <div class="reserv-content__elements">
                    <h3 data-aos="fade-right" data-aos-duration="1000"><?php echo get_the_title();?></h3>
                    <h2 class="text-welcome-kontakte" data-aos="fade-right" data-aos-duration="2000"><?php the_field('txt_welc_kontakt');?></h2>
                </div>
            </div>
            </div>
    <div class="row">

        <div class="image-reservleft"><div class="image_header_layer"></div>
                <img src="<?php the_field('kontakt_upside_image');?>" alt="">
        </div>

        <div class="reserv-rightside">
                <div class="blk">
                </div>
        </div>

</div>
</section>

<section class="section5-home">
         <div class="container">
                <div class="line-top2" data-aos="zoom-in-down" data-aos-duration="700"></div>
                <h1 class="ttl-intro" data-aos="zoom-in-down" data-aos-duration="700">Kontakt Formular</h1>
                <h4 class="" data-aos="fade-left" data-aos-duration="1000"><?php the_field('section5-text');?></h4>
                <!-- <div class="" data-aos="fade-left" data-aos-duration="1300"><?php dynamic_sidebar('dinner_logo');?></div> -->

                <div class="" data-aos="flip-up" data-aos-duration="700"><?php the_field('contact_form'); ?></div>


         </div>
</section>

<?php get_footer();?>