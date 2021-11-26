<?php 

$ipa_text=get_field('ipa_text');

$ipa_button=get_field('ipa_button');

$ipa_image=get_field('ipa_image');

?>

<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>About</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row display_boxflex">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About Us</h2>
          <p><?php echo $ipa_text; ?></p>
          <a href="<?php //echo $ipa_button['url']; ?>">Read More</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure>
            <?php if(!empty($ipa_image)){?>
            <img src="<?php echo $ipa_image;?>"/>
            <?php
            }?>
          </figure>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- end abouts -->
