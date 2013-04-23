<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php echo bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" />
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
		<header>
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'pages', 'container_class' => 'pages' ) );?>
			</nav>
		</header>
	<section id="container">
					