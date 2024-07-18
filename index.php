<?php
/**
 * The main template file.
 */


get_header();   //here we call the header

    if( have_posts() ) :
        while ( have_posts() ):
            // the_posts();
            the_post();
            //do our stuff
            get_template_part('template-parts/post/content'); //here we add template
        endwhile;
    endif;

  



get_footer();    //here we call the footer
