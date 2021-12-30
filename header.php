<?php $home_banner_image = get_field('home_banner_image'); 
print_r($home_banner_image);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Entro</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php if( is_front_page() || is_home() ):?>
    <style>
      .header-top {
        background: url("<?php echo get_stylesheet_directory_uri();?>/images/banner2.jpg");
   
        background-size: 100% 100% ;
      }
      </style>
  <?php endif;?>

  <?php wp_head() ;?>
</head>
<!-- body -->

<body>
  <!-- loader  -->
  <div class="loader_bg d-none">
    <div class="loader"><img src="<?php echo get_template_directory_uri();?>/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <!-- style="background: url('<?php //echo $home_banner_image; ?>');" -->
    <div class="header-top">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.php"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
              
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <?php
                      wp_nav_menu(
                        array(
                          'menu' => 'primary-menu',
                          'container'=>'div',
                          'menu_class'=>'menu-area-main',
                        )
                      );
                    ?>
                   </nav>
               </div> 
             </div>
           </div>
         </div>
       </div>
     </div>
  <!-- end header inner -->
<!-- end header -->

