<!-- START SECTION PORTFOLIO DETAIL -->
<section id="pr_info" class="small_pb">
	<div class="container">
        <div class="row">
        	<div class="col-lg-8 col-md-7 mb-4 mb-md-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s3">
                    <h3><?php echo "$rows[nama_produk]"; ?></h3>
                </div>
                <p style="text-align:justify;"><?php echo "$rows[deskripsi_produk]"; ?></p>



            </div>
            <div class="col-lg-4 col-md-5 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            	<div class="gray_bg p-3 p-md-4">
                    <ul class="list_none portfolio_info_box">
                        <li><span class="text-uppercase">Bidang</span><?php echo "$rows[bidang_produk]"; ?></li>
                        <li><span class="text-uppercase">Website</span><?php echo "$rows[website]"; ?></li>
                        <li><span class="text-uppercase">Temukan Kami</span>
                        	<ul class="list_none social_icons border_social rounded_social">
                            	<li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            	<li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            	<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                        	</ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO DETAIL -->
