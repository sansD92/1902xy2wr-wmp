<header class="header_wrap dark_skin hover_menu_style1" >
  <div class="top-header bg_blue light_skin d-none d-md-block border-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><i class="ti-location-pin"></i>Jl. Raya Cilangkap No. 58
Cilangkap, Cipayung
Jakarta Timur 13870
Indonesia</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list_none social_icons text-center rounded_social social_white text-md-right mt-2 mt-md-0">
                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                         <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  <div class="container " >
    <nav class="navbar navbar-expand-lg">
    	<a class="navbar-brand" href="<?php echo base_url()?>">
			<img class="logo_light" src="<?php echo base_url()?>assets/frontend/wmp_p.png" alt="logo" />
            <img class="logo_dark" src="<?php echo base_url()?>assets/frontend/wmp_p.png" alt="logo" />
            <img class="logo_default" src="<?php echo base_url()?>assets/frontend/wmp_p.png" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
      	<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link <?php echo $status; ?>" href="<?php echo base_url()?>">Beranda</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Tentang Kami</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>visimisi">Filosofi Visi & Misi</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>motto">Motto WMP</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>milestone">Milestone WMP</a></li>

                                <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>komisaris">Dewan Komisaris</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>direksi">Dewan Direksi</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>strukturcompany">Struktur Company WMP</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>strukturorganisasi">Struktur Organisasi</a></li>

                            </ul>
                        </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Lini Bisnis</a>
                    <div class="dropdown-menu">
                        <ul>
                          <?php  foreach ($posts_bisnis as $post_new){ ?>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url("bisnis/$post_new->bisnis_judul_seo") ?>"><?php echo $post_new->bisnis_judul?></a></li>
                          <?php } ?>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-link " href="#" data-toggle="dropdown">Produk</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk1">Sapi</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk2">Daging Sapi</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk3">Produk Olahan</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk4">Kulit</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk5">Produk Ayam</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk6">Komoditas</a></li>
                        </ul>
                    </div>
                </li>
              <!--   <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Investor</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Investor</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>investor-informasipemegangsaham">Informasi Pemegang Saham</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>investor-kegiatan">Kegiatan Update dan Presentasi Perusahaan</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>investor-informasipendukung">Informasi Pendukung</a></li>
                                        </ul>
                                    </div>
                                </li>

                                 <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Tata Kelola Perusahaan</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola-codeofconduct">Code Of Conduct</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola-pedomandewan">Pedoman Dewan Komisaris</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola-pedomandireksi">Pedoman Direksi</a></li>
                                             <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola-komitenominasi">Komite Nominasi & Nemunerasi</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola-komiteaudit">Komite Audit</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola-sekretarisperusahaan">Sekretaris Perusahaan</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola-internalaudit">Internal Audit Charter</a></li>
                                        </ul>
                                    </div>
                                </li>
                        </ul>
                    </div>
                </li> -->
                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Kontribusi Sosial</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>kontrib">Kesatriaan Entrepreneur Indonesia</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>kemitraan_unggas">Kegiatan CSR</a></li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle nav-link " href="#" data-toggle="dropdown">Media</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>berita">Berita</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk2">WMP Megazine</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk3">Youtube WMP</a></li>

                        </ul>
                    </div>
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Karir</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item nav-link nav_item" href="#">Ikhtisar</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="#">Bergabung Bersama Kami</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="#">Workshop dan Pelatihan</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="#">Program Kami</a></li>
                            <li><a class="dropdown-item nav-link nav_item" href="#">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>
                	<div class="search-overlay">
                        <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                        <div class="search_wrap">
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
    </nav>
  </div>
</header>
