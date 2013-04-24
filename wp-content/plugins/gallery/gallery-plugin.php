<?php
/*
Plugin Name: Gallery plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Gallery adapted from excercise 2
Version: 1.0
Author: ETH
Author URI: http://webeng.vforvincent.info/ex3
*/



function add_css() {
 
    // change this path to load your own custom stylesheet
	$css_path = plugins_url('css/gallery.css', __FILE__);
    
    // registers your stylesheet
    wp_register_style( 'gallery', $css_path );

    $css_path = plugins_url('css/jquery-ui-1.10.2.custom.css', __FILE__);
    wp_register_style('jquery-ui', $css_path);
 
    // loads your stylesheet
    wp_enqueue_style( 'gallery' );
    wp_enqueue_style('jquery-ui');
}

// Only add the stylesheet if we are NOT on the admin screen
add_action( 'wp_enqueue_scripts', 'add_css' );


function enqueue_js() {
	// $js_path = plugins_url('js/jquery.multitouch-draggable.js', __FILE__);
	// wp_register_script('jqmultitouch-draggable', $js_path);

	// $js_path = plugins_url('js/jquery.multitouch-gestures.js', __FILE__);
	// wp_register_script('jqmultitouch-gestures', $js_path);

	// $js_path = plugins_url('js/jquery.multitouch-orientable.js', __FILE__);
	// wp_register_script('jqmultitouch-orientable', $js_path);

	// $js_path = plugins_url('js/jquery.multitouch-resizable.js', __FILE__);
	// wp_register_script('jqmultitouch-resizable', $js_path);

	// $js_path = plugins_url('js/jquery.multitouch-rotatable.js', __FILE__);
	// wp_register_script('jqmultitouch-rotatable', $js_path);

	// $js_path = plugins_url('js/jquery.multitouch-scalable.js', __FILE__);
	// wp_register_script('jqmultitouch-scalable', $js_path);

	// $js_path = plugins_url('js/jquery.multitouch.js', __FILE__);
	// wp_register_script('jqmultitouch', array(
	// 	'jqmultitouch-scalable',
	// 	'jqmultitouch-draggable',
	// 	'jqmultitouch-rotatable',
	// 	'jqmultitouch-gestures',
	// 	'jqmultitouch-resizable',
	// 	'jqmultitouch-orientable'), $js_path);

	$js_path = plugins_url('js/gallery.js', __FILE__);
	wp_register_script('gallery', $js_path);

	$js_path = plugins_url('js/jquery-ui-1.10.2.custom.js', __FILE__);
	wp_register_script('jquery-ui', $js_path);
	// wp_enqueue_script('jqmultitouch-draggable');
	// wp_enqueue_script('jqmultitouch-gestures');
	// wp_enqueue_script('jqmultitouch-resizable');
	// wp_enqueue_script('jqmultitouch-rotatable');
	// wp_enqueue_script('jqmultitouch-scalable');
	// wp_enqueue_script('jqmultitouch-orientable');
	// wp_enqueue_script('jqmultitouch');
	wp_enqueue_script('gallery');
	wp_enqueue_script('jquery-ui');
   
}

add_action("wp_enqueue_scripts", "enqueue_js", 11);

function add_gallery(){

	global $post;

	$args = array(
		'post_parent'    => $post->ID,			// For the current post
		'post_type'      => 'attachment',		// Get all post attachments
		'post_mime_type' => 'image',			// Only grab images
		'order'			 => 'ASC',				// List in ascending order
		'orderby'        => 'menu_order',		// List them in their menu order
		'numberposts'    => -1, 				// Show all attachments
		'post_status'    => null,				// For any post status
	);

	// Retrieve the items that match our query; in this case, images attached to the current post.
	$attachments = get_posts($args);
	
		// If any images are attached to the current post, do the following:
		if ($attachments) {	

			// Initialize a counter so we can keep track of which image we are on.
			$count = 0;
			
			// Now we loop through all of the images that we found 
			foreach ($attachments as $attachment) { 
				 		
				// Below here are the main containers and first large image; stuff we will only want to output one time.
				if($count == 0) { ?>
				
					<section id="imgArea">
						
								<?php $default_attr = array(
										'id' 	=> 'center-img',
										'class' => 'center',
										'title' => trim(strip_tags( $attachment->post_title )),
									);
								?>
								<?php echo wp_get_attachment_image($attachment->ID, 'full', false, $default_attr); ?>

						<ul id="img-list">
				
				<?php } ?> 
						<li id="thumb-<?php echo $count+1; ?>">

							<?php if ($count==0) {

									// If this is the first thumbnail, add a class of 'selected' to it so it will be highlighted
									$thumb_attr = array(
										'class' => "active",
									);

								} ?>

							<?php echo wp_get_attachment_image($attachment->ID, 'full', false, $thumb_attr); ?>
			
						</li>
				
				<?php $count = $count + 1; } ?>
						

					</ul>
					<div id="slide-control">
							<span class="ui-icon ui-icon-carat-1-e" id="forward-button"></span>
							<span class="ui-icon ui-icon-pause" id="play-pause-button"></span>
							<span class="ui-icon ui-icon-carat-1-w" id="back-button"></span>
					</div>
				</section>
				
	<?php }

}     

add_shortcode('gallery', 'add_gallery');

?>