<?php

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_script('all', 'https://use.fontawesome.com/releases/v5.15.3/js/all.js', array(), null, false);

    wp_enqueue_style('fonts_1', 'https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700', array(), time());

    wp_enqueue_style('fonts_2', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic', array(), time());

    wp_enqueue_style('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', array(), time());

    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/styles.css', array(), time());

    wp_enqueue_script('jquery-3.5.1', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true);
    wp_enqueue_script('bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/scripts.js', array(), null, true);

});