
<!DOCTYPE html>
<html lang="en">
<!-- START SECTION HEAD -->
<?php $this->load->view('fronts/head.php')?>
<!-- END SECTION HEAD -->

<body>



<!-- START HEADER -->
<?php $this->load->view('fronts/header_eng.php')?>
<!-- END HEADER -->



<!-- START SECTION GALLERY -->
<section class="small_pb small_pt">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="heading_s3">
            		<h5>Gallery 2 Columns:</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="portfolio_container work_col2 gutter_small image_gallery">
                    <li class="grid-sizer"></li>
                    <li class="portfolio-item">
                        <a href="<?php echo base_url()?>assets/images/portfolio_item1.jpg"><img src="<?php echo base_url()?>assets/images/portfolio_item_small1_548X364.jpg" alt="image"></a>
                    </li>
                    <li class="portfolio-item">
                        <a href="<?php echo base_url()?>assets/images/portfolio_item2.jpg"><img src="<?php echo base_url()?>assets/images/portfolio_item_small2_548X364.jpg" alt="image"></a>
                    </li>
                    <li class="portfolio-item">
                        <a href="<?php echo base_url()?>assets/images/portfolio_item3.jpg"><img src="<?php echo base_url()?>assets/images/portfolio_item_small3_548X364.jpg" alt="image"></a>
                    </li>
                    <li class="portfolio-item">
                        <a href="<?php echo base_url()?>assets/images/portfolio_item4.jpg"><img src="<?php echo base_url()?>assets/images/portfolio_item_small4_548X364.jpg" alt="image"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION GALLERY -->



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
<!-- elevatezoom js -->
<script src='<?php echo base_url()?>assets/js/jquery.elevatezoom.js'></script>
<!-- scripts js -->
<script src="<?php echo base_url()?>assets/js/scripts.js"></script>

</body>
</html>
