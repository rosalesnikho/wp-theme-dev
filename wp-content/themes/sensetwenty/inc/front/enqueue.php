<?php

function tiny_enqueue() {

	wp_register_style('tiny_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i' );
	wp_register_style('tiny_bootstrap', get_theme_file_uri().'/assets/css/bootstrap.css');
	wp_register_style('tiny_style', get_theme_file_uri().'/assets/css/style.css');
	wp_register_style('tiny_dark', get_theme_file_uri().'/assets/css/dark.css');
	wp_register_style('tiny_font_icons', get_theme_file_uri().'/assets/css/font-icons.css');
	wp_register_style('tiny_animate', get_theme_file_uri().'/assets/css/animate.css');
	wp_register_style('tiny_magnific', get_theme_file_uri().'/assets/css/magnific-popup.css');
	wp_register_style('tiny_custom', get_theme_file_uri().'/assets/css/custom.css');

	wp_enqueue_style('tiny_google_fonts');
	wp_enqueue_style('tiny_bootstrap');
	wp_enqueue_style('tiny_style');
	wp_enqueue_style('tiny_dark');
	wp_enqueue_style('tiny_font_icons');
	wp_enqueue_style('tiny_animate');
	wp_enqueue_style('tiny_magnific');
	wp_enqueue_style('tiny_custom');

}