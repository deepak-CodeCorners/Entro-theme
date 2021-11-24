<?php

function entro_theme_scripts(){
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'',"all");
	wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array(),'',"all");
	wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'',"all");
	wp_enqueue_style('mCustomScrollbar',get_template_directory_uri().'/css/jquery.mCustomScrollbar.min.css',array(),'',"all");
	wp_enqueue_style('link-1','https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css',array(),'',"all");
	wp_enqueue_style('link-2',"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css",array(),'',"all");

	wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js',array(),'1.0',true);
	wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js',array(),'1.0',true);
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array(),'1.0',true);
	wp_enqueue_script('jquery-3.0.0',get_template_directory_uri().'/js/jquery-3.0.0.min.js',array(),'1.0',true);
	wp_enqueue_script('plugin',get_template_directory_uri().'/js/plugin.js',array(),'1.0',true);
	wp_enqueue_script('mCustomScrollbar',get_template_directory_uri().'/js/jquery.mCustomScrollbar.concat.min.js',array(),'1.0',true);
	wp_enqueue_script('custom',get_template_directory_uri().'/js/custom.js',array(),'1.0',true);
	wp_enqueue_script('fancybox',"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js",array(),'1.0',true);	
}
add_action('wp_enqueue_scripts','entro_theme_scripts');

function register_nav_menus(array(
		'menu'=>'Primary-menu',
		));


?>