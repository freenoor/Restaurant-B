<?php get_header(); 
//Template Name: Home 
?>

<!-- HOME -->
<section class="section1-home" >
        <div class="swiper-container container1">
                <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'homeslider',
                'posts_per_page' => '4',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide slide1">
                        <div class="slider-image-homeright">
                                <div class="image_header_layer01">
                                <img src="<?php the_field('slideimages');?>" alt="">
                                </div>
                                <div class="swiper-pagination1"></div>
                        </div>
                        <div class="slider-image-homeleft">
                                <div class="blk">
                                </div>

                        </div>
                        
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                </div>
        </div>
                <div class="home-content__elements">
                <div class="container home-content">
                        <h3 data-aos="fade-right" data-aos-duration="1500"><?php the_field('home_content_title');?></h3>
                        <h2 data-aos="fade-right" data-aos-duration="2000"><?php the_field('home_content_text');?></h2>
                        <div class="home-content__buttons" data-aos="fade-right" data-aos-duration="2500">
                                <div class="btn1">
                                        <a href="<?php the_field('button1'); ?>"> <?php the_field('button_name1'); ?> </a>
                                </div>
                                <div class="btn2">
                                        <a href="<?php the_field('button2'); ?>"> <?php the_field('button_name2'); ?> </a>
                                </div>
                        </div>
                        </div>
        </div>
 </section>
 <section class="menu_category section2-menu">
        <div class="container">
                <div class="cont-pdng">
                <div class="line-top" data-aos="zoom-in-down" data-aos-duration="700"></div>
                <h1 class="ttl-intro" data-aos="zoom-in-down" data-aos-duration="700"><?php echo get_the_title( 26 ); ?></h1>
                <h4 class="" data-aos="fade-left" data-aos-duration="1000"><?php the_field('section2-text-home');?></h4>
                <!-- <div class="logo1" data-aos="fade-left" data-aos-duration="1300"><?php dynamic_sidebar('dinner_logo');?></div> -->
                </div>
                
                        <div class="content">
                                <div class="tab-tab fixed-position" id="stickytypeheader">
                                
                                        <nav>
                                                <ul class="nav nav-tabs1" id="nav-tab" role="tablist">

                                                <?php $terms = get_terms('menucategory');
                                                $count = 0;
                                                foreach($terms as $term){ ?>

                                                <li class="nav-item">
                                                <a class="nav-link <?php echo $count == 0 ? 'active' : ''?>" data-toggle="tab" href='#<?php echo $term->slug;?>' id="<?php echo $term->slug;?>-tab" role="tab" aria-controls="<?php echo $term->slug;?>" aria-selected="true">
                                                        <img class=" wow animated tablogo"src="<?= $image = get_field('img_section1s', $term); ?>" alt="">
                                                        <h3><?php
                                                        echo $term->name;
                                                        ?></h3>
                                                </a>
                                                </li>
                                        
                                                <?php
                                                $count++; } 
                                                ?>
                                                </ul>
                                        </nav>
                        
                                </div>
                       
                                
                                <div class="tab-content" id="menu__posts" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                                
                                        <?php $terms = get_terms('menucategory');
                                        $count = 0;
                                        foreach($terms as $term): ?>
                                                
                                        <div class="tab-pane row fade <?php echo $count == 0 ? 'active show' : ''?>" id="<?php echo $term->slug;?>" role="tabpanel" aria-labelledby="<?php echo $term->slug;?>-tab">
                                        <div class="row">

                                                <?php
                                                $args = array(
                                                'post_type' => 'menu',
                                                'posts_per_page' => '10',
                                                'order' => 'ASC',
                                                'taxonomy_pe_page'=>'9',
                                                'menucategory' => $term->slug,
                                                );
                                                $loop = new WP_Query($args);
                                                while($loop->have_posts()):
                                                $loop->the_post();
                                                ?>
                                                <div class="col-lg-6 post__elements__pd">
                                                <div class="post__elements">
                                                        <div class="img__post">
                                                                <?php the_post_thumbnail(); ?>
                                                        </div>
                                                        <div class="cont-pos__post">
                                                        <div class="tit-pr__post">
                                                                <h1><?php the_title();?></h1>
                                                                <h2><?php the_excerpt();?>CHF</h2>
                                                        </div>
                                                        <div class="conte-txt__post">
                                                                <?php the_content();?>
                                                        </div>
                                                        </div>
                                                </div>
                                                </div>

                                                <?php  $count++; ?>
                                                <?php endwhile; 
                                                wp_reset_postdata();?>
                                        </div>
                                        </div>

                                        <?php
                                        $count++;
                                        endforeach;
                                        ?>
                                </div>             
                        </div>
                <div class="btn1">
                        <a href="<?php the_field('button_menu'); ?>"> <?php the_field('button_menu_name'); ?> </a>
                </div>
      </div>
</section>

<section class="section3-home" >
         <div class="container">
                <div class="line-top2" data-aos="zoom-in-down" data-aos-duration="700"></div>
                <h1 class="ttl-intro" data-aos="zoom-in-down" data-aos-duration="700">Wir konzentrieren uns auf</h1>
                <h4 class="" data-aos="fade-left" data-aos-duration="1000"><?php the_field('section3-text');?></h4>
                <!-- <div class="" data-aos="fade-left" data-aos-duration="1300"><?php dynamic_sidebar('dinner_logo');?></div> -->
                
                <div class="section3-home__posttype">
                        <?php
                        $args = array(
                        'post_type' => 'wefocuson',
                        'posts_per_page' => '-1',
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                        $loop->the_post();
                        ?>
                        <div class="section-home__elements col-lg 4 col-md-6 animated" data-aos="flip-left" data-aos-duration="700">
                               
                                <div class="wefocuson-logo wow animated">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                </div>
                               
                                <h3><?php the_title();?></h3>
                                <?php the_excerpt();?>
        
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
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

           
<?php get_footer();?>