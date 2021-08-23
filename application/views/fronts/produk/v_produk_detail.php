<div class='row'>
		<div class='col-md-12'>
				<ul class='portfolio_container gutter_small work_col3 portfolio_gallery portfolio_style5 animation' data-animation='fadeInUp' data-animation-delay='0.6s'>
					<li class='grid-sizer'></li>
 <?php
                    foreach ($produk_detail as $row){

                    echo "
						<li class='portfolio-item livestock'>
								<div class='portfolio_item'>
										<a href='#' class='image_link'>
												<img src='".base_url()."assets/frontend/produk/$row[foto_produk_detail]' alt='image'>
										</a>
												<div class='portfolio_content'>
														<div class='link_container'>
																<a href='' class='image_popup'><i class='ion-image'></i></a>
																<a href='#'><i class='ion-plus'></i></a>
														</div>
														<h5><a href='#'>$row[nama_produk_detail]</a></h5>
											</div>
								</div>
						</li>
						";
                    }
                  ?>
				</ul>
		</div>
</div>
<br>
