<?php

// Setup
define('TINY_DEV_MODE', true);

// Inc
// Que CSS & Scripts
include ( get_theme_file_path('/inc/front/enqueue.php'));
include ( get_theme_file_path('/inc/setup.php'));
//include ( get_theme_file_path('/inc/custom-nav-walker.php'));


// Hooks
add_action('wp_enqueue_scripts', 'tiny_enqueue');
add_action('after_setup_theme', 'tiny_setup_theme');


// Shortcodes