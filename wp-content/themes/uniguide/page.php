<?php get_header(); ?>
<?php get_sidebar(); ?>
	<section id="main" class="column">
		<?php while( have_posts() ) : the_post(); ?>
			<h1 id="main-title"><a href="#"><?php the_title()?></a></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>
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