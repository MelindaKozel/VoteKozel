<?php

function loadEmUp() {
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Fjalla+One|Francois+One|Nunito:400,600,800');
	wp_enqueue_script( '$mk-accordian', get_template_directory_uri() . '/accordian.js' , array('jquery'), '' , true );
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' ); 

}

add_action('wp_enqueue_scripts', 'loadEmUp');

function load_menu() {
	register_nav_menu( 'primary-menu' , __('Primary Menu'));

}
add_action( 'init', 'load_menu');





// Register Custom Post Type
function mk_register_cpt() {

	$labels = array(
		'name'                  => __( 'Events' ),
		'singular_name'         => __( 'Event' ),
		'menu_name'             => __( 'Events' ),
		'name_admin_bar'        => __( 'Events' ),
		'all_items'             => __( 'All Events' ),
		'add_new_item'          => __( 'Add New Event' ),
		'add_new'               => __( 'Create New Event' ),
		'new_item'              => __( 'New Event'),
		'edit_item'             => __( 'Edit Event' ),
		'update_item'           => __( 'Update Event' ),
		'view_item'             => __( 'View Event' ),
		'view_items'            => __( 'View Events'),
		'search_items'          => __( 'Search Events' ),
	);
	$args = array(
		'labels'                => $labels,
		'supports'              => array( 'title', 'date' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'mk_register_cpt', 0 );




?>