<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Respondiv', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );


/* delete faq and portfolio */
function delete_post_type(){
	unregister_post_type( 'avada_faq' );
    unregister_post_type( 'avada_portfolio' );
}
add_action('init','delete_post_type');