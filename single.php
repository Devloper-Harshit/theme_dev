<?php
/**
 * Single page template
 */
 
// get_header();
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
            while(have_posts()):
                the_post();
                the_content();// used to get the centent of single page here
            endwhile;
        ?>

    </main>
</div>