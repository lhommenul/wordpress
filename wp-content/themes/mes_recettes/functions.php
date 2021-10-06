<?php


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );



/* Chargement des feuilles de style et scripts */

function dwwm_enqueue_stylesheets_and_scripts() {

    // fonts
    wp_enqueue_script('wolf_200', get_stylesheet_directory_uri() . '/fonts/montserrat-v18-latin-200.woff');
    wp_enqueue_script('wolf2_200', get_stylesheet_directory_uri() . '/fonts/montserrat-v18-latin-200.woff2.js');
    wp_enqueue_script('montserrat_500', get_stylesheet_directory_uri() . '/fonts/montserrat-v18-latin-500.woff');
    wp_enqueue_script('montserrat2_500', get_stylesheet_directory_uri() . '/fonts/montserrat-v18-latin-500.woff2');
    wp_enqueue_script('montserrat_600', get_stylesheet_directory_uri() . '/fonts/montserrat-v18-latin-600.woff');
    wp_enqueue_script('montserrat2_600', get_stylesheet_directory_uri() . '/fonts/montserrat-v18-latin-600.woff2');
    wp_enqueue_script('montserrat_v18', get_stylesheet_directory_uri() . '/fonts/montserrat-v18-latin-regular.woff');
    wp_enqueue_script('montserrat2_v18', get_stylesheet_directory_uri() . '/fonts/montserrat-v18-latin-regular.woff2');
    wp_enqueue_script('delafield', get_stylesheet_directory_uri() . '/fonts/mrs-saint-delafield-v8-latin-regular.woff');
    wp_enqueue_script('delafield2', get_stylesheet_directory_uri() . '/fonts/mrs-saint-delafield-v8-latin-regular.woff2');

    // style
    wp_enqueue_script('reset', get_stylesheet_directory_uri() . '/css/reset.js');
    wp_enqueue_script('style', get_stylesheet_directory_uri() . '/css/style.js');


}

add_action('wp_enqueue_scripts', 'dwwm_enqueue_stylesheets_and_scripts');

