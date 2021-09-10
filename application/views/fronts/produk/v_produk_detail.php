<div class='row'>
		<div class='col-md-12'>
				<ul class='portfolio_container gutter_small work_col3 portfolio_gallery portfolio_style5 animation' data-animation='fadeInUp' data-animation-delay='0.6s'>
					<li class='grid-sizer'></li>
  <?php
                    foreach ($produk_detail as $row){

                    echo "
						<li class='portfolio-item livestock'>
								<div class='portfolio_item'>
										<a >
												<img src='".base_url()."assets/frontend/produk/$row[foto_produk_detail]' alt='image'>
										</a>
												<div class='portfolio_content'>
														<div class='link_container'>

																<button type='button' class='btn btn-outline-white' data-toggle='modal' data-target='#modal-$row[id_produk_detail]'>Detail</i></button>
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

		   <!-- Modal 1 -->
		   <?php
                    foreach ($produk_detail as $row){

                    echo "

                    <div class='modal-body'>
        <div class='modal modal-member fade show' id='modal-$row[id_produk_detail]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <!-- <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5> -->
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>

                        <div class='row'>
                            <div class='col-lg-4'>
                                <img src='".base_url()."assets/frontend/produk/$row[foto_produk_detail]' class='img-fluid border-rad-bottom-right-sm'>
                            </div>
                            <div class='col-lg-8'>
                                <div class='heading'>
                                    <h3>$row[nama_produk_detail]</h3>
                                    <p class='member-title'>Deskripsi</p>
                                    <p class='text-dark text-justify'>$row[deskripsi_produk_detail]</p>
                                    <ul class='social_icons'>
			                            	<li><a href='#'><img src ='".base_url()."assets/frontend/campur/Instagram.gif'></a></li>
																		<li><a href='#'><img src ='".base_url()."assets/frontend/campur/tokopedia.gif'></a></li>
																		<li><a href='#'><img src ='".base_url()."assets/frontend/campur/Shopee.gif'></a></li>
                        	</ul>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
                    }
                  ?>
</div>
<br>
