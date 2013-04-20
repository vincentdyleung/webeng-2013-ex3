<?php get_header(); ?>
<?php get_sidebar(); ?>
	<section id="main" class="column">
		<?php while( have_posts() ) : the_post(); ?>
			<h1 id="main-title"><a href="#"><?php the_title()?></a></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>