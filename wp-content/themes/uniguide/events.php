<?php 
/* Template Name: Events */
get_header();
get_sidebar();
?>
	<section id="main" class="column">
		<?php $query = new WP_Query('post_type=events&event_time=past-events');
		if ($query->have_posts()) { ?>
		<h1>Past Events</h1>
		<?php while( $query->have_posts() ) : $query->the_post(); ?>
		 	<section class="event">
		 		<?php $custom_fields = get_post_custom(); 
		 			foreach ($custom_fields as $key => $value) {
		 				if (!isset($value[0])) continue;
		 				if (in_array($key, array("_edit_lock", "_edit_last"))) continue;
		 				?>
		 				<p><?php printf('%s: %s', $key, $value[0]);?></p>
		 			<?php
		 			} ?>
		 	</section>
		<?php endwhile; 
		} else {
			echo '<h1>No Past Events Found</h1>';
		}?>
		<?php $query = new WP_Query('post_type=events&event_time=future-events');
		if ($query->have_posts()) { ?>
		<h1>Future Events</h1>
		<?php while( $query->have_posts() ) : $query->the_post(); ?>
		 	<section class="event">
		 		<?php $custom_fields = get_post_custom(); 
		 			foreach ($custom_fields as $key => $value) {
		 				if (!isset($value[0])) continue;
		 				if (in_array($key, array("_edit_lock", "_edit_last"))) continue;
		 				?>
		 				<p><?php printf('%s: %s', $key, $value[0]);?></p>
		 			<?php
		 			} ?>
		 	</section>
		<?php endwhile; 
		} else {
			echo '<h1>No Past Events Found</h1>';
		}?>
		<section>
			<ul id="news-group">
				<?php $query = new WP_Query('posts_per_page=3');
					while ($query->have_posts()) : $query->the_post()?>
				<li class="news">
					<h3><?php the_title(); ?></h3>
					<a href="#"><?php the_post_thumbnail(); ?></a>
					<p><?php the_content(); ?></p>
					<a href="#">more ...</a>
				</li>
				<?php endwhile; ?>								
			</ul>
		</section>
	</section>
<?php get_footer(); ?>