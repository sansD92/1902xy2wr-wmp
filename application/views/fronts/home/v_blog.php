<section >
    <div class="container">
        <div class="row">
            <div class="col-md-12 " >
                <div class="heading_s4 text-center">
                    <h2>Terkini Dari PT Widodo Makmur Perkasa, Tbk</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix small_divider"></div>
            </div>
        </div>
        <div class="row " >
            <div class="col-md-12">
                <div class="blog_wrap carousel_slide3 owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-autoplay-timeout="2000">
                    <?php  foreach ($posts_blogs as $post_new){
                                        $isi = character_limiter($post_new->blogs_desk,230);
                                        $judul = character_limiter($post_new->blogs_judul,100);
                                        ?>
                    <div class="items">
                        <div class="blog_post blog_style1">
                            <div class="blog_img">
                                <a href="<?php echo base_url("$post_new->blogs_judul_seo") ?>">
                                   <?php
                                                             if(empty($post_new->blogs_gambar)) {
                                                               echo "<img src='".base_url()."assets/images/blog_small_img1_350X198.jpg'>";
                                                             }else {
                                                               echo " <img src='".base_url()."assets/frontend/blogs/".$post_new->blogs_gambar."'> ";}
                                                             ?>
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <p><i class="ion-calendar"></i> <?php echo tgl_indo($post_new->blogs_post_tanggal)?></p>
                                <div class="blog_text">
                                    <h6 class=""><a href="<?php echo base_url("$post_new->blogs_judul_seo") ?>"><?php echo $judul?></a>
                                  </h6>

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
