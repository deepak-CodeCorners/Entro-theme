<?php 

$has_text=get_field('has_text');
$has_button=get_field('has_button');
$has_image=get_field('has_image');

?>
<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row display_boxflex">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <?php echo $has_text; ?>
          <a href="<?php echo $has_button['url'] ?>">Read More</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure>
          	<?php
          	if(!empty($has_image)){
          	?>
          	<img src="<?php echo $has_image;?>" alt="#" />
          	<?php
          	}
          	?>
          </figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->
