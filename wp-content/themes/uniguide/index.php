<!DOCTYPE html>
<?php get_header(); ?>
<?php get_sidebar(); ?>
			<section id="content">
				<section id="main" class="column">
					<h1 id="main-title"><a href="#">ETH Guide</a></h1>
					<section id="headline">
						<article id="headline-main">
							<img id="headline-img" src=<?php echo of_get_option('headline_image');?> alt=""/>
							<div id="headline-text">
								<h3><?php echo of_get_option('headline_title'); ?></h3>
								<p><?php echo of_get_option('headline_content'); ?><a href="#">Read more...</a></p>
							</div>
						</article>
						<div id="headline-footer">
							<a href="#"><?php printf("%s by %s", of_get_option('headline_date'), of_get_option('headline_author'));?></a>
							<span>000 views</span>
						</div>
					</section>
					<?php $count = 0; while(have_posts()) : the_post(); ?>
					<?php if ($count % 2 == 0) { ?>
					<section class="row-container">
						<section class="row">
					<?php } ?>
							<article class="news">
								<h3><?php the_title(); ?></h3>
								<a href="#"><?php the_post_thumbnail(); ?></a>
								<p><?php the_content(); ?></p>
							</article>
							<?php if ( $count % 2 == 1) { ?>
						</section>
					</section>
						<?php } $count++; ?>
					<?php endwhile ?>
				</section>
				<div>&nbsp;</div>
			</section>
<?php get_footer() ?>