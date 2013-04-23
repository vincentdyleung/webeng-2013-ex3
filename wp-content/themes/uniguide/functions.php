<?php
require_once(get_template_directory().'/theme-options.php');
function my_page_menu_args($args) {
	$args['show_home'] = true;
	return $args;
}
add_filter('wp_page_menu_args', 'my_page_menu_args');

function uniguide_setup() {
	add_theme_support('custom-background', array(
		'default-color' => 'd1d3d2')
	);
}

add_action('after_setup_theme', 'uniguide_setup');

?>