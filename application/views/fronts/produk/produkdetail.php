<!-- START SECTION PORTFOLIO DETAIL -->
<section id='pr_info' class='small_pb'>
	<div class='container'>
        <div class='row'>
             <?php
                    foreach ($produk as $row){

                    echo "
        	<div class='col-lg-8 col-md-7 mb-4 mb-md-0 animation' data-animation='fadeInUp' data-animation-delay='0.2s'>
            	<div class='heading_s3'>
                    <h3>$row[nama_produk]</h3>
                </div>
                <p style='text-align:justify;'>$row[deskripsi_produk]</p>



            </div>
            <div class='col-lg-4 col-md-5 animation' data-animation='fadeInUp' data-animation-delay='0.4s'>
            	<div class='gray_bg p-3 p-md-4'>
                    <ul class='list_none portfolio_info_box'>
                        <li><span class='text-uppercase'>Bidang</span>$row[bidang_produk]</li>
                        
                        <li><span class='text-uppercase'>Temukan Kami</span>"; ?>
                        	<ul class="social_icons">
														<?php
																	if(empty($row['facebook'])){
																		echo"";
																	}else{
																		echo"<li><a href='$row[facebook]'><img src ='".base_url()."assets/frontend/campur/facebook2.gif'></a></li>";
																	}
																	if(empty($row['instagram'])){
																		echo"";
																	}else{
																		echo"<li><a href='$row[instagram]'><img src ='".base_url()."assets/frontend/campur/Instagram.gif'></a></li>";
																	}
																	if(empty($row['tokopedia'])){
																		echo"";
																	}else{
																		echo"<li><a href='$row[tokopedia]'><img src ='".base_url()."assets/frontend/campur/tokopedia.gif'></a></li>";
																	}
																	if(empty($row['shopee'])){
																		echo"";
																	}else{
																		echo"<li><a href='$row[shopee]'><img src ='".base_url()."assets/frontend/campur/Shopee.gif'></a></li>";
																	}
																	if(empty($row['bukalapak'])){
																		echo"";
																	}else{
																		echo"<li><a href='$row[bukalapak]'><img src ='".base_url()."assets/frontend/campur/bukalapak.gif'></a></li>";
																	}

														?>
                        	</ul>
                        </li>
                  	<?php echo "</ul>
                </div>
            </div>
        </div>
          ";
                    }
                  ?>


    </div>
</section>
<!-- END SECTION PORTFOLIO DETAIL -->
