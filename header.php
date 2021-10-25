<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?></title>

    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>
        <div class="header-container-mobile">
            <div class="header-content-mobile">
                <div class="brand-logo-mobile">
                    <?php if (get_header_image() == '') { ?>
                        <h1><a href="<?php get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    <?php } else { ?>
                        <a href="<?php get_home_url(); ?>"><img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?> " width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
                    <?php } ?>
                </div>
                <div class="nav-container-mobile">
                    <button class="hamburger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#073b4c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                    <button class="cross">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#073b4c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'main-menu',
                    'container_class'   => 'main-menu',
                ));
                ?>
            </div>


            <div class="desktop-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'main-menu',
                    'container_class'   => 'main-menu',
                ));
                ?>
            </div>
    </header>