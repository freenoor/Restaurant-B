<?php get_header();
//Template Name: Spaisekarte
?>
<section class="section1-speise" style="overflow-x: hidden">
        <div class="sec1_center_txt_speise">
                <div class="container">
                    <div class="speise-content__elements">
                            <h3 data-aos="fade-left" data-aos-duration="1000"><?php echo get_the_title();?></h3>
                            <h2 class="text-welcome-speise" data-aos="fade-left" data-aos-duration="2000"><?php the_field('txt_welc_reserv');?></h2>
                        </div>
                </div>
        </div> 
        <div class="row">
                <div class="speise-image-homeleft">
                <div class="blk">
                </div>
                </div>
                <div class="speise-image-homeright"><div class="image_header_layer"></div>
                <img src="<?php the_field('speisekarteimage');?>" alt="">
                </div>
        </div>
</section>

 <section class="menu_category section2-menu">
         <div class="container">
                <div class="cont-pdng">
                 <div class="line-top" data-aos="zoom-in-down" data-aos-duration="700"></div>
                <h1 class="ttl-intro" data-aos="zoom-in-down" data-aos-duration="700"><?php echo get_the_title();?></h1>
                <h4 class="" data-aos="fade-left" data-aos-duration="1000"><?php the_field('section2-text-speise');?></h4>
                <!-- <div class="logo2" data-aos="fade-left" data-aos-duration="1300"><?php dynamic_sidebar('dinner_logo');?></div> -->
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
                                                <img src="<?= $image = get_field('img_section1s', $term); ?>" alt="">
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

                                        <?php  $countWhile++; ?>
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
      </div>
</section>


<?php get_footer();?>