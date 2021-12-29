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

function custom_new_menu(){
	register_nav_menu('primary-menu',_('Primary Menu'));
}
add_action('init','custom_new_menu');


// creating custom gutenberg blocks
function custom_blocks($categories,$post){
	return array_merge(
		$categories,
		array(
			array(
				'slug' =>'home-blocks',
				'title'=>__('Home Blocks','home-blocks'),
			),
			array(
				'slug' =>'inner-pages-blocks',
				'title'=>__('Inner Pages Blocks','inner-pages-blocks'),
			),
		)
	);
}
add_filter('block_categories','custom_blocks',10,2);

function register_acf_block_types(){
	include('includes/registered-blocks/home-blocks.php');
	include('includes/registered-blocks/inner-pages-blocks.php');
}

//checking if function exits and hook into setup
if(function_exists('acf_register_block_type')){
	add_action('acf/init','register_acf_block_types');
}


//Theme options with ACF Plugin
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => true,
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header Setting',
        'parent_slug'   => 'theme-options',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer Settings',
        'parent_slug'   => 'theme-options',
    ));

}


function my_body_classes( $classes ) {
 
	if(is_front_page()){
    	$classes =array("home-page", "main-layout");
	}else{
		$classes =array("inner-pages", "main-layout");
	}
	return $classes;
}
add_filter('body_class','my_body_classes');

?>