<?php

/*
Activate featured images
Most of P5 theme needs the featured images actives
*/
add_theme_support( 'post-thumbnails' );


/*
Enable the support for menus
*/
add_theme_support( 'menus' );

/*
Register two menu locations (main_menu, footer_menu)
*/
register_nav_menus(
        array(
                'main_menu' => 'Main menu',
                'footer_menu' => 'Footer menu'
        )
);
