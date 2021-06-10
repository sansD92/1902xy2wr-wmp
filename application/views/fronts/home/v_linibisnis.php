<section class="small_pb light_gray_bg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 " >
                <div class="heading_s4 text-center">
                	<span class="sub_title">LINI BISNIS</span>
                    <h2>Lini Bisnis</h2>
            	</div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
            	<div class="clearfix small_divider"></div>
            </div>
        </div>


				<div class="row ">
					<div class="col-md-12">
							<div class="blog_wrap carousel_slide3 owl-carousel owl-theme" data-margin="10" data-loop="true" data-autoplay="true" data-autoplay-timeout="2000">
								<?php  foreach ($posts_bisnis as $post_new){
									?>
										<div class="items">
												<div class="bisnis_post bisnis_style1">
														<div class="blog_img">
																<a href="<?php echo base_url("linibisnis/kategori/$post_new->bisnis_kategori_judul_seo") ?>">
																	<?php
								                             if(empty($post_new->bisnis_kategori_gambar)) {
								                               echo "<img src='".base_url()."assets/images/blog_small_img1_350X198.jpg'>";
								                             }else {
								                               echo " <img src='".base_url()."assets/frontend/linibisnis/".$post_new->bisnis_kategori_gambar."'> ";}
								                             ?>

																</a>
														</div>
														<div class="blog_content bg-white">
                                <div class="blog_text">
                                    <center><h6 class="blog_title"><a href="<?php echo base_url("linibisnis/kategori/$post_new->bisnis_kategori_judul_seo") ?>"><?php echo $post_new->bisnis_kategori_judul?></a></h6><br></center>
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
