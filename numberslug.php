<?php
/*
Plugin Name: Number Slug
Plugin URI: http://www.wallandbinkley.com/numberslug
Description: Create slugs using first word of title, if it's a number
Version: 0.1
Author: Peter Binkley
Author URI: http://www.wallandbinkley.com/quaedam
License: GPL2
*/
// based on http://stackoverflow.com/questions/4518527/customize-the-auto-generation-of-post-slug-in-wordpress#answer-4518634
function number_slug($data) {
  	global $post_ID;

	if (empty($data['post_name'])) {
		$titlewords = explode(" ", $data['post_title']);
		if (is_numeric($titlewords[0]))
			$data['post_name'] = $titlewords[0];
		else
		   $data['post_name'] = sanitize_title($data['post_title'], $post_ID);
	}

	return $data;
}

add_filter('wp_insert_post_data', 'number_slug', 10);
?>