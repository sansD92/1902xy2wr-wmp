
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
<!-- <section class="background_bg breadcrumb_section overlay_bg2 page-title-light" style="height:500px;"data-img-src="">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 text-center">
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
            </div>
        </div>
    </div>
</section> -->

<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="<?php echo base_url()?>assets/images/service_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">
                    <h1>Dewan Direksi</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a>Tentang Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dewan Direksi</li>
                  </ol>
                </nav>
            </div>
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
             <?php  foreach ($posts_direksi as $post_new){ ?>
            <div class="col-lg-4 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center" data-animation="fadeInUp" data-animation-delay="0.5s" data-margin="30" data-loop="true" data-autoplay="true">
                <div class="item">
                    <div class="team_box light_gray_bg team_hover_style2 social_white">
                        <div class="team_img">
                            <img src="<?php echo base_url()?>assets/frontend/bod/<?php echo $post_new->foto_direksi; ?>" alt="<?php echo $post_new->nama_direksi ?>"/>
                            <ul class="list_none social_icons border_social">
                               <li>
                                    <h6 style="color: #fff"></h6></li>
                                    <!-- <a href="#" class="btn btn-outline-white">Lebih Detail</a> -->
                                    <button type="button" class="btn btn-outline-white" data-toggle="modal" data-target="#modal-<?php echo $post_new->id_direksi ?>">Lebih Detail</button>
                            </ul>
                        </div>
                        <div class="team_title">
                            <h5><?php echo $post_new->nama_direksi ?></h5>
                            <span><?php echo $post_new->jabatan_direksi ?></span> 
                        </div>
                    </div>
                </div>
            </div>

             <?php } ?>

                       

        </div>


        <!-- Modal 1 -->
          <?php  foreach ($posts_direksi as $post_new){ ?>
                    <div class="modal-body">
        <div class="modal modal-member fade show" id="modal-<?php echo $post_new->id_direksi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url()?>assets/frontend/bod/<?php echo $post_new->foto_direksi; ?>" alt="<?php echo $post_new->nama_direksi ?>" class="img-fluid border-rad-bottom-right-sm">
                            </div>
                            <div class="col-lg-7">
                                <div class="heading">
                                    <h3><?php echo $post_new->nama_direksi ?></h3>
                                    <p class="member-title"><?php echo $post_new->jabatan_direksi ?></p>
                                    <p class="text-dark text-justify"><?php echo $post_new->deskripsi_jabatan ?></p>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <?php } ?>


        <!-- Modal 2 -->
        <div class="modal modal-member fade show" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="assets/frontend/bod/teddy.png" alt="Teddy M Subekti" class="img-fluid border-rad-bottom-right-sm">
                            </div>
                            <div class="col-lg-8">
                                <div class="heading">
                                    <h3>Teddy M Subekti</h3>
                                    <p class="member-title">Direktur Business Development</p>
                                    <p class="text-dark text-justify">Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia  2018 – 2020).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal modal-member fade show" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="assets/frontend/bod/eko.png" alt="Eko Agmi Adriana" class="img-fluid border-rad-bottom-right-sm">
                            </div>
                            <div class="col-lg-8">
                                <div class="heading">
                                    <h3>Eko Agmi Adriana</h3>
                                    <p class="member-title">Direktur Keuangan</p>
                                    <p class="text-dark text-justify">Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia  2018 – 2020).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 4 -->
        <div class="modal modal-member fade show" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="assets/frontend/bod/suyatmi.png" alt="Suyatmi" class="img-fluid border-rad-bottom-right-sm">
                            </div>
                            <div class="col-lg-8">
                                <div class="heading">
                                    <h3>Suyatmi</h3>
                                    <p class="member-title">Direktur Marketing</p>
                                    <p class="text-dark text-justify">Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia  2018 – 2020).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 5 -->
        <div class="modal modal-member fade show" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="assets/frontend/bod/nur.png" alt="Nur Tjahjo" class="img-fluid border-rad-bottom-right-sm">
                            </div>
                            <div class="col-lg-8">
                                <div class="heading">
                                    <h3>Nur Tjahjo</h3>
                                    <p class="member-title">Direktur HCD</p>
                                    <p class="text-dark text-justify">Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia  2018 – 2020).</p>
                                </div>
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
