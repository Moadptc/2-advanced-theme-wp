<?php

require 'class/bootstrap-navwalker.php';

// theme support
function adv_theme_support()
{
	// Featured Img Support
	add_theme_support('post-thumbnails');

	// Nav Menu
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer'  => __('Footer Menu')
	));

	//Post Format Support
	add_theme_support('post-formats' , array('aside','gallery','link'));
}

add_action('after_setup_theme', 'adv_theme_support');

// Widget Locations

function my_init_widgets($id)
{
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="card shadow widget border-0 mb-3"><div class="card-body">',
		'after_widget' => '</div></div>',
		'before_title' => '<h5 class="card-title mb-3 font-weight-bold">',
		'after_title' => '</h5>',
	));

	register_sidebar(array(
		'name' => 'Showcase',
		'id' => 'showcase',
		'before_widget' => '<div class="showcase border-0 mb-3">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="card-title mb-3 font-weight-bold">',
		'after_title' => '</h5>',
	));

	register_sidebar(array(
		'name' => 'Box 1',
		'id' => 'box1',
		'before_widget' => '<div class="card border-0 raduis-0 mb-3">',
		'after_widget' => '</div>',
		'before_title' => '<div class="card-header mb-3 text-center raduis-0
					text-white bg-primary"><h5 class="p-0 m-0 font-weight-bold">',
		'after_title' => '</h5></div>',
	));

	register_sidebar(array(
		'name' => 'Box 2',
		'id' => 'box2',
		'before_widget' => '<div class="card border-0 raduis-0 mb-3">',
		'after_widget' => '</div>',
		'before_title' => '<div class="card-header mb-3 text-center raduis-0
					text-white bg-primary"><h5 class="p-0 m-0 font-weight-bold">',
		'after_title' => '</h5></div>',
	));

	register_sidebar(array(
		'name' => 'Box 3',
		'id' => 'box3',
		'before_widget' => '<div class="card border-0 raduis-0 mb-3">',
		'after_widget' => '</div>',
		'before_title' => '<div class="card-header mb-3 text-center raduis-0
					text-white bg-primary"><h5 class="p-0 m-0 font-weight-bold">',
		'after_title' => '</h5></div>',
	));

}

add_action('widgets_init','my_init_widgets');



function adv_excerpt_length()
{
	return 25;
}

add_filter('excerpt_length','adv_excerpt_length');

// get child pages on index[0]
function get_top_parent()
{
	global $post;
	if($post -> post_parent)
	{
		$ancestors = get_post_ancestors($post->ID);
		return $ancestors[0];
	}

	return $post->ID;
}


function page_is_parent()
{
	global $post;

	$pages = get_pages('child_of='.$post->ID);
	return count($pages);
}
