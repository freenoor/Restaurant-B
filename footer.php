<section class="footer">
    <div class="container">
        <div class="row">
            
            <div class="footersection3 footer-4 col-lg-4 col-sm-12" data-aos="zoom-in-down" data-aos-duration="1900">
            <h1>Quick Links</h1>
                <nav class="navbar2 navbar-expand-lg ">
                    <div class="" id="navMenu2">
                        <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'footer',
                                'container_class'  => 'navbar-nav mr-auto',
                                'container'=>'ul',
                        )
                        );?>
                    </div>    
                </nav>     
            </div>

            <div class="footersection1 footer-4 col-lg-4 col-sm-12" data-aos="zoom-in-down" data-aos-duration="1000">
                <a class="logo-footer" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php dynamic_sidebar('logo_footer');?>
                </a>
                    <?php dynamic_sidebar('footer_text') ?>
            </div> 

            <div class="footersection4 footer-4 col-lg-4 col-sm-12" data-aos="zoom-in-down" data-aos-duration="2200">
                <h1>Kontakt</h1>
                <div class="phone-div" id="divv">
                    <?php dynamic_sidebar('phone_contact') ?>
                </div>

                <div class="email-div" id="divv">
                    <?php dynamic_sidebar('mail_contact') ?>
                </div>

                <div class="address-div" id="divv">
                    <?php dynamic_sidebar('address_contact') ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="underfooter">
    <div class="container">
        <div class="row sp-btw">
            <div class="copyr">
                <p>Copyright &copy;<?php
                        echo date(' Y  ') ;?>All rights Reserved.<?php the_field('all_rechte'); ?> 
                </p>
            </div>

            <div class="rightside-1">
                <a class="title-imp" data-toggle="modal" data-target="#myModal">Impressum</a>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <?php
                            $impressum_args = array(
                            'post_type' => 'impressum',
                            'posts_per_page' => 1
                            );
                            $impressum_query = new WP_Query($impressum_args);
                            if($impressum_query->have_posts()) :
                            while ($impressum_query->have_posts()) : $impressum_query->the_post(); 
                            ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><?php the_title();?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                            
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="left_impre col-lg-6 col-md-6 col-sm-6">
                                            <?php the_field('adress_left');?>
                                        </div>
                                        <div class="right_impre col-lg-6 col-md-6 col-sm-6">
                                            <?php the_field('adress_right');?>
                                        </div>
                                    </div>
                                    <div class="left_impre">
                                        <?php the_field('content_all');?>
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                                </div>
                            </div>
                            
                            <?php endwhile; 
                            wp_reset_postdata(); ?>
                            <?php else: ?> 
                            <h2>Can't find post</h2>
                            <p>Sorry, we were unable to find the posts you requested</p>
                            <?php endif; ?> 

                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<?php 
wp_footer();
?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js'></script>
<script src='https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3'></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($)  {
    jQuery('#lightgallery').lightGallery({
    pager: true
    });
    });
    
    
    jQuery('.second-row .data1 input').attr('placeholder', 'Date');


    var swiper = new Swiper('.container1', {
    loop: true,
    grabCursor: true,
    simulateTouch:false,
    pagination: {
    el: '.swiper-pagination1',
    clickable: true,
    },
    });


    var swiper1 = new Swiper('.container3', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    simulateTouch:false,
    speed: 1400,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320.98: {
    simulateTouch:false,
    },
    375.98: {
    simulateTouch:false,
    },
    575.98: {
    slidesPerView: 2,
    centeredSlides: true,
    loop: true,
    simulateTouch:false,
    speed: 1400,
    },
    }
    });
    var swiper2 = new Swiper('.container4', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    simulateTouch:false,
    speed: 1400,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    });


    jQuery('.tnp-email').attr('placeholder', 'E-mail...');


    jQuery('.tnp-firstname').attr('placeholder', 'Name...');


    jQuery('.navbar-toggler').click(function(){
    jQuery('.header-here').toggleClass('wfixed');
    });

   
    jQuery(".hamburger").click(function() {
    jQuery(".hamburger").toggleClass("is-active");
    });


    jQuery('.navbar-toggler').click(function(){
    jQuery('.menu-here').toggleClass('bgr-collaps');
    });

    AOS.init();
    AOS.init({disable: 'mobile'});


    $(function() {                      
    $(".nav-link").click(function() {  
    $('nav-item').addClass("activeopacity");     
    });
    });

</script>

</body>
</html>