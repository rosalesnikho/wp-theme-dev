<?php

// Widget functions for the sidebar
function tiny_widgets() {
	register_sidebar([
		'name'              => __('Sense20 UI Sidebar One', 'Sense20'),
		'id'                => 'tiny_sidebar',
		'description'       => __('Sense20 UI Sidebar Widgets', 'Sense20'),

		// Container tag for the whole widget
		'before_widget'     => '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget'      => '</div>',

		// Widget Title HTML / CSS
		'before_title'      => '<h4>',
		'after_title'       => '</h4>'
	]);
};

