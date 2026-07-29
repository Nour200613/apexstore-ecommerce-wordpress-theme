<?php

function eedii_force_assets() {
    wp_enqueue_style(
        'eedii-custom-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        time()
    );

    wp_enqueue_script(
        'eedii-custom-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        time(),
        true
    );
}
add_action('wp_enqueue_scripts', 'eedii_force_assets', 999);

?>