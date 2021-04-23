<?php

function styles() {
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/dist/css/style.css', [], null, 'all' );
}

function scripts() {
  wp_enqueue_script( 'jquery', "https://code.jquery.com/jquery-3.6.0.min.js", [], null, true );
  wp_enqueue_script( 'mask', "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js", ['jquery'], null, true );
  wp_enqueue_script( 'main', get_template_directory_uri().'/assets/dist/js/main-min.js', ['jquery', 'mask'], null, true );
}

add_action( 'wp_enqueue_scripts', 'styles' );
add_action( 'wp_enqueue_scripts', 'scripts' );