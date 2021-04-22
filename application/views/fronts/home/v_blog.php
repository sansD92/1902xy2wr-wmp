<section class="gray_bg" >
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="heading_s4 text-center">
                	<span class="sub_title">Berita Terbaru</span>
                	<h2>Berita WMP</h2>
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
									<?php  foreach ($posts as $post_new){
										$isi = character_limiter($post_new->blogs_desk,250);
										$judul = character_limiter($post_new->blogs_judul,60);
										?>
										<div class="items">
                        <div class="blog_post blog_style1">
                            <div class="blog_img">
                                <a href="#">
																	<?php
								                             if(empty($post_new->blogs_gambar)) {
								                               echo "<img src='".base_url()."assets/images/blog_small_img1_350X198.jpg'>";
								                             }else {
								                               echo " <img src='".base_url()."assets/frontend/blogs/".$post_new->blogs_gambar."'> ";}
								                             ?>

                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#"><?php echo $judul?></a></h6>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#"><i class="ion-calendar"></i><?php echo tgl_indo($post_new->blogs_post_tanggal)?></a></li>
                                    </ul>
                                    <p><?php echo $isi?>.<a href="#" class="text-capitalize">Baca Lebih Lengkap</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
										<?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
