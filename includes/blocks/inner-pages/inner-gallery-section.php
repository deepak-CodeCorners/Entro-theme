<?php 
$gallery_htext = get_field('gallery_htext');
$gallery_imgs = get_field('gallery_imgs');
$gallery_h2_text = get_field('gallery_h2_text');
$gallery_ptext = get_field('gallery_ptext');
$gallery_button = get_field('gallery_button');
$gallery_button_text = get_field('gallery_button_text');
?>
<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2><?php echo $gallery_htext; ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="gallery" class="Gallery">
  <div class="container"> 
    <div class="row display_boxflex">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <div class="row">

        <?php foreach($gallery_imgs as $gallery_img): ?>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
            <div class="Gallery_img">
              <figure><img src="<?php echo $gallery_img['gallery_image']; ?>" alt="#"/></figure>
            </div>
            <div class="hover_box">             
              <ul class="icon_hu">
                 <h3><?php echo $gallery_img['gallery_h3_text']; ?></h3>
                <li><a href="<?php echo $gallery_img['gallery_icon_btn1']['url']; ?>"><img src="<?php echo $gallery_img['gallery_icon1']; ?>" alt="#"/></a></li>
                 <li><a href="<?php echo $gallery_img['gallery_button2']['url']; ?>"><img src="<?php echo $gallery_img['gallery_icon2']; ?>" alt="#"/></a></li>
              </ul>
            </div>
        </div>
        <?php endforeach; ?>
        
      </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="Gallery_text">
          <div class="titlepage">
            <h2><?php echo $gallery_h2_text; ?></h2>
          </div>
          <p><?php echo $gallery_ptext; ?></p>
          <a href="<?php echo $gallery_button['url']; ?>"><?php echo $gallery_button_text; ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end Gallery --> 


