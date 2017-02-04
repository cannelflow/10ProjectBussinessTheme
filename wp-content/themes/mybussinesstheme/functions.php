<?php

// Theme Support
function mybussiness_theme_setup(){
	
	//Logo Suport
	add_theme_support('custom-logo');
	
	//post-thumbnail
    add_theme_support('post-thumbnails');
    
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
    
    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
}
  
add_action('after_setup_theme','mybussiness_theme_setup');


//add js & css
function justsimple_scripts() {
	
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
 
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all' );
 
  wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,700', false );
	
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/style.css');
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	
	wp_enqueue_script( 'custome-js', get_template_directory_uri() . '/js/main.js');
 
// 	wp_enqueue_script( 'bootstrapwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'justsimple_scripts' );
/**
 * Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if

// Widget Locations
function mywordstrap_init_widgets($id){
	register_sidebar(array(
		'name'		=> 'Content Region 1',
		'id'		=> 'content-region-1',
		'before_widget'	=> '<div class="container">',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h1>',
		'after_title'	=>	'</h1>'
	));
	
	register_sidebar(array(
		'name'		=> 'Content Region 2',
		'id'		=> 'content-region-2',
		'before_widget'	=> '<div class="container"><div class="row">',
		'after_widget'	=> '</div></div>',
		'before_title'	=>	'<h1>',
		'after_title'	=>	'</h1>'
	));
	
	register_sidebar(array(
		'name'		=> 'Content Region 2',
		'id'		=> 'content-region-2',
		'before_widget'	=> '<div class="container"><div class="row">',
		'after_widget'	=> '</div></div>',
		'before_title'	=>	'<h1>',
		'after_title'	=>	'</h1>'
	));
	
	register_sidebar(array(
		'name'		=> 'Footer 1',
		'id'		=> 'footer-1',
		'before_widget'	=> '<div class="col-lg-4 sidebar">',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h4>',
		'after_title'	=>	'</h4>'
	));

	register_sidebar(array(
		'name'		=> 'Footer 2',
		'id'		=> 'footer-2',
		'before_widget'	=> '<div class="col-lg-4 sidebar">',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h4>',
		'after_title'	=>	'</h4>'
	));

	register_sidebar(array(
		'name'		=> 'Footer 3',
		'id'		=> 'footer-3',
		'before_widget'	=> '<div class="col-lg-4 sidebar">',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h4>',
		'after_title'	=>	'</h4>'
	));
	
	register_sidebar(array(
		'name'		=> 'Sidebar',
		'id'		=> 'sidebar',
		'before_widget'	=> '<div class="panel panel-default sidebar-widget">',
        'after_widget'	=> '</div>',
        'before_title'	=> '<div class="panel-heading"><h3 class="panel-title">',
        'after_title'	=> '</h3></div><div class="panel-body">'
	));

}

add_action('widgets_init', 'mywordstrap_init_widgets');


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Customizer File
require get_template_directory() . '/inc/customizer.php';

?>