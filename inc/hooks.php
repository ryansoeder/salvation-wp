<?php
    //======================================================================
    // WORDPRESS ACTIONS
    //======================================================================
    add_action('wp_enqueue_scripts', 'WP_Boilerplate::resources');
    add_action('after_setup_theme', 'WP_Boilerplate::setup_theme_slug');
    add_action('after_setup_theme', 'WP_Boilerplate::register_nav_menus', 0 );

    //======================================================================
    // WORDPRESS FILTERS
    //======================================================================
    add_filter('embed_oembed_html', 'WP_Boilerplate::embed_wrapper', 10, 3);
    add_filter('video_embed_html', 'WP_Boilerplate::embed_wrapper');
    add_filter('excerpt_more', 'WP_Boilerplate::change_excerpt');
    add_filter('jpg_quality', 'WP_Boilerplate::high_jpg_quality');
    add_filter('upload_mimes', 'WP_Boilerplate::mime_types'); // Allowing SVG uploads to WP

    //======================================================================
    // WORDPRESS SUPPORT
    //======================================================================
    WP_Boilerplate::enable_thumbnails();
    WP_Boilerplate::add_sidebar();

    //======================================================================
    // ACF FILTERS
    //======================================================================
    add_filter('acf/settings/remove_wp_meta_box', '__return_true');
    add_filter('acf/settings/save_json', 'WP_Boilerplate_ACF::json_save_folder');
    add_filter('acf/settings/load_json', 'WP_Boilerplate_ACF::json_load_folder');
    WP_Boilerplate_ACF::add_option_page();