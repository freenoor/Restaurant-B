<?php get_header();
//Template Name: Reservirung
?>

<section class="section1-reserv" style="overflow-x: hidden">
        <div class="sec1_center_txt">
        <div class="container">
        <div class="reserv-content__elements"> 
                <h3 data-aos="fade-right" data-aos-duration="1000"><?php echo get_the_title();?></h3>
                <h2 class="text-welcome-reserv" data-aos="fade-right" data-aos-duration="2000"><?php the_field('txt_welc_reserv');?></h2>
            </div>
        </div>
        </div>
    <div class="row">
        <div class="image-reservleft"><div class="image_header_layer"></div>
                <img src="<?php the_field('reservleft_image');?>" alt="">
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
                <h1 class="ttl-intro" data-aos="zoom-in-down" data-aos-duration="700">Tisch Reservieren</h1>
                <h4 class="" data-aos="fade-left" data-aos-duration="1000"><?php the_field('section5-text');?></h4>
                <!-- <div class="" data-aos="fade-left" data-aos-duration="1300"><?php dynamic_sidebar('dinner_logo');?></div> -->
                <div class="" data-aos="flip-up" data-aos-duration="700"><?php the_field('reservation_form'); ?></div>
         </div>
</section>

<section class="section1-reserv" style="overflow-x: hidden">
        <div class="reserv-txtbottom-pos">
        <div class="container">
                <div class="reserv-content__elements-bottom" data-aos="fade-right">
                        <h1><?php the_field('title_reserv_bottom');?></h1>
                        <h2><?php the_field('txt_reserv_bottom');?></h2>
                </div>
        </div>
        </div>
    <div class="row">
        <div class="reserv-leftside-bottom">
                <div class="blk">
                </div>
        </div>

        <div class="image-reservright-bottom">
                <img src="<?php the_field('reservbottom_image');?>" alt="">
        </div>

</div>
</section>

<?php get_footer();?>