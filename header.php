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

  <?php wp_head() ;?>
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="<?php echo get_template_directory_uri();?>/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
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
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Home</a> </li>
                  
                      <li> <a href="<?php echo get_template_directory_uri();?>/about.html">About</a> </li>
                      <li> <a href="<?php echo get_template_directory_uri();?>/concerts.html">Concerts </a> </li>
                      <li> <a href="<?php echo get_template_directory_uri();?>/gallery.html">Gallery</a> </li>
                      <li> <a href="<?php echo get_template_directory_uri();?>/contact.html">Contact</a> </li>
      
                        <li > <a   href="#contact">login</a> </li>
                      <li  > <a  class="last_manu" href="#"><img src="<?php echo get_template_directory_uri();?>/images/search_icon.png" alt="#" /></a> </li>
                      
                     </ul>
                   </nav>
                
               </div> 
             </div>
           </div>
         </div>
       </div>
     </div>
  <!-- end header inner -->
<!-- end header -->