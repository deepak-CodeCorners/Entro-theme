<?php
$about_htext1=get_field('about_htext1');
//print_r($about_htext1);
$about_htext2=get_field('about_htext2');
$about_ptext=get_field('about_ptext');
$about_link=get_field('about_link');
$about_link_text=get_field('about_link_text');
$about_image=get_field('about_image');

?>

<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2><?php echo $about_htext1;?></h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- about -->
<div id="about" class="about">
  <div class="container">
    <div class="row display_boxflex">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2><?php echo $about_htext2 ;?></h2>
          <p><?php echo $about_ptext ;?></p>
          <a href="<?php echo $about_link['url']; ?>"><?php echo $about_link_text; ?></a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure>
            <?php if(!empty($about_image)):?>
              <img src="<?php echo $about_image;?>" alt="#" /></figure>
            <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->