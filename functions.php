<?php
// add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
// function my_theme_enqueue_styles() {
//     wp_enqueue_style( 'child-style', get_stylesheet_uri("./template/style.css"),
//         array( 'parenthandle' ), 
//         wp_get_theme()->get('Version')
//     );
// }

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