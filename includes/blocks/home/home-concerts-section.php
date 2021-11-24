<?php

$hcs_text=get_field('hcs_text');
$hcs_button=get_field('hcs_button');
$hcs_image=get_field('hcs_image');

?>
<!-- upcoming -->
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
          <div class="titlepage">
          <h2>Upcoming Concerts</h2>
          </div>
          <p><?php echo $hcs_text; ?></p>
          <a href="<?php echo $hcs_button['url']; ?>">Read More</a>
        </div>
      </div> 
    
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
         <div class="upcomimg">
           <figure>
           	<?php
           	if(!empty($hcs_image)){
           	?>
           	<img src="<?php echo $hcs_image; ?>" alt="#"/>
           	<?php	
           	}
           	?>
            </figure>
        </div>
          </div>
  </div>
    </div>
</div>
<!-- end upcoming -->
