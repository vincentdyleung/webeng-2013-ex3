<!DOCTYPE html>
<?php get_header(); ?>
<?php get_sidebar(); ?>
			<section id="content">
				<section id="main" class="column">
					<h1 id="main-title"><a href="#">ETH Guide</a></h1>
					<section id="headline">
						<article id="headline-main">
							<img id="headline-img" src="http://webeng.vforvincent.info/ex2/images/teaser-article.jpg" alt=""/>
							<div id="headline-text">
								<h3><?php $options = get_option('uniguide_theme_options'); echo $options['headline_title']?></h3>
								<p><?php echo $options['headline']?><a href="#">Read more...</a></p>
							</div>
						</article>
						<div id="headline-footer">
							<a href="#">Sept 21  by David</a>
							<span>000 views</span>
						</div>
					</section>
					<?php $count = 0; ?>
					<section class="row-container">
						<section class="row">
						<?php while(have_posts()) : the_post(); ?>
							<article class="news">
								<h3><?php the_title(); ?></h3>
								<a href="#"><?php the_post_thumbnail(); ?></a>
								<p><?php the_content(); ?></p>
							</article>
							<?php if ($count % 2 == 1) {
								?>
						</section>
					</section>
					<section class="row-container">
						<section class="row">
							<?php } $count++; ?>
						<?php endwhile ?>
					</section>
				</section>
				<div>&nbsp;</div>
			</section>
		</section>
<?php get_footer() ?>