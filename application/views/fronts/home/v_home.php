<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="arkansys" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Anger is a creative business, corporate, portfolio and clean HTML template, Based on Bootstrap, Anger is a multipurpose HTML template with unique home page demo">
<meta name="keywords" content="creative, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html template, css3, studio, branding, creative design, multipurpose, multi-purpose, parallax, personal, masonry, grid, coming soon, carousel, agency">
<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

<meta property="og:site_name" content="none">
<meta property="og:description" content="Anger is a creative business, corporate, portfolio and clean HTML template, Based on Bootstrap, Anger is a multipurpose HTML template with unique home page demo">
<meta property="og:url" content="<?php echo base_url()?>">
<meta property="og:image" content="<?php echo base_url()?>assets/upload/">
<meta property="og:image:url" content="<?php echo base_url()?>assets/upload/">
<meta property="og:type" content="article">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/upload/" type="image/x-icon">
<title>Anger - Creative Business MultiPurpose HTML5 Template</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/images/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<?php $this->load->view('fronts/css')?>
</head>

<body>

<!-- LOADER -->
<?php $this->load->view('fronts/loading.php')?>
<!-- END LOADER -->

<!-- START HEADER -->
<?php $this->load->view('fronts/home/v_header')?>
<!-- START SECTION BANNER -->
<section class="banner_section p-0 full_screen">
    <div id="carouselExampleFade" class="banner_content_wrap carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active background_bg overlay_bg2" data-img-src="<?php echo base_url()?>assets/images/banner13.jpg">
        	<div class="banner_slide_content">
            	<div class="container"><!-- STRART CONTAINER -->
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-sm-12 text-center">
                        <div class="banner_content animation text_white" data-animation="fadeIn" data-animation-delay="0.8s">
                            <h2 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s">easy To build</h2>
                            <p class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s">Lorem is simply text of the printing and typesetting industry.</p>
                            <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Get Started</a>
                            <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                        </div>
                    </div>
                </div>
            </div><!-- END CONTAINER-->
            </div>
        </div>
        <div class="carousel-item background_bg overlay_bg2" data-img-src="<?php echo base_url()?>assets/images/banner11.jpg">
        	<div class="banner_slide_content">
                <div class="container"><!-- STRART CONTAINER -->
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-sm-12 text-center">
                            <div class="banner_content animation text_white" data-animation="fadeIn" data-animation-delay="0.8s">
                                <h2 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s">faster And Easy</h2>
                                <p class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s">Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Get Started</a>
                            	<a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
            </div>
        </div>
        <div class="carousel-item background_bg overlay_bg2" data-img-src="<?php echo base_url()?>assets/images/banner10.jpg">
        	<div class="banner_slide_content">
                <div class="container"><!-- STRART CONTAINER -->
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-sm-12 text-center">
                            <div class="banner_content animation text_white" data-animation="fadeIn" data-animation-delay="0.8s">
                                <h2 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s">Responsive Design</h2>
                                <p class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s">Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Get Started</a>
                            	<a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
            </div>
        </div>
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
<!-- END SECTION BANNER -->
<!-- START SECTION ABOUT US -->
<?php $this->load->view('fronts/home/v_about')?>
<!-- END SECTION ABOUT US -->

<!-- START SECTION FEATURE -->
<section class="small_pb light_gray_bg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s4 text-center">
                	<span class="sub_title">THE RIGHT CHOICE</span>
                    <h2>Why Choose us?</h2>
            	</div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
            	<div class="clearfix small_divider"></div>
            </div>
        </div>
    	<div class="row justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
        	<div class="col-md-4 col-sm-6 mb-lg-5 mb-4 text-center">
            	<div class="icon_box icon_box_style_5">
                    <div class="box_icon mb-3">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Business Services</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-4 text-center">
            	<div class="icon_box icon_box_style_5">
                    <div class="box_icon mb-3">
                        <i class="ti-ruler-pencil"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Business Consult</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-4 text-center">
            	<div class="icon_box icon_box_style_5">
                    <div class="box_icon mb-3">
                        <i class="ti-layers-alt"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Investment Planning</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE -->

