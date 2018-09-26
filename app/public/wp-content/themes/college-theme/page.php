<?php

    get_header();

    while(have_posts()) {
        the_post();
        ?>

        <div class="grid-container about-content">
            <?php the_content(); ?>
        </div>
         
    <?php
    }

    get_footer();


?>    