
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
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="<?php echo base_url()?>assets/images/service_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">
                    <h1><?php echo "$title"; ?></h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a>Tentang Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo "$title"; ?></li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<section class="small_pb">
    <div class="container">
        <div class="row">
           
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7 mb-4 mb-md-0 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <ul class="list_none carousel_slide1 owl-carousel owl-theme" data-autoheight="true" data-margin="15" data-dots="false" data-nav="true" data-loop="true" data-autoplay-timeout="3000">
                    <li>
                        <img src="assets/images/portfolio_item1.jpg" alt="image">
                    </li>
                    <li>
                        <img src="assets/images/portfolio_item2.jpg" alt="image">
                    </li>
                    <li>
                        <img src="assets/images/portfolio_item3.jpg" alt="image">
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-5 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                <ul class="list_none portfolio_info_box">
                    <li><span class="text-uppercase"></span>Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatchery), Budidaya ayam broiler (Commercial Broiler Farm). Budidaya Ayam Petelur Premium Germanium ( Layer ), Rumah Pemotongan Ayam RPA (Slaughtered House) modern terbesar di Indonesia dan memproduksi produk ayam olahan.  PT Widodo Makmur Unggas (WMU) berkomitmen menyediakan produk pangan hewani untuk seluruh masyarakat dunia dengan memaksimalkan kualitas produk dan pelayanan yang terjangkau bagi konsumen. WMU juga berkomitmen pada integritas, profesionalitas, loyalitas, sinergi dan kolaborasi demi menjadi yang terbaik dalam bisnis perunggasan. Untuk keterangan lebih lanjut</li>
                    <li></li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>

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