<!-- START SECTION PORTFOLIO -->
<section class="small_pb">
    <div class="container">
    	<div class="row">
            <div class="col-sm-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s4 text-center">
                	<span class="sub_title">RECENT PROJECTS</span>
                    <h2>Our Letest works</h2>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa<br class="d-none d-sm-block">enim. Nullam id varius nunc id varius nunc.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row mb-3 mb-sm-5 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            <div class="col-md-12 text-center">
                <ul class="list_none portfolio_filter filter_tab4">
                    <li><a href="#" class="current" data-filter="*">all</a></li>
                    <li><a href="#" data-filter=".brands">Brands</a></li>
                    <li><a href="#" data-filter=".design">Design</a></li>
                    <li><a href="#" data-filter=".web">Web</a></li>
                    <li><a href="#" data-filter=".adv">Advertising</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="portfolio_container gutter_small work_col3 portfolio_gallery portfolio_style5 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                	<li class="grid-sizer"></li>
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item design web">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="<?php echo base_url()?>assets/images/portfolio_item_small1_360X240.jpg" alt="image">
                            </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="<?php echo base_url()?>assets/images/portfolio_item1.jpg" class="image_popup"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>It's a long established fact that a reader will be readable content of a page.</p>
                              </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands web adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="<?php echo base_url()?>assets/images/portfolio_item_small2_360X240.jpg" alt="image">
                            </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="http://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup"><i class="ion-ios-play"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>There are many variations of available, but the majority have suffered alteration</p>
                              </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands design">
                        <div class="portfolio_item">
                        	<div class="portfolio_slider owl-carousel owl-theme dots_white" data-autoplay="true"  data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="3000">
                                <a href="#" class="image_link">
                                    <img src="<?php echo base_url()?>assets/images/portfolio_item_small3_360X240.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="<?php echo base_url()?>assets/images/portfolio_item_small23_360X240.jpg" alt="image">
                                </a>
                         	</div>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="<?php echo base_url()?>assets/images/portfolio_item3.jpg" class="image_popup"><i class="ion-images"></i></a>
                                        <a href="<?php echo base_url()?>assets/images/portfolio_item23.jpg" class="image_popup d-none"></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>making this the first true generator on the Internet. It uses a dictionary</p>
                              </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands design web adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="<?php echo base_url()?>assets/images/portfolio_item_small4_360X240.jpg" alt="image">
                            </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="<?php echo base_url()?>assets/images/portfolio_item4.jpg" class="image_popup"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                              </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="<?php echo base_url()?>assets/images/portfolio_item_small5_360X240.jpg" alt="image">
                            </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="https://vimeo.com/7449107" class="video_popup"><i class="ion-ios-play"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>Nam libero tempore cum soluta nobis eligendi optio nihil impedit quo minus</p>
                              </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands design web adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="<?php echo base_url()?>assets/images/portfolio_item_small6_360X240.jpg" alt="image">
                            </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="<?php echo base_url()?>assets/images/portfolio_item6.jpg" class="image_popup"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>which is the same as saying through shrinking from toil and pain.</p>
                              </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO -->

<!-- START SECTION FEATURE -->
<section class="small_pt overflow_hide">
	<div class="container">
    	<div class="row">
            <div class="col-lg-6 col-md-6 animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<h2>Our Mission</h2>
                </div>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                <div id="accordion" class="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Complete Solution</a> </h6>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body"> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Excellent Quality</a> </h6>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body"> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Beautifully coded</a> </h6>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">  Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4 mt-md-0 animation" data-animation="fadeInRight" data-animation-delay="0.4s">
            	<div class="heading_s1">
                	<h2>Skill Process</h2>
                </div>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                <div class="skill_content">
                    <div class="progrees_bar_text">
                        <b>Web Hosting</b>
                    </div>
                    <div class="progress">
                      <div class="count_pr" data-percent="70"><span class="counter">70</span>%</div>
                      <div class="progress-bar d-block" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                      </div>
                   </div>
                </div>
                <div class="skill_content">
                    <div class="progrees_bar_text">
                        <b>Development</b>
                    </div>
                    <div class="progress">
                    	<div class="count_pr" data-percent="50"><span class="counter">50</span>%</div>
                      <div class="progress-bar d-block" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                      </div>
                   </div>
                </div>
                <div class="skill_content">
                    <div class="progrees_bar_text">
                        <b>Web Design</b>
                    </div>
                    <div class="progress">
                    <div class="count_pr" data-percent="80"><span class="counter">80</span>%</div>
                      <div class="progress-bar d-block" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                      </div>
                   </div>
                </div>
                <div class="skill_content">
                    <div class="progrees_bar_text">
                        <b>Marketing</b>
                    </div>
                    <div class="progress">
                    <div class="count_pr" data-percent="40"><span class="counter">40</span>%</div>
                      <div class="progress-bar d-block" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                      </div>
                   </div>
                </div>
                <div class="skill_content">
                    <div class="progrees_bar_text">
                        <b>Bussiness Strategy</b>
                    </div>
                    <div class="progress">
                    <div class="count_pr" data-percent="60"><span class="counter">60</span>%</div>
                      <div class="progress-bar d-block" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                      </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE -->

