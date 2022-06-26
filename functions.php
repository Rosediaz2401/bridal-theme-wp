<?php


function bridalThemeSupport(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'bridalThemeSupport');

function bridal_scripts(){

    wp_enqueue_script('bridal-script',get_template_directory_uri()."/theme-template/assets/js/index.js",array(),'1.0',true);
}



add_action('wp_enqueue_scripts','bridal_scripts');

function bridalMenus(){
    $locations =array(
        'primary' => "Desktop Primary Menu"
    );
    register_nav_menus($locations);
}
add_action('init', 'bridalMenus');
?>