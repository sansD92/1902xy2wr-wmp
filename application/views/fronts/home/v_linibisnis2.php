<section style="background-color: #8C1824" class="counter_wrap background_bg fixed_bg " >
    <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-6 text-center " >
            	<div class="text_white">
                    <div class="heading_s3 mb-md-3 heading_light text-center">
                        <h2>Lini Bisnis</h2>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="row animation" style="justify-content:center;" data-animation="fadeInUp" data-animation-delay="0.4s">
          <?php  foreach ($posts_bisnis as $post_new){
            ?>
            <div class="col-md-4 mt-3 mt-md-4">
            	<div class="flip_box  text_white">
      					<center>
                    <div class="front" >
                      <img style="height:400px; width:400px" src="<?php echo base_url("assets/frontend/campur/bg_box_linibisnis_home.jpg") ?>" />
                      <div class="inner">
                              <img style="width: 150px;"src="<?php echo base_url("assets/frontend/linibisnis/$post_new->bisnis_kategori_gambar_icon") ?>" alt="Icon"/>
          							        <h5><?php echo $post_new->bisnis_kategori_judul?></h5>
          						</div>
                  	</div>
                  </center>

                <div class="back">
                    <img style="height:400px; width:400px" src="<?php echo base_url("assets/frontend/linibisnis/$post_new->bisnis_kategori_gambar_flip") ?>" alt="Icon"/>
                    <div class="inner">

                      				<p></p>
                              <a href="<?php echo base_url("linibisnis/kategori/$post_new->bisnis_kategori_judul_seo") ?>" class="btn btn-outline-white">Selengkapnya</a>
        						</div>
                </div>
				      </div>
            </div>

            <?php } ?>

        </div>


        <!-- <div class="row " style="justify-content:center;">
          <?php  foreach ($posts_bisnis as $post_new){
            ?>
        	<div class="col-lg-4 col-sm-6 text-center">
            	<div class="icon_box icon_box_style_8 text_white">
                    <div class="box_icon mb-3">
                        <img style="width: 150px;"src="<?php echo base_url("assets/frontend/linibisnis/$post_new->bisnis_kategori_gambar_icon") ?>" alt="Icon"/>
                    </div>
                    <div class="icon_box_content">
                        <h5><?php echo $post_new->bisnis_kategori_judul?></h5>
                        <p></p>
                        <a href="<?php echo base_url("linibisnis/kategori/$post_new->bisnis_kategori_judul_seo") ?>" class="btn btn-outline-white">Selengkapnya</a>
                    </div>
                </div>
            </div>
            	<?php } ?>
        </div>-->
    </div>
</section>
