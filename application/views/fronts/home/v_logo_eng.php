<section>
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
						<img src="<?php echo base_url()?>assets/frontend/campur/LOGOS.png" alt="image">

						<!-- <ul class="list_none carousel_slide9 owl-carousel owl-theme" data-margin="15" data-dots="false" data-autoplay="false" data-nav="true" data-loop="false">
							<?php  foreach ($posts_logo as $post_new){
																	$isi = character_limiter($post_new->logo_desk,230);
																	$judul = character_limiter($post_new->logo_judul,100);
																	?>
								<li>
									<?php
									if(empty($post_new->logo_gambar)) {
											echo "<img src='".base_url()."assets/images/blog_small_img1_350X198.jpg'>";
										}else {
											echo "<a href='".$post_new->logo_url."'><img src='".base_url()."assets/frontend/logo/".$post_new->logo_gambar."'></a>
										";}
									?>
								</li>
							 <?php } ?>
						</ul> -->
          </div>
        </div>
    </div>
</section>
