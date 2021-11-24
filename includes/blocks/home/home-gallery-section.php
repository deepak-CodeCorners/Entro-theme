<?php  

$hgs_images=get_field('hgs_images');
$hgs_text=get_field('hgs_text');
$hgs_button=get_field('hgs_button');

?>
<!-- Gallery -->
<div id="gallery" class="Gallery">
  <div class="container"> 
    <div class="row display_boxflex">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <div class="row">

        <?php foreach($hgs_images as $hgs_image):
        ?>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
            <div class="Gallery_img">
              <figure><img src="<?php echo $hgs_image['gallery_image'];?>" alt="#"/></figure>
            </div>
            <div class="hover_box">
             
              <ul class="icon_hu">
                 <h3>Music night</h3>
                <li><a href="#"><img src="<?php echo $hgs_image['icon1_image'];?>" alt="#"/></a></li>
                 <li><a href="#"><img src="<?php echo $hgs_image['icon2_image'];?>" alt="#"/></a></li>
              </ul>
            </div>
          </div>
        <?php endforeach;  ?>

        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="Gallery_text">
          <div class="titlepage">
            <h2>Gallery</h2>
          </div>
          <p><?php echo $hgs_text; ?></p>
          <a href="<?php echo $hgs_button['url']; ?>">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end Gallery --> 

