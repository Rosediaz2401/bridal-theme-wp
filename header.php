
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Lato&family=Montserrat&family=Roboto&family=Rubik&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Inter&family=Lato&family=Montserrat&family=Roboto&family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php 
    wp_head(); 
    ?>

</head>
<body>
    <header class="header">
        <div class="header-container">
        <div class="ham-btn">
            <button class="panel-btn hamburger hamburger--elastic" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
        </div>
            <a class="logo" href="index.html">
                <?php
                if(function_exists('the_custom_logo')){
                   $custom_logo_id =get_theme_mod('custom_logo');
                   $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img class="logo-img" src="<?php echo $logo[0] ?>" alt="Bridal Photography">
            </a>
            <img class="share" src="<?php bloginfo('template_url'); ?>/theme-template/img/share.png" alt="share">
        </div>
            <div class="menu-container panel">
                <div class="menu-section">
                    <nav class="main-menu menu">

                     <?php 
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme-_location' => 'primary',
                                'items_wrap' => '<ul id="" class="navigation">%3$s</ul>'
                            )
                        );
                     ?>   
                    </nav>
                    <div class="social-wrap">
                        <a href="https://www.facebook.com/BridalPhotographyPV" target="_blank" rel="noopener noreferrer"><img class="media-icons share-icons" src="<?php bloginfo('template_url'); ?>/theme-template/img/simbolo-de-la-aplicacion-de-facebook.png" alt="share"></a>
                        <a href="https://www.instagram.com/bridalphotography/" target="_blank" rel="noopener noreferrer"><img class="media-icons share-icons" src="<?php bloginfo('template_url'); ?>/theme-template/img/instagram.png" alt="share"></a>
                        <img class="media-icons share-icons" src="<?php bloginfo('template_url'); ?>/theme-template/img/shopping-bag.png" alt="share">
                    </div> 
                    
                </div>
            </div>  
    </header>
