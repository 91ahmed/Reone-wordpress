<?php

# -- --------------------
# -- Remove Admin Toolbar
# -- --------------------
add_filter('show_admin_bar', '__return_false');


# -- ---------------------------
# -- Add Post Thumbnails Feature
# -- ---------------------------
add_theme_support('post-thumbnails');


# -- ---------------------------------
# -- Customize The excerpt Word Length
# -- ---------------------------------
function wp_my_custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'wp_my_custom_excerpt_length');


# -- --------------------------
# -- Customize The excerpt Dots
# -- --------------------------
function wp_my_custom_excerpt_dots($more)
{
	return '...';
}
add_filter('excerpt_more', 'wp_my_custom_excerpt_dots');


# -- -----------------------------------
# -- Remove Paragraph Element From Posts
# -- -----------------------------------
function wp_remove_paragraph($content)
{
	remove_filter('the_content', 'wpautop');
	return $content;
}
add_filter('the_content', 'wp_remove_paragraph', 0);


# -- -----------------
# -- Custom Posts Type
# -- -----------------

// Our Services
function wp_custom_post_type_services()
{
	$options = array(
		'public' => true,
		'labels' => array(
			'name' => 'Our Services',
			'add_new_item' => 'Add New Service',
			'add_new' => 'Add Service',
			'all_items' => 'All Service',
		),
		'menu_icon' => 'dashicons-megaphone',
		'menu_position' => 80,
		'supports' => array('title','editor'),
	);
	register_post_type('services',$options);
}
add_action('init', 'wp_custom_post_type_services');

// Our Team
function wp_custom_post_type_team()
{
	$options = array(
		'public' => true,
		'labels' => array(
			'name' => 'Our Team',
			'add_new_item' => 'Add New Team Memeber',
			'add_new' => 'Add Team Memeber',
			'all_items' => 'All Team',
		),
		'menu_icon' => 'dashicons-groups',
		'menu_position' => 80,
		'supports' => array('title','thumbnail'),
	);
	register_post_type('team',$options);
}
add_action('init', 'wp_custom_post_type_team');

?>