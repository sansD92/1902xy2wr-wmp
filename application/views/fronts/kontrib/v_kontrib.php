
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
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" style="height:500px;"data-img-src="<?php echo base_url()?>assets/frontend/campur/headersubmenu.jpg">

</section>
<!-- END SECTION BANNER -->

<!-- START SECTION FEATURE -->
<section class="p-md-0 pt-3 overflow_hide">
    <div class="container-fluid">
      <?php
                       foreach ($post_terbaru->result_array() as $r) {
                           $sql = "select * from kontribs where kontribs_id = " . $r['kontribs_id'];
                           $a = $this->db->query($sql)->result();
                           $b = $a[0];
                        ?>
        <div class="row">
            <div class="col-lg-6 col-sm-12 p-0 animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
            	<div class="medium_padding">
                    <div class="heading_s3 mb-lg-4">
                      <h2><?php echo $r['kontribs_judul']?></h2>
                    </div>

                    <p><?php echo $r['kontribs_desk'] ?>
                      <?php
    	                    if(empty($r['kontribs_url'])) {
    	                      echo "";
    	                    }else {
    	                      echo "
    												<a href='$r[kontribs_url]' target='_blank' class='btn btn-outline-default'>Klik Disini</a>";}
    	                    ?>
                    </p>

                  </div>


            </div>
            <div class="col-lg-6 p-0 animation" data-animation="fadeInRight" data-animation-delay="0.4s">
              <?php
                  if(empty($r['kontribs_gambar'])) {
                    echo "<div class='h-100 background_bg md-height-300' data-img-src='".base_url()."assets/frontend/linibisnis/no-image.JPG'></div>";
                  }else {
                    echo "<div class='h-100 background_bg md-height-300' data-img-src='".base_url()."assets/frontend/kontribs/".$r['kontribs_gambar']."'></div> ";}
                  ?>
            </div>
        </div>
      <?php } ?>
    </div>
</section>
<!-- END SECTION FEATURE -->

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
