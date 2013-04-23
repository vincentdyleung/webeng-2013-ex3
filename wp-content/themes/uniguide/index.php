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
					<section class="row-container">
						<section class="row">
							<article class="news">
								<h3>Subordinate animals as guinea pigs.</h3>
								<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-1.jpg" alt=""/></a>
								<p>Subordinate animals must face higher risks than dominant ones Dominant meerkat females yield to their subaltern group members when faced with a dangerous obstacle: as a group of these animals reaches a road.</p>
							</article>
							<article class="news">
								<h3>EU launches two flagships.</h3>
								<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-5.jpg" alt=""/></a>
								<p>The EU is launching two large-scale research projects for the next ten years in the form of “Graphene” and the “Human Brain Project”. “FuturICT” and “Guardian Angels”.</p>
							</article>
						</section>
					</section>
					<section class="row-container">
						<section class="row">
							<article class="news">
								<h3>Research success by the dozen.</h3>
								<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-3.jpg" alt=""/></a>
								<p>Thanks to twelve outstanding professors, over 33 million Swiss francs from the European Research Council (ERC) will flow into ETH Zurich.</p>
							</article>
							<article class="news">
								<h3>Research success by the dozen - 2.</h3>
								<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-4.jpg" alt=""/></a>
								<p>The EU is launching two large-scale research projects for the next ten years in the form of “Graphene” and the “Human Brain Project”.</p>
							</article>
						</section>
					</section>
					<section class="row-container">
						<section class="row">
							<article class="news">
								<h3>How graphene behaves on a small scale.</h3>
								<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-2.jpg" alt=""/></a>
								<p>ETH Zurich is involved in the “Graphene Flagship” project through Klaus Ensslin, a professor of experimental physics. ETH Life spoke to him about the advantages of graphene and his personal vision.</p>
							</article>
							<article class="news">
								<h3>Competitively displaced native species do suffer extinctions.</h3>
								<a href="#"><img src="http://webeng.vforvincent.info/ex2/images/article-6.jpg" alt=""/></a>
								<p>ETH-Ecology-Professor Jonathan Levine showed that invasive species can indeed force the extinction of their native competitors over a long period of time.</p>
							</article>
						</section>
						<div id="load-more"><a href="#">Load more...</a></div>
					</section>
				</section>
				<div>&nbsp;</div>
			</div>
		</section>
<?php get_footer() ?>