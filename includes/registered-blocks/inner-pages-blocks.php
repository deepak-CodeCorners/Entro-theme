<?php 

//register inner blocks
acf_register_block_type(array(
    'name'          =>'Inner Page About',
    'title'         =>__('Inner Page About'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/inner-pages/inner-page-about.php',
    'category'        =>'inner-pages-blocks',
    'icon'           =>'admin-comments',
    'keywords'        =>array('inner-page-about','quote'),
));

?>