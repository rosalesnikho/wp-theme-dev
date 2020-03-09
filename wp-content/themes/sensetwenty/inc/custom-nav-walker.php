<?php
// Class for traversing multi-level menus 
class Tiny_Custom_Nav_Walker extends Walker_Nav_Menu {
	// Appends classes to the WP Custom Menu
	public function  start_lvl( &$output, $depth = 0, $args = [] ) {
		$output             .= '<ul class="special-class">';
	}

	// Appends before / after sudo elements in CSS
	public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
		$output             .= '<li class="special-class-item">';
		$output             .= $args->before;
		$output             .= '<a href="' . $item->url . '">';
		$output             .= $args->link_before . $item->title . $args->link_after;
		$output             .= '<a/>';
		$output             .= $args->after;
	}

	// Appends the closing tag li to start_el function
	public function end_el( &$output, $item, $depth = 0, $args = [] ) {
		$output             .= '</li>';
	}

	// Appends closing HTML ul tags to the start_lvl function
	public function end_lvl( &$output, $depth = 0, $args = [] ) {
		$output             .= '</ul>';
	}
}
