<?php


	// Widgets
  if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => __('Sidebar'),
		
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

	));
	
// Comments: newest to oldest

function reverse_comments($comments,$id) {
$comments = array_reverse($comments);
return $comments;
}
add_filter('comments_array','reverse_comments',10,2);
			
}

?>