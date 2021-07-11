<?php 
add_action( 'wp_enqueue_scripts', 'remove_parent_add_custom', 20 );
function remove_parent_add_custom() {
	wp_dequeue_style( 'parent-style' );
	wp_deregister_style( 'twenty-twenty-one-style' ); 
	wp_deregister_style( 'twenty-twenty-one-print-style' ); 
	wp_dequeue_script( 'parent-style' );  
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/assets/js/core.js', array( 'jquery' ), '', true);
}
