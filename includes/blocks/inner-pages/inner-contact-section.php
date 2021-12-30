<?php 
$inner_contact_text =  get_field('inner_contact_text');
$contact_h3_text =  get_field('contact_h3_text');
$contact_address =  get_field('contact_address');
$social_links = get_field('social_links');
$contact_copy_para = get_field('contact_copy_para');
$contact_copy_button = get_field('contact_copy_button');
$contact_copy_btn_text = get_field('contact_copy_btn_text');

?>

<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2><?php echo $inner_contact_text; ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>


    <!--  footer -->
    <!-- <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
          <div class="col-md-12 contact_bg">
              <?php  
                  //echo do_shortcode('[contact-form-7 id="79" title="Contact form Footer"]');
              ?>
          </div>
          <div class="col-md-12 border_top news">
          <h3><?php //echo $contact_h3_text; ?></h3>
            <?php 
              //echo do_shortcode('[contact-form-7 id="86" title="Footer Newsletter"]');
            ?>
          </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="address">
                    <ul class="loca">
                      <?php //foreach($contact_address as $key=> $address): ?>
                      <li>
                        <a href="<?php // echo $address['contact_icon_button']; ?>"><img src="<?php //echo $address['contact_icon']; ?>" alt="#" /></a><?php // echo $address['contact_icon_text']; ?>
                        <li>
                      <?php //endforeach; ?>                    
                  </div>
                </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                          <ul class="social_link">
                            <?php //foreach($social_links as $key => $social_link):?>
                              <li><a href="<?php //echo $social_link['social_link_button']['url'];?>"><i class="fa fa-<?php //echo $social_link['social_link_class'];?>" aria-hidden="true"></i></a></li>
                            <?php //endforeach; ?>
                          </ul>
                       </div>
                    </div>
                  </div>

                </div>

              </div>
               <div class="container">
              <div class="copyright">
               
                  <p><?php echo $contact_copy_para; ?><a href="<?php echo $contact_copy_button; ?>"><?php echo 
                  $contact_copy_btn_text; ?></a></p>
                </div>
              </div>
            </div>
          </footr> -->
          <!-- end footer -->