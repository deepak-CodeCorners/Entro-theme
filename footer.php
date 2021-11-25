<?php 
 $home_footer=get_field('home_footer');
 $fb_button=get_field('fb_button');
 $twitter_button=get_field('twitter_button');
 $linkedin_button=get_field('linkedin_button');
 $insta_button=get_field('insta_button');
 $copyright_text=get_field('copyright_text');
?>
<!--  footer -->
    <footer>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12 contact_bg ">
            <!-- <div class="row"> -->
              <!-- <form class="contact_bg"> -->
         
              <!-- <div class="col-md-12"> -->
                <div class="titlepage">
                  <h2>Contact us</h2>
                </div>
                <?php  
                  echo do_shortcode('[contact-form-7 id="79" title="Home-contact"]');
                ?>

            </div>
            <div class="col-md-12 border_top">
              <form class="news">
               <h3>Newsletter</h3>
                <input class="newslatter" placeholder="ENTER YOUR MAIL" type="text" name=" ENTER YOUR MAIL">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="address">
                    <ul class="loca">
                      <?php foreach($home_footer as $footer):?>
                        <li>
                        <a href="#"><img src="<?php echo $footer['hfs_image'];?>" alt="#" /></a><?php echo $footer['hfs_text'];?>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                         
                      </div>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                           <ul class="social_link">
                            <li><a href="<?php echo $fb_button['url'];?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $twitter_button['url'];?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $linkedin_button['url'];?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $insta_button['url'];?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          </ul>
                       </div>
                    </div>
                  </div>

                </div>

              </div>
               <div class="container">
              <div class="copyright">
               
                  <p><?php echo $copyright_text; ?></p>
                </div>
              </div>
            </div>
          </footer>
<!-- end footer -->
<?php wp_footer();?>