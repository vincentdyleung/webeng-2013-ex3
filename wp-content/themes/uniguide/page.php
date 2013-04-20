<?php get_header(); ?>
<?php get_sidebar(); ?>
	<section id="main" class="column">
		<?php while( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>