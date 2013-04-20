	<div id="sidebar-lt">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar')
        	|| !dynamic_sidebar('Left Sidebar') ) : ?>
		<?php endif; ?>
	</ul>
	</div>

	<div id="sidebar-rt">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar')
        	|| !dynamic_sidebar('Right Sidebar') ) : ?>
		<?php endif; ?>
	</ul>
	</div>