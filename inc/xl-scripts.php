<?php

function xl_testimonials_carousel() {

    if (!is_admin()) {
        wp_enqueue_script('xl_plugins_js', plugins_url('/../assets/js/xl-plugins.js', __FILE__), array('jquery'), 1.0, true);
        wp_enqueue_script('xl_custom_js', plugins_url('/../assets/js/xl-custom.js', __FILE__), array(), 1.0, true);
        wp_enqueue_style('xl_plugins_css', plugins_url('/../assets/css/xl-plugins.css', __FILE__));
        wp_enqueue_style('xl_custom_css', plugins_url('/../assets/css/xl-custom.css', __FILE__));
    }
}

add_action('init', 'xl_testimonials_carousel');

