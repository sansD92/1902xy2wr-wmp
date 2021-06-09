<section id="about" class="overflow_hide">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6" data-animation="fadeInLeft" data-animation-delay="0.2s">
                <div class="overlay_bg about_video_img mb-4 mb-lg-0">
                    <img src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->profil_picture?>" alt="about_img4"/>
                    <a link="false" href="https://youtube.com/watch?v=<?php echo $identitas->youtube_video?>" class="video_popup video_play"><img class="bounce_img" src="<?php echo base_url()?>assets/images/play-icon.png" alt="play-icon" allow="autoplay"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 animation" data-animation="fadeInRight" data-animation-delay="0.4s">
                <div class="heading_s1">
                  <h2>Tentang <?php echo $identitas->nama_website?></h2>
                </div>
                <?php echo $identitas->meta_deskripsi?>

                <br><br><a href="<?php echo $identitas->profil_url?>" class="btn btn-black">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
