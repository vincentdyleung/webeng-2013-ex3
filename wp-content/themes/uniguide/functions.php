<?php
if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}
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

require_once(get_template_directory() . '/custom-header.php');
?>