<?php get_header(); ?>
<?php get_sidebar(); ?>
	<section id="main" class="column">
		<?php while( have_posts() ) : the_post(); ?>
			<h1 id="main-title"><a href="#"><?php the_title()?></a></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<div id="download"><a href="#">Download Press Release</a></div>
		<section>
			<ul id="news-group">
				<li class="news">
					<h3>Subordinate animals as guinea pigs.</h3>
					<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-1.jpg" alt=""/></a>
					<p>Subordinate animals must face higher risks than dominant ones Dominant meerkat females yield to their subaltern group members when ...</p>
					<a href="#">more ...</a>
				</li>
				<li class="news">
					<h3>How graphe behave on small scale.</h3>
					<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-2.jpg" alt=""/></a>
					<p>ETH Zurich is involved in the “Graphene Flagship” project through Klaus Ensslin, a professor of experimental physics. ETH Life spoke ...</p>
					<a href="#">more ...</a>
				</li>
				<li class="news">
					<h3>Research success by the dozen.</h3>
					<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-3.jpg" alt=""/></a>
					<p>Thanks to twelve outstanding professors, over 33 million Swiss francs from the European Research Council (ERC) will flow into ETH ...</p>
					<a href="#">more ...</a>
					</li>								
			</ul>
		</section>
	</section>
<?php get_footer(); ?>