<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'uniguide_options', 'uniguide_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'uniguide' ), __( 'Theme Options', 'uniguide' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'0' => array(
		'value' =>	'0',
		'label' => __( 'Zero', 'uniguide' )
	),
	'1' => array(
		'value' =>	'1',
		'label' => __( 'One', 'uniguide' )
	),
	'2' => array(
		'value' => '2',
		'label' => __( 'Two', 'uniguide' )
	),
	'3' => array(
		'value' => '3',
		'label' => __( 'Three', 'uniguide' )
	),
	'4' => array(
		'value' => '4',
		'label' => __( 'Four', 'uniguide' )
	),
	'5' => array(
		'value' => '3',
		'label' => __( 'Five', 'uniguide' )
	)
);

$radio_options = array(
	'yes' => array(
		'value' => 'yes',
		'label' => __( 'Yes', 'uniguide' )
	),
	'no' => array(
		'value' => 'no',
		'label' => __( 'No', 'uniguide' )
	),
	'maybe' => array(
		'value' => 'maybe',
		'label' => __( 'Maybe', 'uniguide' )
	)
);

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Theme Options', 'uniguide' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'uniguide' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'uniguide_options' ); ?>
			<?php $options = get_option( 'uniguide_theme_options' ); ?>

			<table class="form-table">

				<?php
				/**
				 * A sample text input option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Headline Title', 'uniguide' ); ?></th>
					<td>
						<input id="uniguide_theme_options[headline_title]" class="regular-text" type="text" name="uniguide_theme_options[headline_title]" value="<?php esc_attr_e( $options['headline_title'] ); ?>" />
						<label class="description" for="uniguide_theme_options[headline_title]"><?php _e( 'Title of the headline news', 'uniguide' ); ?></label>
					</td>
				</tr>

				<?php
				/**
				 * A sample textarea option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Headline', 'uniguide' ); ?></th>
					<td>
						<textarea id="uniguide_theme_options[headline]" class="large-text" cols="50" rows="10" name="uniguide_theme_options[headline]"><?php echo esc_textarea( $options['headline'] ); ?></textarea>
						<label class="description" for="uniguide_theme_options[headline]"><?php _e( 'Content of the headline news', 'uniguide' ); ?></label>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'uniguide' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {

	// Say our text option must be safe text with no HTML tags
	$input['headline_title'] = wp_filter_nohtml_kses( $input['headline_title'] );

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['headline'] = wp_filter_post_kses( $input['headline'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/