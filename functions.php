<?php
function f_2046_add_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script ( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
	wp_register_style ( 'bootstrap-css', get_bloginfo('template_directory') .'/bootstrap/css/bootstrap.min.css');
	wp_register_script ( 'bootstrap-js', get_bloginfo('template_directory') .'/bootstrap/js/bootstrap.min.js');
	wp_register_style ( 'easy-css', get_bloginfo('template_directory') .'/style.css', array('bootstrap-css'));
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_style( 'easy-css' );		
}
add_action('wp_enqueue_scripts', 'f_2046_add_scripts');

if ( function_exists('register_sidebar') ){
	register_sidebar( array('id' => 'header-top','name' => __( 'Header', 'easy_textdomain' ),'description' => __( 'Visible throghout the whole web', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'header-menu','name' => __( 'Menu', 'easy_textdomain' ),'description' => __( 'Visible throghout the whole web', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'extra-top-content','name' => __( 'Under menu', 'easy_textdomain' ),'description' => __( 'Visible anywhere but single page & post', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'index-second-column','name' => __( 'Common second column', 'easy_textdomain' ),'description' => __( 'Visible anywhere but single page & post', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'index-third-column','name' => __( 'Common third column', 'easy_textdomain' ),'description' => __( 'Visible anywhere but single page & post', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'single-second-column','name' => __( 'Single second column', 'easy_textdomain' ),'description' => __( 'Visible single post', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'single-third-column','name' => __( 'Single third column', 'easy_textdomain' ),'description' => __( 'Visible single post', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'page-second-column','name' => __( 'Page second column', 'easy_textdomain' ),'description' => __( 'Visible single page', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'page-third-column','name' => __( 'Page third column', 'easy_textdomain' ),'description' => __( 'Visible single page', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));
	register_sidebar( array('id' => 'a-footer','name' => __( 'Footer', 'easy_textdomain' ),'description' => __( 'Visible throghout the whole web', 'easy_textdomain' ), 'before_widget' => '','after_widget'  => '' ));

}

// featured images
add_theme_support('post-thumbnails', array('post', 'page'));

// remove image size attributes
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// load theme translation
function localize_theme_setup() {

	// Retrieve the directory for the localization files
	$lang_dir = get_template_directory() . '/lang';
	
	// Set the theme's text domain using the unique identifier from above
	load_theme_textdomain('easy_textdomain', $lang_dir);

} // end localize_theme_setup
add_action('after_setup_theme', 'localize_theme_setup');

// bootstrap menu walker
// 
add_action( 'after_setup_theme', 'register_my_menus' );
 
function register_my_menus() {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'your_theme_name' ),
	) );
}