<!-- START SECTION COUNTER -->
<section class="counter_wrap background_bg fixed_bg overlay_bg2" data-img-src="<?php echo base_url()?>assets/images/counter_bg2.jpg">
    <div class="container">
        <div class="row align-items-center justify-content-center">
        	<div class="col-md-5 text_white text-center text-md-left mb-4 mb-md-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1 heading_light text-center text-md-left">
                	<h2>Get to know us!</h2>
                </div>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                <a href="#" class="btn btn-outline-white">know More</a>
            </div>
        	<div class="col-lg-6 offset-lg-1 col-md-7 col-sm-12 col-11 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            	<div class="row overflow_hide">
                	<div class="col-6 couter_border">
                        <div class="box_counter text-center">
                            <i class="ion-coffee"></i>
                            <h3 class="counter_text"><span class="counter">800</span>+</h3>
                            <p>Cups of Coffee</p>
                        </div>
                    </div>
                    <div class="col-6 couter_border">
                        <div class="box_counter text-center">
                            <i class="ion-clock"></i>
                            <h3 class="counter_text"><span class="counter">1700</span></h3>
                            <p>Hours of Development</p>
                        </div>
                    </div>
                    <div class="col-6 couter_border">
                        <div class="box_counter text-center">
                            <i class="ion-easel"></i>
                            <h3 class="counter_text"><span class="counter">1200</span>+</h3>
                            <p>Project Complete</p>
                        </div>
                    </div>
                    <div class="col-6 couter_border">
                        <div class="box_counter text-center">
                            <i class="ion-android-contacts"></i>
                            <h3 class="counter_text"><span class="counter">1500</span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER -->

