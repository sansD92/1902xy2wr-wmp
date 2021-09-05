<section>
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="cl_logo_slider owl-carousel owl-theme" data-items="9" data-margin="30" data-loop="false" data-autoplay="false" data-dots="false" data-autoplay-timeout="2000">
								<?php  foreach ($posts_logo as $post_new){
																		$isi = character_limiter($post_new->logo_desk,230);
																		$judul = character_limiter($post_new->logo_judul,100);
																		?>

									<div class="item">
										<?php
																							if(empty($post_new->logo_gambar)) {
																								echo "<img src='".base_url()."assets/images/blog_small_img1_350X198.jpg'>";
																							}else {
																								echo "<a href='".$post_new->logo_url."'><img src='".base_url()."assets/frontend/logo/".$post_new->logo_gambar."'></a>


																								";}
																							?>

                    </div>



								   <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
