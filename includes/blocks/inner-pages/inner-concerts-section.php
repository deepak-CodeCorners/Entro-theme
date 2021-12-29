<?php 
$concerts_htext1 = get_field('concerts_htext1');
$concerts_htext2 = get_field('concerts_htext2');
$concerts_ptext = get_field('concerts_ptext');
$concerts_buton = get_field('concerts_buton');
$concerts_btn_text = get_field('concerts_btn_text');
$concerts_image = get_field('concerts_image');
?>

<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2><?php echo $concerts_htext1; ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- upcoming -->
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
          <div class="titlepage">
            <h2><?php echo $concerts_htext2; ?></h2>
          </div>
          <p><?php echo $concerts_ptext; ?></p>
          <a href="<?php echo $concerts_buton['url']; ?>"><?php echo $concerts_btn_text; ?></a>
        </div>
      </div> 
    
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
         <div class="upcomimg">
           <figure>
               <?php if(!empty($concerts_image)):?>
                <img src="<?php echo $concerts_image; ?>" alt="#"/>
            <?php endif; ?>
            </figure>
        </div>
          </div>
  </div>
    </div>
</div>
<!-- end upcoming -->
