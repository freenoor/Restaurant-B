<!DOCTYPE html>
        <html>
            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta charset="utf-8">
                <?php wp_head();?>
                <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" async>
                <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" async>
                <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css' async>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" async/>
            </head>
        <body>
        
<section class="header-here">
    <div class="container">
        <div class="row">
            <div class="menu-here" data-aos="zoom-in-down">
                <nav class="navbar navbar-expand-lg navbar-light navbar-center">

                        <a class="logo-header" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php dynamic_sidebar('logo_header');?>
                        </a> 

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="hamburger" id="hamburger-icon">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </button>
                        
                    <?php wp_nav_menu(
                    array(
                    'theme_location'    => 'header',
                    'menu_class'        => 'navbar-nav',
                    'container_class'  => 'collapse navbar-collapse  overlay-full',
                    'container_id'    => 'navbarNav',
                    )
                    ); 
                    ?>
                                
                </nav>   
            </div>
        </div>
    </div>
</section>