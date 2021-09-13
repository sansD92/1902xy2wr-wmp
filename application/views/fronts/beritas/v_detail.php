
<!DOCTYPE html>
<html lang="en">
<!-- START SECTION HEAD -->
<?php $this->load->view('fronts/head.php')?>
<!-- END SECTION HEAD -->

<body>



<!-- START HEADER -->
<?php $this->load->view('fronts/header.php')?>
<!-- END HEADER -->

<!-- START SECTION BANNER -->
<!-- <section class="background_bg breadcrumb_section overlay_bg2 page-title-light" style="height:500px;"data-img-src="<?php echo base_url()?>assets/frontend/campur/headersubmenu.jpg"> -->
	
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION ABOUT US -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_post">
                    <div class="blog_img">
                        <a href="#">
                            <img <?php
                    if(empty($posts->blogs_gambar)) {
                      echo "";
                    }else {
                      echo "
                           <img src='".base_url()."assets/frontend/blogs/".$posts->blogs_gambar."'> ";}
                    ?>
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h2><?php echo $posts->blogs_judul ?></h2>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i> <?php echo  tgl_indo($posts->blogs_post_tanggal); ?></a></li>
                            </ul>
                            <p><?php echo $posts->blogs_desk ?></p>

                            <div class="py-4 blog_post_footer">

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
</section>
<!-- END SECTION ABOUT US -->



<!-- START SECTION SUBCRIBE -->
<?php $this->load->view('fronts/home/v_subcribe')?>
<!-- END SECTION SUBCRIBE -->

<!-- START FOOTER SECTION -->
<?php $this->load->view('fronts/footer')?>
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
<!-- elevatezoom js -->
<script src='<?php echo base_url()?>assets/js/jquery.elevatezoom.js'></script>
<!-- scripts js -->
<script src="<?php echo base_url()?>assets/js/scripts.js"></script>

</body>
</html>
