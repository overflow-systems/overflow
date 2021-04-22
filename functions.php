<?php

function styles() {
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/dist/css/style.css', [], null, 'all' );
}

function scripts() {
  wp_enqueue_script( 'main', get_template_directory_uri().'/assets/dist/js/main-min.js', [], null, true );
}

add_action( 'wp_enqueue_scripts', 'styles' );
add_action( 'wp_enqueue_scripts', 'scripts' );