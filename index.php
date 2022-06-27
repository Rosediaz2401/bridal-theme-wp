<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
// define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
// require __DIR__ . '/wp-blog-header.php';

?>

<?php

get_header();
get_header('secundario');
?>

<?php

if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('template-parts/content','archive');
    }
}
?>

<?php
get_footer('secundario');

?>
