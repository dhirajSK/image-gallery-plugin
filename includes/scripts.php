<?php
//admin panel custom post
function sindabad_register_post_type(){
	$singular='Gallery';
	$labels= array(
				'name' 					=> 'sindabad '.$singular,
				'singular_name' 		=> 'sindabad '.$singular, 
				'add_new' 				=> 'Add New '.$singular,
				'add_new_item' 			=> 'Add New '.$singular,
				'edit_item' 			=> 'edit '.$singular,
				'new_item' 				=> 'New '.$singular,
				'view_item' 			=> 'View '.$singular,
				'search_items' 			=> 'search '.$singular,
				'not_found' 			=> 'no gallery found',
				'not_found_in_trash' 	=> 'no gallery found in trash',
				'parent_item_colon' 	=> 'Parent '.$singular,
				'all_items' 			=> 'All Galleries',
				'menu_name' 			=> 'sindabad '.$singular);

	$args = array(
				'labels'			 => $labels,
				'menu_icon'				=> 'dashicons-format-gallery',
				'menu_position'		 =>	6,
				'supports' 			 => array('title','editor'),	
				'show_in' 			 => true,
				'show_in_nav_menus'  => false,
				'public'			 => true,
				);

	register_post_type('pics',$args);
}
add_action('init','sindabad_register_post_type');