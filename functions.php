<?php

function enqueue_custom_style() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() , array(), '1.1', 'all');
    // wp_enqueue_scripts("index", get_template_directory_uri() . "/js/index.js");
    
}

add_action('wp_enqueue_scripts', 'enqueue_custom_style');

 


function custom_theme_navigation_menus() {
   // introducing menu option
    register_nav_menus( 
        array(
            'main-menu' => __( 'Main Menu' ),
        )
    );
}

//          name     fuction name(should be exect)
add_action( 'init', 'custom_theme_navigation_menus' );


function enqueue_custom_scripts() {
    // Enqueue your custom JS file
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/index.js', array('jquery'), '1.0', true);
}



function themename_custom_header_setup() {
	$args = array(
		'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
		'default-text-color' => '000',
		'width'              => 3000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	);
add_theme_support( 'custom-header', $args );
}

// add action is hook to add fuctions

add_action( 'after_setup_theme', 'themename_custom_header_setup' );

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_action('widgets_init', 'firstwebsite_widgets_init');

function firstwebsite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-2',
	) );
    
}


?>