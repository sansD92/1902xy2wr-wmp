<section id="about" class="overflow_hide">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="overlay_bg about_video_img mb-4 mb-lg-0">
                    <img src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->profil_picture?>" alt="about_img4"/>
                    <a link="false" href="https://youtube.com/watch?v=<?php echo $identitas->youtube_video?>" class="video_popup video_play"><img class="bounce_img" src="<?php echo base_url()?>assets/images/play-icon.png" alt="play-icon" allow="autoplay"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12" >
                <div class="heading_s1">
                  <h2>About <?php echo $identitas->nama_website?></h2>
                </div>
                <p style="text-align: justify;"><?php echo $identitas->meta_deskripsi?></p>

                <!-- <br><br><a href="<?php echo base_url()?>eng/tentangkami" class="btn btn-black">More</a> -->
                <br><br><a href="#" class="btn btn-black">More</a>
            </div>
        </div>
    </div>
</section>
