
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
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" style="height:500px;" data-img-src="<?php echo base_url()?>assets/frontend/campur/headersubmenu.jpg">
	<div class="container">
    	<div class="row">

    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION ABOUT US -->
<section class='small_pb overflow_hide'>
    <div class='container'>
       <?php
                        foreach ($linibisniskategori->result_array() as $r) {
                            $sql = "select * from bisnis where bisnis_id = " . $r['bisnis_id'];
                            $a = $this->db->query($sql)->result();
                            $b = $a[0];
                          echo "
        <div class='row align-items-center'>
          <div class='col-md-6 col-sm-12 mb-4 mb-lg-0 ' data-animation='fadeInLeft' data-animation-delay='0.2s'>
              <div>";?>
								<img <?php
                    if(empty($r['bisnis_gambar'])) {
                      echo "<img src='".base_url()."assets/frontend/linibisnis/no-image.JPG'>";
                    }else {
                      echo " <img src='".base_url()."assets/frontend/linibisnis/".$r['bisnis_gambar']."' width='450px' height='300px'> ";}
                    ?>


                </div>
            </div>
            <div class="col-md-6 col-sm-12 " >
                <div class="heading_s3 mb-3">
                  <h3><?php echo $r['bisnis_judul']?></h3>
                </div>
                <p><?php echo $r['bisnis_desk']?>
									<?php
	                    if(empty($r['bisnis_url'])) {
	                      echo "";
	                    }else {
	                      echo "
												<a href='$r[bisnis_url]' target='_blank' class='btn btn-outline-default'>Klik Disini</a>";}
	                    ?>

								</p>
            </div>
        </div><br>

                            <?php }  ?>
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