<!-- START SECTION FEATURE -->
<section class="small_pb">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s4 text-center">
                	<span class="sub_title">Smart Features</span>
                    <h2>Our Services</h2>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.<br class="d-none d-sm-block"> Nullam id varius nunc id varius nunc.</p>
            </div>
        </div>
        <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.4s">
        	<div class="col-md-4 mt-3 mt-md-4">
            	<div class="flip_box text_white">
					<div class="front background_bg overlay_bg3" data-img-src="<?php echo base_url()?>assets/images/icon_box_img1.jpg">
						<div class="inner">
                            <i class="icon icon-display"></i>
							<h5>Responsive Design</h5>
              				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
					</div>
					<div class="back bg_blue">
						<div class="inner">
                          <h5>Responsive Design</h5>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                          <a href="#" class="btn btn-outline-white">Read More</a>
						</div>
					</div>
				</div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
            	<div class="flip_box text_white">
					<div class="front background_bg overlay_bg3" data-img-src="<?php echo base_url()?>assets/images/icon_box_img2.jpg">
						<div class="inner">
                            <i class="icon icon-eye"></i>
							<h5>Retina Ready</h5>
              				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
					</div>
					<div class="back bg_blue">
						<div class="inner">
                          <h5>Retina Ready</h5>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                          <a href="#" class="btn btn-outline-white">Read More</a>
						</div>
					</div>
				</div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
            	<div class="flip_box text_white">
					<div class="front background_bg overlay_bg3" data-img-src="<?php echo base_url()?>assets/images/icon_box_img3.jpg">
						<div class="inner">
                            <i class="icon icon-equalizer2"></i>
							<h5>Parallax Effact</h5>
              				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
					</div>
					<div class="back bg_blue">
						<div class="inner">
                          <h5>Parallax Effact</h5>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                          <a href="#" class="btn btn-outline-white">Read More</a>
						</div>
					</div>
				</div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
            	<div class="flip_box text_white">
					<div class="front background_bg overlay_bg3" data-img-src="<?php echo base_url()?>assets/images/icon_box_img4.jpg">
						<div class="inner">
                            <i class="icon icon-embed2"></i>
							<h5>Html5 & Css3</h5>
              				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
					</div>
					<div class="back bg_blue">
						<div class="inner">
                          <h5>Html5 & Css3</h5>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                          <a href="#" class="btn btn-outline-white">Read More</a>
						</div>
					</div>
				</div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
            	<div class="flip_box text_white">
					<div class="front background_bg overlay_bg3" data-img-src="<?php echo base_url()?>assets/images/icon_box_img5.jpg">
						<div class="inner">
                            <i class="icon icon-lifebuoy"></i>
							<h5>Expert Support</h5>
              				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
					</div>
					<div class="back bg_blue">
						<div class="inner">
                          <h5>Expert Support</h5>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                          <a href="#" class="btn btn-outline-white">Read More</a>
						</div>
					</div>
				</div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
            	<div class="flip_box text_white">
					<div class="front background_bg overlay_bg3" data-img-src="<?php echo base_url()?>assets/images/icon_box_img6.jpg">
						<div class="inner">
                            <i class="icon icon-cog"></i>
							<h5>Easy To Customize</h5>
              				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
					</div>
					<div class="back bg_blue">
						<div class="inner">
                          <h5>Easy To Customize</h5>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                          <a href="#" class="btn btn-outline-white">Read More</a>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE -->

<!-- START SECTION TEAM -->
<section class="small_pt small_pb">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s4 text-center">
                	<span class="sub_title">core People </span>
                    <h2>Our Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="team_box team_hover_style1 social_white light_gray_bg">
                	<div class="team_img">
                    	<img src="<?php echo base_url()?>assets/images/team1.jpg" alt="team1"/>
                        <ul class="list_none social_icons border_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title">
                        <h5>Alea Brooks</h5>
                        <span>Software Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            	<div class="team_box team_hover_style1 social_white light_gray_bg">
                	<div class="team_img">
                    	<img src="<?php echo base_url()?>assets/images/team2.jpg" alt="team2"/>
                        <ul class="list_none social_icons border_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    	</ul>
                    </div>
                    <div class="team_title">
                        <h5>Grace Wong</h5>
                        <span>Product designer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center animation" data-animation="fadeInUp" data-animation-delay="0.5s">
            	<div class="team_box team_hover_style1 social_white light_gray_bg">
                	<div class="team_img">
                    	<img src="<?php echo base_url()?>assets/images/team3.jpg" alt="team3"/>
                        <ul class="list_none social_icons border_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title">
                        <h5>Maria Redwood</h5>
                        <span>Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
            	<div class="team_box team_hover_style1 social_white light_gray_bg">
                	<div class="team_img">
                    	<img src="<?php echo base_url()?>assets/images/team4.jpg" alt="team4"/>
                        <ul class="list_none social_icons border_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title">
                        <h5>james white</h5>
                        <span>Accountant</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEAM -->

<!-- START SECTION CALL TO ACTION -->
<section class="cta_section_small bg_blue px-0">
	<div class="container">
    	<div class="row align-items-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
        	<div class="col-md-8 text_white">
                <h2 class="">We always stay with our clients.</h2>
                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
            </div>
            <div class="col-md-4 text-md-right">
            	<a href="#" class="btn btn-outline-white">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CALL TO ACTION -->

