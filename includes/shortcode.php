<?php
//shortcode
function sindabad_display_gal($atts,$content='null'){
	$result=get_page_by_title($atts['title'],'OBJECT','pics');
	return do_shortcode($result->post_content);
}
add_shortcode('sindabadSC', 'sindabad_display_gal');