
<!DOCTYPE html>
<html lang="en">
<!-- START SECTION HEAD -->
<?php $this->load->view('fronts/head.php')?>
<!-- END SECTION HEAD -->

<body>


<!-- START HEADER -->
<?php $this->load->view('fronts/header_eng.php')?>
<!-- END HEADER -->

<!-- START SECTION BANNER -->
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" style="height:500px;"data-img-src="<?php echo base_url()?>assets/frontend/campur/headersubmenu.jpg">
	
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION PORTFOLIO SLIDER -->
<section>
  <div class="container">
      <div class="row">

          <div class="col-lg-9">
              <div class="row">

          <?php  foreach ($post_terbaru as $post_new){
                                    $jdl = character_limiter($post_new->blogs_judul,30);
                                        ?>
                    <div class="col-lg-4 col-md-6 mb-md-4 mb-2 pb-2">
                        <div class="blog_post blog_style1">
                            <div class="blog_img">
                                <a href="<?php echo base_url("$post_new->blogs_judul_seo") ?>">
                                    <img src="<?php echo base_url();?>assets/frontend/blogs/<?php echo $post_new->blogs_gambar ?>">
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="<?php echo base_url("$post_new->blogs_judul_seo") ?>"><?php echo $jdl ?></a></h6>
                                    <ul class="list_none blog_meta">
                                        <li><a href="<?php echo base_url("$post_new->blogs_judul_seo") ?>"><i class="ion-calendar"></i> <?php echo  tgl_indo($post_new->blogs_post_tanggal); ?></a></li>

                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                          <?php } ?>


                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                        <ul class="pagination justify-content-center">

                            <li ><?php
  echo $this->pagination->create_links();
  ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
              <div class="sidebar">
                    <div class="widget">
                            <div class="newsletter_form">
                            <form>
                                <div class="outline_input-black">
                                    <input required="" placeholder="Search..." type="text">
                                </div>
                                <button type="submit" title="Subscribe" class="btn btn-submit border-0" name="submit" value="Submit">
                                    <span class="ti-search"></span>
                                </button>
                            </form>
                        </div>
                        </div>

                    <div class="widget">
                      <h5 class="widget_title">MEDIA</h5>
                        <ul class="list_none widget_categories border_bottom_dash">
                            <li><a href="#"><span class="categories_name">News</span></a></li>
                            <li><a href="#"><span class="categories_name">WMP Megazine</span></a></li>
                            <li><a href="#"><span class="categories_name">Youtube WMP</span></a></li>

                      </ul>
                    </div>

                    <div class="widget">
                      <h5 class="widget_title">Products</h5>
                        <ul class="list_none widget_categories border_bottom_dash">
                            <li><a href="#"><span class="categories_name">Cow</span></a></li>
                            <li><a href="#"><span class="categories_name">Beef</span></a></li>
                            <li><a href="#"><span class="categories_name">Processed Products</span></a></li>
                             <li><a href="#"><span class="categories_name">Leather</span></a></li>
                              <li><a href="#"><span class="categories_name">Chicken Products</span></a></li>
                               <li><a href="#"><span class="categories_name">Commodity</span></a></li>

                      </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END SECTION PORTFOLIO -->

<!-- START SECTION SUBCRIBE -->
<?php $this->load->view('fronts/home/v_subcribe_eng')?>
<!-- END SECTION SUBCRIBE -->

<!-- START FOOTER SECTION -->
<?php $this->load->view('fronts/footer_eng')?>
<!-- END FOOTER SECTION -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="<?php echo base_url()?>assets/js/jquery-1.12.4.min.js"></script>
<!-- jquery-ui -->
<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="<?php echo base_url()?>assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="<?php echo base_url()?>assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="<?php echo base_url()?>assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="<?php echo base_url()?>assets/js/jquery.countdown.min.js"></script>
<!-- fit video  -->
<script src="<?php echo base_url()?>assets/js/jquery.fitvids.js"></script>
<!-- jquery.counterup.min js -->
<script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
<!-- isotope min js -->
<script src="<?php echo base_url()?>assets/js/isotope.min.js"></script>
<!-- isotope-loadmore js -->
<script src='<?php echo base_url()?>assets/js/isotope-loadmore.js'></script>
<!-- elevatezoom js -->
<script src='<?php echo base_url()?>assets/js/jquery.elevatezoom.js'></script>
<!-- scripts js -->
<script src="<?php echo base_url()?>assets/js/scripts.js"></script>

</body>
</html>
