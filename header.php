<?php  
$hss_carousel= get_field('hss_carousel', 9);
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

  <?php wp_head() ;?>
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg d-none">
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
<?php if(!empty($hss_carousel)): ?>
    <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

          <?php foreach($hss_carousel as $key=>$carousel):?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php echo $key==0 ? 'active': '';?>"></li>
          <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li> -->
          <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
        <?php foreach($hss_carousel as $key =>$carousel):?>
          <div class="carousel-item <?php echo $key==0 ? 'active':'';?>">

            <div class="container">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-bg">
                      <span>The Best</span>
                      <h1>MUSIC BAND EVER</h1>
                      <p><?php echo $carousel['carousel_text']; ?></p>
                      
                      <a href="<?php echo $carousel['carousel_button1'];?>">Music & Entertainment</a> <a href="<?php echo $carousel['carousel_button2'];  ?>">Buy Tickets </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
  
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
     
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      
    </a>
</div>
</div>
</section>
<?php endif; ?>
</div>
</header>