<!-- START SECTION TESTIMONIAL -->
<section>
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s4 text-center">
                	<span class="sub_title">Clients Says</span>
                	<h2>Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            	<div class="testimonial_slider testimonial_style3 carousel_slide1 owl-carousel owl-theme" data-autoheight="true" data-loop="true" data-autoplay="true">
                	<div class="item">
                    	<div class="testimonial_box">
                        	<div class="testimonial_img">
                            	<img class="rounded-circle m-auto" src="<?php echo base_url()?>assets/images/user1.jpg" alt="user"/>
                            </div>
                            <div class="testi_meta">
                                <h6>Lissa Castro</h6>
                                <span>Co-Founder</span>
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="testimonial_box">
                        	<div class="testimonial_img">
                            	<img class="rounded-circle m-auto" src="<?php echo base_url()?>assets/images/user2.jpg" alt="user"/>
                            </div>
                            <div class="testi_meta">
                                <h6>Alden Smith</h6>
                                <span>Creative Designer</span>
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="testimonial_box">
                        	<div class="testimonial_img">
                            	<img class="rounded-circle m-auto" src="<?php echo base_url()?>assets/images/user3.jpg" alt="user"/>
                            </div>
                            <div class="testi_meta">
                                <h6>Daisy Lana</h6>
                                <span>Creative Director</span>
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="testimonial_box">
                        	<div class="testimonial_img">
                            	<img class="rounded-circle m-auto" src="<?php echo base_url()?>assets/images/user4.jpg" alt="user"/>
                            </div>
                            <div class="testi_meta">
                                <h6>Alfred Amos</h6>
                                <span>Creative Designer</span>
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION BLOG -->
<section class="gray_bg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s4 text-center">
                	<span class="sub_title">Letest News</span>
                	<h2>Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="clearfix small_divider"></div>
            </div>
        </div>
        <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.4s">
        	<div class="col-md-12">
            	<div class="blog_wrap carousel_slide3 owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-autoplay-timeout="2000">
                	<div class="items">
                        <div class="blog_post blog_style1">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="<?php echo base_url()?>assets/images/blog_small_img1_350X198.jpg" alt="blog_small_img1_350X198">
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                        <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                                    </ul>
                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="blog_post blog_style1">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="<?php echo base_url()?>assets/images/blog_small_img2_350X198.jpg" alt="blog_small_img2_350X198">
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">A cheap and flexible solution for those who want a starter package </a></h6>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                        <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                                    </ul>
                                    <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="blog_post blog_style1">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="<?php echo base_url()?>assets/images/blog_small_img3_350X198.jpg" alt="blog_small_img3_350X198">
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">But I must explain to you how all this mistaken idea of denouncing</a></h6>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                        <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                                    </ul>
                                    <p>It uses a dictionary of over combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="blog_post blog_style1">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="<?php echo base_url()?>assets/images/blog_small_img4_350X198.jpg" alt="blog_small_img4_350X198">
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">dignissimos ducimus qui blanditiis praesentium voluptatum deleniti</a></h6>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                        <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                                    </ul>
                                    <p>It uses a dictionary of over combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->

<!-- START SECTION CLIENT LOGO -->
<section>
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="cl_logo_slider owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false" data-autoplay-timeout="2000">
                	<div class="item">
                    	<a href="#"><img src="<?php echo base_url()?>assets/images/cl_logo1.png" alt="cl_logo1"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="<?php echo base_url()?>assets/images/cl_logo2.png" alt="cl_logo2"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="<?php echo base_url()?>assets/images/cl_logo3.png" alt="cl_logo3"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="<?php echo base_url()?>assets/images/cl_logo4.png" alt="cl_logo4"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="<?php echo base_url()?>assets/images/cl_logo5.png" alt="cl_logo5"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="<?php echo base_url()?>assets/images/cl_logo6.png" alt="cl_logo6"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- START SECTION CLIENT LOGO -->

<!-- START SECTION NEWSLATTER -->
<section class="small_pt small_pb bg_blue">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 text_white text-center">
            	<div class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <h2 class="">Get latest news delivered daily!</h2>
                    <p>We will send you breaking news right to your inbox.</p>
                    <div class="newsletter_form newslattter_small">
                        <form>
                            <input class="form-control" type="text" required="" placeholder="Enter Email Address">
                            <button type="submit" title="Subscribe" class="btn btn-default" name="submit" value="Submit">
                            	subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION NEWSLATTER -->

<!-- START FOOTER SECTION -->
<?php $this->load->view('fronts/home/v_footer')?>
<!-- END FOOTER SECTION -->
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
<?php $this->load->view('fronts/js')?>

</body>
</html>
