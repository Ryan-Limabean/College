<?php 

    function college_styles() {
        wp_enqueue_styles('app',get_template_directory_uri() . '/css/app.css', '1.0.0');
    }
    add_action('wp_enqueue_scripts','college_styles')
?>    