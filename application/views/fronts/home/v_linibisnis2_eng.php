<section style="background-color: #8C1824" class="counter_wrap background_bg fixed_bg " >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center " >
                <div class="text_white">
                    <div class="heading_s3 mb-md-3 heading_light text-center">
                        <h2>Business Line</h2>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row " style="justify-content:center;">
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
                        <!-- <a href="<?php echo base_url("eng/linibisnis/kategori/$post_new->bisnis_kategori_judul_seo") ?>" class="btn btn-outline-white">More</a> -->
                        <a href="#" class="btn btn-outline-white">More</a>
                    </div>
                </div>
            </div>

                <?php } ?>


        </div>
    </div>
</section>
