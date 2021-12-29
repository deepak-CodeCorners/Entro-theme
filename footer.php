<?php 
$footer_h2_text = get_field('footer_h2_text', 'option');
//print_r($footer_h2_text);
$footer_h3_text = get_field('footer_h3_text', 'option');
$footer_address = get_field('footer_address', 'option');
$social_links = get_field('social_links', 'option');
$footer_copy_text = get_field('footer_copy_text', 'option');
$footer_copy_button = get_field('footer_copy_button', 'option');
$footer_copy_btn_text = get_field('footer_copy_btn_text', 'option');
?>
<!--  footer -->
    <footer>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12 contact_bg ">
            <div class="titlepage">
              <h2><?php echo $footer_h2_text; ?></h2>
            </div>
                <?php  
                  echo do_shortcode('[contact-form-7 id="79" title="Contact form Footer"]');
                ?>

            </div>
            <div class="col-md-12 border_top news">
            <h3><?php echo $footer_h3_text ;?></h3>

            <?php 
              echo do_shortcode('[contact-form-7 id="86" title="Footer Newsletter"]');
            ?>

            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="address">
                    <ul class="loca">
                      <?php //print_r($footer_address); ?>
                      <?php foreach($footer_address as $key => $address): ?>
                      <li>
                        <a href="<?php echo $address['address_button']['url'];?>"><img src="<?php echo $address['address_icon'];?>" alt="#" /></a><?php echo $address['address_text'];?>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                           <ul class="social_link">
                             <?php //print_r($social_links);?>
                        <?php foreach($social_links as $key => $social_link):?>
                            <li><a href="<?php echo $social_link['social_link_button']['url'];?>"><i class="fa fa-<?php echo $social_link['social_link_class'];?>" aria-hidden="true"></i></a></li>
                            <?php endforeach; ?>
                          </ul>
                       </div>
                    </div>
                  </div>

                </div>

              </div>
               <div class="container">
              <div class="copyright">
               
                  <p><?php echo $footer_copy_text; ?><a href="<?php echo $footer_copy_button['url']; ?>"><?php echo $footer_copy_btn_text; ?></a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
<?php wp_footer();?>