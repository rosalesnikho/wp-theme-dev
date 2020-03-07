<?php

// Setup


// Inc
include ( get_theme_file_path('/inc/front/enqueue.php'));

// Hooks
add_action('wp_enqueue_scripts', 'tiny_enqueue');


// Shortcodes