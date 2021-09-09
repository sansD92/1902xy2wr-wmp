<section class="banner_section p-0 full_screen">
    <div id="carouselExampleFade" class="banner_content_wrap carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <?php  foreach ($posts_slider as $post_new){ ?>
        <?php
          if(empty($post_new->slider_gambar)) {
            echo "<div class='carousel-item background_bg ' data-img-src='".base_url()."assets/images/blog_small_img1_350X198.jpg'>";
            }else {
            echo " <div class='carousel-item ".$post_new->slider_meta_desk." background_bg overlay_bg2' data-img-src='".base_url()."assets/frontend/slider/".$post_new->slider_gambar."'> ";}
         ?>
            <div class="banner_slide_content">
                <div class="container"><!-- STRART CONTAINER -->
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-sm-12 text-center">
                            <div class="banner_content animation text_white" data-animation="fadeIn" data-animation-delay="0.8s">
                                <h2 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><?php echo $post_new->slider_judul ?></h2>
                                <p style="font-size: 16px;" class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s"><?php echo $post_new->slider_desk ?></p>

                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
            </div>
        </div>
      <?php } ?>

    </div>
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleFade" data-slide-to="1"></li>
        <li data-target="#carouselExampleFade" data-slide-to="2"></li>
    </ol>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <i class="ion-chevron-left"></i>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <i class="ion-chevron-right"></i>
    </a>
    </div>
</section>
