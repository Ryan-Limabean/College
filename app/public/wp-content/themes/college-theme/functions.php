<?php 

    function college_styles() {
        wp_enqueue_style('app',get_template_directory_uri() . '/css/app.css', '1.0.0');
    }
    add_action('wp_enqueue_scripts','college_styles');

    function college_features() {
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'college_features');

?>    