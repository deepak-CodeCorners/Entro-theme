<?php  
$hss_carousel= get_field('hss_carousel');
?>

<?php if(!empty($hss_carousel)): ?>
    <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

          <?php foreach($hss_carousel as $key=>$carousel):?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php echo $key == 0 ? 'active': '';?>"></li>
          <?php endforeach; ?>

        </ol>
        <div class="carousel-inner">
        <?php foreach($hss_carousel as $key =>$carousel):?>
          <div class="carousel-item <?php echo $key == 0 ? 'active':'';?>">

            <div class="container">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-bg">
                      <span><?php echo $carousel['span_text'];?></span>
                      <h1><?php echo $carousel['slider_htext'];?></h1>
                      <p><?php echo $carousel['slider_ptext']; ?></p>
                      
                      <a href="<?php echo $carousel['slider_link1']['url'];?>"><?php echo $carousel['slider_link_text1'];?></a> <a href="<?php echo $carousel['slider_link2']['url'];?>"><?php echo $carousel['slider_link_text2'];  ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
    <?php if ($key!=0):?>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
     
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  
    </a>
    <?php endif; ?>
</div>
</div>
</section>
<?php endif; ?>
</div>
</header>