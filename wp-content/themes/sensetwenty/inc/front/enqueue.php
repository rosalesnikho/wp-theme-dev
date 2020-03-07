<?php

function tiny_enqueue() {
	$version = TINY_DEV_MODE ? time() : false;
	// Links to styles
	wp_register_style( 'tiny_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',
	[], $version);
	wp_register_style( 'tiny_bootstrap', get_theme_file_uri() . '/assets/css/bootstrap.css', [], $version );
	wp_register_style( 'tiny_style', get_theme_file_uri() . '/assets/css/style.css', [], $version );
	wp_register_style( 'tiny_dark', get_theme_file_uri() . '/assets/css/dark.css', [], $version );
	wp_register_style( 'tiny_font_icons', get_theme_file_uri() . '/assets/css/font-icons.css', [], $version );
	wp_register_style( 'tiny_animate', get_theme_file_uri() . '/assets/css/animate.css', [], $version );
	wp_register_style( 'tiny_magnific', get_theme_file_uri() . '/assets/css/magnific-popup.css', [], $version );
	wp_register_style( 'tiny_custom', get_theme_file_uri() . '/assets/css/custom.css', [], $version );

	wp_enqueue_style( 'tiny_google_fonts' );
	wp_enqueue_style( 'tiny_bootstrap' );
	wp_enqueue_style( 'tiny_style' );
	wp_enqueue_style( 'tiny_dark' );
	wp_enqueue_style( 'tiny_font_icons' );
	wp_enqueue_style( 'tiny_animate' );
	wp_enqueue_style( 'tiny_magnific' );
	wp_enqueue_style( 'tiny_custom' );

	//Links to JS Scripts
	wp_register_script( 'tiny_plugins', get_theme_file_uri() . '/assets/js/plugins.js', [], $version, true );
	wp_register_script( 'tiny_functions', get_theme_file_uri() . '/assets/js/functions.js', [], $version, true );

	wp_enqueue_script('jquery');
	wp_enqueue_script('tiny_plugins');
	wp_enqueue_script('tiny_functions');

}