<?php

function styles() {
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/dist/css/style.css', [], null, 'all' );
}

function scripts() {
  wp_enqueue_script( 'jquery', "https://code.jquery.com/jquery-3.6.0.min.js", [], null, true );
  wp_enqueue_script( 'mask', "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js", ['jquery'], null, true );
  wp_enqueue_script( 'main', get_template_directory_uri().'/assets/dist/js/main-min.js', ['jquery', 'mask'], null, true );
}

function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url('https://overflow.dev.br/wp-content/themes/overflow/assets/dist/img/logo.svg');
      background-size: contain;
      width: auto;
      height: 70px;
    }
  </style>
<?php }

function my_login_logo_url()
{
  return home_url();
}

add_filter('login_headerurl', 'my_login_logo_url');

add_action( 'login_enqueue_scripts', 'my_login_logo' );

add_action( 'wp_enqueue_scripts', 'styles' );
add_action( 'wp_enqueue_scripts', 'scripts' );