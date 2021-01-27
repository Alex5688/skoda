<?php

function wpgruz_scripts() {
	//wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'bootstrap-map', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap-grid.css' );
	//wp_enqueue_style( 'css/bootstrap-min-map', get_template_directory_uri() . '/css/css/bootstrap.min.css.map' );
	//wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	//wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script( 'script-jquery', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'script-parallax', get_template_directory_uri() . '/js/parallax.js');
	wp_enqueue_script( 'script-wow', get_template_directory_uri() . '/js/wow.js');
	wp_enqueue_script( 'script-main', get_template_directory_uri() . '/js/main.js');
}

add_action( 'wp_enqueue_scripts', 'wpgruz_scripts' );
