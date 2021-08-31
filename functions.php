<?php 

 // menu register  
function menuRegister(){
	if (function_exists('register_nav_menu')) {
		register_nav_menu('header_menu', __('Header Menu','itsoft'));
	}
} 

add_action('init', 'menuRegister');


// add post feature image 

add_theme_support('post-thumbnails', array('post', 'page'));
set_post_thumbnail_size(200, 200, true);
add_image_size('postImage', 484, 307, true);
add_image_size('singlePostImage', 484, 400, true);


add_filter( 'something', 'entry_files_data' );