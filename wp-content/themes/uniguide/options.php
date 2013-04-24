<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	$options = array();

	$options[] = array(
		'name' => __('Headline Settings', 'uniguide'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Title', 'uniguide'),
		'desc' => __('Title of the headline', 'uniguide'),
		'id' => 'headline_title',
		'std' => of_get_option('headline_title'),
		'type' => 'text');

	$options[] = array(
		'name' => __('Author', 'uniguide'),
		'desc' => __('Author of the headline', 'uniguide'),
		'id' => 'headline_author',
		'std' => of_get_option('headline_author'),
		'type' => 'text');

	$options[] = array(
		'name' => __('Date', 'uniguide'),
		'desc' => __('Date of the headline', 'uniguide'),
		'id' => 'headline_date',
		'std' => of_get_option('headline_date'),
		'type' => 'text');

	$options[] = array(
		'name' => __('Content', 'uniguide'),
		'desc' => __('Content of the headline', 'uniguide'),
		'id' => 'headline_content',
		'std' => of_get_option('headline_content'),
		'type' => 'textarea');
	
	$options[] = array(
		'name' => __('Image', 'uniguide'),
		'desc' => __('Image of the headline', 'uniguide'),
		'id' => 'headline_image',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Photo Tour Sidebar Widget Settings', 'uniguide'),
		'type' => 'heading');

	$options[] = array (
		'name' => __('Photo Tour Sidebar Widget', 'uniguide'),
		'desc' => 'Choose four pictures for each of the two groups to be displayed on the right sidebar',
		'type' => 'info');

	$options[] = array(
		'name' => __('Group 1', 'uniguide'),
		'desc' => __('Name of the first photo group', 'uniguide'),
		'id' => 'group_1_name',
		'std' => of_get_option('group_1_name'),
		'type' => 'text');

	$options[] = array(
		'name' => __('Picture 1 Group 1', 'uniguide'),
		'desc' => __('The first picture of the first group', 'uniguide'),
		'id' => 'picture_1_1',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Picture 2 Group 1', 'uniguide'),
		'desc' => __('The second picture of the first group', 'uniguide'),
		'id' => 'picture_1_2',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Picture 3 Group 1', 'uniguide'),
		'desc' => __('The third picture of the first group', 'uniguide'),
		'id' => 'picture_1_3',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Picture 4 Group 1', 'uniguide'),
		'desc' => __('The fourth picture of the first group', 'uniguide'),
		'id' => 'picture_1_4',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Group 2', 'uniguide'),
		'desc' => __('Name of the second photo group', 'uniguide'),
		'id' => 'group_2_name',
		'std' => of_get_option('group_2_name'),
		'type' => 'text');

	$options[] = array(
		'name' => __('Picture 1 Group 2', 'uniguide'),
		'desc' => __('The first picture of the second group', 'uniguide'),
		'id' => 'picture_2_1',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Picture 2 Group 2', 'uniguide'),
		'desc' => __('The second picture of the second group', 'uniguide'),
		'id' => 'picture_2_2',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Picture 3 Group 2', 'uniguide'),
		'desc' => __('The third picture of the second group', 'uniguide'),
		'id' => 'picture_2_3',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Picture 4 Group 2', 'uniguide'),
		'desc' => __('The fourth picture of the second group', 'uniguide'),
		'id' => 'picture_2_4',
		'type' => 'upload');


	return $options;
}