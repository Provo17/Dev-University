<?php

function university_files() {

    wp_enqueue_script('slider-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);

    //used microtime() function to avoid chaching while in development. !!!! change back to version numer for production !!!!

    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('univesity_main_styles', get_stylesheet_uri(), NULL, microtime());

    //used microtime() function to avoid chaching while in development. !!!! change back to version numer for production !!!!

}

add_action('wp_enqueue_scripts', 'university_files');

function university_features () {

    add_theme_support('title-tag');

    register_nav_menu('headerMenu', 'Header menu');
    register_nav_menu('footerMenuLeft', 'Footer menu left');
    register_nav_menu('footerMenuRight', 'Footer menu right');

}

add_action('after_setup_theme', 'university_features');



 ?>
