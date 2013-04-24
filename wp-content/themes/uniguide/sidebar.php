<?php wp_nav_menu(array(
	'theme_location' => 'primary',
	'container' => 'nav',
	'container_id' => 'left',
	'container_class' => 'column'
)); ?>

<section id="right" class="column">
	<header>
		<h3 id="right-title">Photo Tour</h3>
	</header>
	<div class="photo-group">
		<h3><?php echo of_get_option('group_1_name');?></h3>
		<div>
			<a href="#"><img src="<?php echo of_get_option('picture_1_1')?>"></a>
			<a href="#"><img src="<?php echo of_get_option('picture_1_2')?>"></a>
		</div>
		<div>							
			<a href="#"><img src="<?php echo of_get_option('picture_1_3')?>"></a>
			<a href="#"><img src="<?php echo of_get_option('picture_1_4')?>"></a>							
		</div>
	</div>
	<div class="photo-group">
		<h3><?php echo of_get_option('group_2_name');?></h3>
		<div>
			<a href="#"><img src="<?php echo of_get_option('picture_2_1')?>"></a>
			<a href="#"><img src="<?php echo of_get_option('picture_2_2')?>"></a>
		</div>
		<div>
			<a href="#"><img src="<?php echo of_get_option('picture_2_3')?>"></a>
			<a href="#"><img src="<?php echo of_get_option('picture_2_4')?>"></a>							
		</div>
	</div>
	<div id="stay-informed">
		<?php $image_path = get_template_directory_uri() . '/images/';?>
		<h2>Stay Informed:</h2>
		<img id="fbk-icon" src="<?php echo $image_path . 'fbk-icon.gif';?>">
		<a href="http://facebook.com/">Facebook</a>
		<img id="twt-icon" src="<?php echo $image_path . 'twt-icon.gif';?>">
		<a href="http://twitter.com/">Twitter</a>
	</div>
</section>