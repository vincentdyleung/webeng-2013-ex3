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

	add_theme_support('post-thumbnails');

	add_theme_support('menus');

	register_nav_menu( 'primary', __('Primary Menu', 'uniguide'));
	register_nav_menu( 'pages' , __('Pages', 'uniguide'));
}

add_action('after_setup_theme', 'uniguide_setup');

function uniguide_header_image_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => '444',
		'default-image'          => '',

		// Set height and width, with a maximum value for the width.
		'height'                 => 250,
		'width'                  => 960,
		'max-width'              => 2000,

		// Support flexible height and width.
		'flex-height'            => true,
		'flex-width'             => true,

		// Random image rotation off by default.
		'random-default'         => false,

		// Callbacks for styling the header and the admin preview.
		// 'wp-head-callback'       => 'twentytwelve_header_style',
		// 'admin-head-callback'    => 'twentytwelve_admin_header_style',
		// 'admin-preview-callback' => 'twentytwelve_admin_header_image',
	);

	add_theme_support('custom-header', $args);
}

add_action('after_setup_theme', 'uniguide_header_image_setup');

?>