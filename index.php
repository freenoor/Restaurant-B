<?php
    get_header();
    if ( have_posts() ): 
        while( have_posts() ): 
            the_post();?>
            <h3><?php the_title();?></h3>
            <h2><?php the_content();?></h2>
            <h1><?php the_excerpt();?></h1>
            <?php
        endwhile;
    endif;
    get_footer();
?>