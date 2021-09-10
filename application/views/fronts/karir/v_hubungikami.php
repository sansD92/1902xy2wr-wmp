
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
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="<?php echo base_url()?>assets/frontend/title_bc.png">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 text-center">
            	<div class="page-title">
            		<h1>Hubungi Kami</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Karir</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION ABOUT US -->
<section class="small_pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                    <h2>Informasi Kontak</h2>
                </div>
                <p class="text-center">Jika Anda memiliki pertanyaan atau membutuhkan informasi, silakan hubungi kami :.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix medium_divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="small_padding contact_box">
                    <div class="row justify-content-center">
                         <div class="col-md-3 mb-md-0 mb-3 text-center">
                            <div class="icon_box icon_box_style_1">
                                <div class="box_icon mb-3"> 
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="icon_box_content">
                                    <h5 class="text-uppercase py-md-2">Alamat</h5>
                                    <p>Graha Widodo, Jl. Raya Cilangkap No. 58 Cilangkap, Cipayung Jakarta Timur 13870 Indonesia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-3 text-center">
                            <div class="icon_box icon_box_style_1">
                                <div class="box_icon mb-3"> 
                                    <i class="ti-mobile"></i>
                                </div>
                                <div class="icon_box_content">
                                    <h5 class="text-uppercase py-md-2">Phone</h5>
                                    <p>(+62  21) 8430 6787 / 88</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-3 text-center">
                            <div class="icon_box icon_box_style_1">
                                <div class="box_icon mb-3"> 
                                    <i class="ti-printer"></i>
                                </div>
                                <div class="icon_box_content">
                                    <h5 class="text-uppercase py-md-2">Fax</h5>
                                    <p>(+62  21) 8430 6790 / 91</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-3 text-center">
                            <div class="icon_box icon_box_style_1">
                                <div class="box_icon mb-3"> 
                                    <i class="ti-email"></i>
                                </div>
                                <div class="icon_box_content">
                                    <h5 class="text-uppercase py-md-2">Email</h5>
                                    <p>info@wmp-group.co.id</p>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->

<!-- START SECTION MAP -->
<section class="small_pt small_pb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="contact_map animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31723.377150793574!2d106.900781!3d-6.339332000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x284be730643a5ade!2sPT%20Widodo%20Makmur%20Perkasa!5e0!3m2!1sid!2sid!4v1620118378812!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US -->

<section class="small_pt">
    <div class="container">
        <div class="row">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix small_divider"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="field_form">
                        <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Nama *" id="first-name" class="form-control" name="name" type="text">
                             </div>
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter No. Telp. *" id="phone" class="form-control" name="phone" type="phone">
                            </div>
                            <div class="form-group col-lg-6">
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="subject">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default" id="submitButton" name="submit" value="Submit">Submit</button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>     
                    </div>
            </div>
        </div>
    </div>
</section>



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
