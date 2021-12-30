<?php 

//register inner blocks
acf_register_block_type(array(
    'name'          =>'Inner About Section',
    'title'         =>__('Inner About Section'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/inner-pages/inner-about-section.php',
    'category'        =>'inner-pages-blocks',
    'icon'           =>'admin-comments',
    'keywords'        =>array('inner-about-section','quote'),
));

acf_register_block_type(array(
    'name'          =>'Inner Concerts Section',
    'title'         =>__('Inner Concerts Section'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/inner-pages/inner-concerts-section.php',
    'category'        =>'inner-pages-blocks',
    'icon'           =>'admin-comments',
    'keywords'        =>array('inner-concerts-section','quote'),
));

acf_register_block_type(array(
    'name'          =>'Inner Gallery Section',
    'title'         =>__('Inner Gallery Section'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/inner-pages/inner-gallery-section.php',
    'category'        =>'inner-pages-blocks',
    'icon'           =>'admin-comments',
    'keywords'        =>array('inner-gallery-section','quote'),
));

acf_register_block_type(array(
    'name'          =>'Inner Contact Section',
    'title'         =>__('Inner Contact Section'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/inner-pages/inner-contact-section.php',
    'category'        =>'inner-pages-blocks',
    'icon'           =>'admin-comments',
    'keywords'       =>array('inner-contact-section','quote'),
));

?>

