<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name'=>'Left Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name'=>'Right Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ));

?>
