<?php
/* THEME DEFAULTS */
add_theme_support( 'post-thumbnails' );

/* THEME SCRIPTS */
wp_register_script( 'main', get_stylesheet_directory_uri() . '/js/main.min.js', '', '', true );
wp_enqueue_script( 'main' );
?>