<?php

/* -------------------------------------------------------------------------- */
/*	Переподключаем стандартный jQuery в footer
/* -------------------------------------------------------------------------- */


add_action( 'wp_enqueue_scripts', function() {
    wp_deregister_script( 'jquery' );
} );


/* -------------------------------------------------------------------------- */
/*	Подключаем CSS и JS mt-фреймворка
/* -------------------------------------------------------------------------- */

add_action( 'wp_enqueue_scripts', 'enqueue_vendor_js_and_css' );

function enqueue_vendor_js_and_css() {

    //JavaScript
    wp_enqueue_script( 'lazyload', get_stylesheet_directory_uri() . '/framework/js/lazyload.js', array(  ), '' , true );
}


/* -------------------------------------------------------------------------- */
/*	Подключаем CSS и JS конкретного проекта
/* -------------------------------------------------------------------------- */

add_action( 'wp_enqueue_scripts', 'enqueue_theme_js_and_css' );

function enqueue_theme_js_and_css() {
    //CSS
    wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/assets/css/main.css', false , get_stylesheet_directory_uri() . '/assets/css/main.css' );

    //JavaScript
    //  wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), get_stylesheet_directory_uri() . '/assets/js/custom.js' , true );
    wp_enqueue_script( 'custom_js', get_template_directory_uri() .'/assets/js/custom.js', array(), '1.0', true );
}