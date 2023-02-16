<?php
function success_stories_cpt_creation() {
	register_post_type( 'success_stories',
		array(
				'labels' => array(
				'name' => __( 'Success Stories' ),
				'singular_name' => __( 'Success Story' ),
				'add_new' => _x('Add New', 'Success Story'),
				'add_new_item' => __('Add New Success Story'),
				'edit_item' => __('Edit Success Story'),
				'new_item' => __('New Success Story'),
				'view_item' => __('View Success Story'),
				'search_items' => __('Search Success Stories'),
				'not_found' =>  __('No Success Stories found'),
				'not_found_in_trash' => __('No Success Stories found in Trash'),
			),
		'public' => true,
        'menu_position' => 4,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'page-attributes'),
		'has_archive' => true,
        'rewrite' => array('slug' => 'success-stories'),
		'menu_icon' => 'dashicons-heart',
			'show_in_rest' => true, 
		)
	);
}
add_action( 'init', 'success_stories_cpt_creation' );
?>