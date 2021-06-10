
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
	<div class="container">
    	<div class="row">
        	<!-- <div class="col-md-12 text-center">
            	<div class="page-title">
            		<h1>Dewan Direksi</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dewan Direksi</li>
                  </ol>
                </nav>
            </div> -->
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION ABOUT US -->
<section class="small_pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                    <h2>Direksi WMP</h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 carousel_slide4 owl-carousel owl-theme text-center animation" data-animation="fadeInUp" data-animation-delay="0.5s" data-margin="30" data-loop="true" data-autoplay="true">
                <div class="item">
                    <div class="team_box light_gray_bg team_hover_style2 social_white">
                        <div class="team_img">
                            <img src="assets/frontend/bod/Tumiyana.png" alt="Tumiyana"/>
                            <ul class="list_none social_icons border_social">
                               <li>
                                    <h6 style="color: #fff"></h6></li>
                                    <a href="#" class="btn btn-outline-white">Lebih Detail</a>
                            </ul>
                        </div>
                        <div class="team_title">
                            <h5>Tumiyana</h5>
                            <span>Chairman & CEO Widodo Makmur Group</span>
                        </div>
                    </div>
                </div>

                 <div class="item">
                    <div class="team_box light_gray_bg team_hover_style2 social_white">
                        <div class="team_img">
                            <img src="assets/frontend/bod/teddy.png" alt="Teddy M Subekti"/>
                            <ul class="list_none social_icons border_social">
                               <li>
                                    <h6 style="color: #fff"></h6></li>
                                    <a href="#" class="btn btn-outline-white">Lebih Detail</a>
                            </ul>
                        </div>
                        <div class="team_title">
                            <h5>Teddy M Subekti</h5>
                            <span>Direktur Business Development</span>
                        </div>
                    </div>
                </div>

                 <div class="item">
                    <div class="team_box light_gray_bg team_hover_style2 social_white">
                        <div class="team_img">
                            <img src="assets/frontend/bod/eko.png" alt="Eko Agmi Adriana"/>
                            <ul class="list_none social_icons border_social">
                               <li>
                                    <h6 style="color: #fff"></h6></li>
                                    <a href="#" class="btn btn-outline-white">Lebih Detail</a>
                            </ul>
                        </div>
                        <div class="team_title">
                            <h5>Eko Agmi Adriana</h5>
                            <span>Direktur Keuangan</span>
														<br><br>
                        </div>
                    </div>
                </div>

                 <div class="item">
                    <div class="team_box light_gray_bg team_hover_style2 social_white">
                        <div class="team_img">
                           <img src="assets/frontend/bod/suyatmi.png" alt="Suyatmi"/>
                            <ul class="list_none social_icons border_social">
                               <li>
                                    <h6 style="color: #fff"></h6></li>
                                    <a href="#" class="btn btn-outline-white">Lebih Detail</a>
                            </ul>
                        </div>
                        <div class="team_title">
                            <h5>Suyatmi</h5>
                            <span>Direktur Marketing</span>
														<br><br>
                        </div>
                    </div>
                </div>

                 <div class="item">
                    <div class="team_box light_gray_bg team_hover_style2 social_white">
                        <div class="team_img">
                            <img src="assets/frontend/bod/nur.png" alt="Nur Tjahjo"/>
                            <ul class="list_none social_icons border_social">
                               <li>
                                    <h6 style="color: #fff"></h6></li>
                                    <a href="#" class="btn btn-outline-white">Lebih Detail</a>
                            </ul>
                        </div>
                        <div class="team_title">
                            <h5>Nur Tjahjo</h5>
                            <span>Direktur HCD</span>
														<br><br>
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
