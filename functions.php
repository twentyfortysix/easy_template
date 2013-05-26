<?php
function f_2046_add_scripts() {
	wp_deregister_script( 'jquery' );
	
	wp_register_script ( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
	wp_register_style ( 'bootstrap-css', get_bloginfo('template_directory') .'/bootstrap/css/bootstrap.min.css');
	wp_register_style ( 'easy-css', get_bloginfo('template_directory') .'/style.css', array('bootstrap-responsive-css'));
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_style( 'easy-css' );
	
	
}
add_action('wp_enqueue_scripts', 'f_2046_add_scripts');

if ( function_exists('register_sidebar') ){
	register_sidebar( array('id' => 'top-menu','name' => __( 'Top Menu', 'easy_2046' ),'description' => __( 'This sidebar is located above the logo.', 'easy_2046' )) );
	register_sidebar( array('id' => 'single-right','name' => __( 'Single right', 'easy_2046' ),'description' => __( 'Right side on the single', 'easy_2046' )) );
	register_sidebar( array('id' => 'single-bottom','name' => __( 'Single bottom', 'easy_2046' ),'description' => __( 'bottom side on the single', 'easy_2046' ), 'before_widget' => '','after_widget'  => '' ));

}

// add featuredimage support
add_theme_support( 'post-thumbnails', array( 'post', 'page') );

