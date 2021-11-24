<?php

//register home blocks
acf_register_block_type(array(
		'name'			=>'Home About Section',
		'title'			=>__('Home About Section'),
		'description'	=>__(''),
		'render_template'=>'includes/blocks/home/home-about-section.php',
		'category'		=>'home-blocks',
		'icon'			=>'admin-comments',
		'keywords'		=>array('home-about-section','quote'),
		));
	
acf_register_block_type(array(
		'name'			=>'Home Concerts Section',
		'title'			=>__('Home Concerts Section'),
		'description'	=>__(''),
		'render_template'=>'includes/blocks/home/home-concerts-section.php',
		'category'		=>'home-blocks',
		'icon'			=>'admin-comments',
		'keywords'		=>array('home-concerts-section','quote'),
		));

acf_register_block_type(array(
		'name'			=>'Home Gallery Section',
		'title'			=>__('Home Gallery Section'),
		'description'	=>__(''),
		'render_template'=>'includes/blocks/home/home-gallery-section.php',
		'category'		=>'home-blocks',
		'icon'			=>'admin-comments',
		'keywords'		=>array('home-gallery-section','quote'),
		));
?>