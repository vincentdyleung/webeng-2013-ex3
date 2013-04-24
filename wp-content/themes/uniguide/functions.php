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

function create_event_post_type() {
	$labels = array(
		'name' => 'Events',
		'singular_name' => 'Event',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Event',
		'menu_name' => 'Events',
		'all_items' => 'All Events',
		'edit_item' => 'Edit Event',
		'new_item' => 'New Event',
		'view_item' => 'View Event',
		'search_item' => 'Search for Events',
		'not_found' => 'No Events found',
		'not_found_in_trash' => 'No Events found in trash'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'register_meta_box_cb' => 'add_event_meta_box',
		'publicly_queryable' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'thumbnail',
			'title'
		),
	);

	register_post_type('events', $args);
	register_taxonomy('event_time', 'events',
		array(
			'hierarchical' => true,
			'label' => 'Past or Future',
			'public' => true
		)
	);
}

add_action('init', 'create_event_post_type');

function add_event_meta_box() {
	add_meta_box( 'event_meta_box', 'Event Details', 'show_event_meta_box', 'events', 'normal' );
}
function show_event_meta_box() {
	global $post;
	$custom = get_post_custom($post->ID);
	$name = $custom['event_name'][0];
	$start_time = $custom['event_start_time'][0];
	$end_time = $custom['event_end_time'][0]; 
	$location = $custom['event_location'][0];?>
	<div class="person">
		<p> 
			<label>Name<br> <input type="text" name="name" size="50" value="<?php echo $name; ?>"> </label>
		</p>
		<p> 
			<label>Start Time<br> <input type="text" name="start_time" size="50" value="<?php echo $start_time; ?>"> </label>
		</p>
		<p> 
			<label>End Time<br> <input type="text" name="end_time" size="50" value ="<?php echo $end_time; ?>"> </label>
		</p>
		<p> 
			<label>Location<br> <input type="text" name="location" size="50" value ="<?php echo $location; ?>"> </label>
		</p>
	</div>
<?php }

function event_save_meta( $post_id, $post ) {
// is the user allowed to edit the post or page?
	if( ! current_user_can( 'edit_post', $post->ID )){
		return $post->ID;
	}
	$event_meta['event_name'] = $_POST['name'];
	$event_meta['event_start_time'] = $_POST['start_time'];
	$event_meta['event_end_time'] = $_POST['end_time'];
	$event_meta['event_location'] = $_POST['location'];
	// add values as custom fields
	foreach( $event_meta as $key => $value ) {
		if( get_post_meta( $post->ID, $key, FALSE ) ) {
			// if the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else {
			// if the custom field doesn't have a value
			add_post_meta( $post->ID, $key, $value );
		}
		if( !$value ) {
			// delete if blank
			delete_post_meta( $post->ID, $key );
		}
	}
}
add_action( 'save_post', 'event_save_meta', 1, 2 );

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