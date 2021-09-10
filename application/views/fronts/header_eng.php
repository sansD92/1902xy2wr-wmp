<header class="header_wrap dark_skin hover_menu_style1" >
  <div class="top-header bg_blue light_skin d-none d-md-block border-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <!-- <li><i class="ti-location-pin"></i><?php echo $identitas->alamat?></li> -->
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list_none header_list list_menu justify-content-center justify-content-sm-end ">
                       <!--  <li class="dropdown">
                    <a class="dropdown-toggle " href="#" data-toggle="dropdown">Karir</a>
                    <div class="dropdown-menu">
                        <ul>

                            <li><a style="text-transform: ;color: #000;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>penerimaan-pegawai">Bergabung Bersama Kami</a></li>
                            <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="#">Program Kami</a></li>
                            <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>hubungi-kami-karir">Hubungi Kami</a></li>

                        </ul>

                    </div>

                </li> -->
                        <li><a href="<?php echo $identitas->youtube?>" target="_blank"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="<?php echo $identitas->facebook?>" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="<?php echo $identitas->instagram?>" target="_blank"><i class="ion-social-instagram-outline"></i></a></li>
                         <li><a href="https://www.linkedin.com/in/pt-widodo-makmur-perkasa-118b5a12b/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                        <li><a href="<?php echo base_url()?>ind"><img height="13px" src="<?php echo base_url()?>assets/frontend/id_flag.png" title="Indonesian"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>







  <div class="container " >
    <nav class="navbar navbar-expand-lg">
    	<a class="navbar-brand" href="<?php echo base_url()?>eng/home">
			<img class="logo_light" src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt="logo" />
            <img class="logo_dark" src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt="logo" />
            <img class="logo_default" src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
      	<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link " href="<?php echo base_url()?>eng/home"><span style="font-weight: 800;" class="ti-home"></span></a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Company Profile</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/about-us">Profile</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/visimisi">Mission Philosophy</a></li>
                                              <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/milestone">Milestone WMP</a></li>

                                        </ul>
                                    </div>
                                </li>


                                <!-- <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>motto">MOTTO WMP</a></li> -->


                                <!-- <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/commissioners-directors">Board of Commissioners & Directors</a></li> -->
                                <li><a class="dropdown-item nav-link nav_item" href="#">Board of Commissioners & Directors</a></li>
                               <!--  <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>direksi">Dewan Direksi</a></li> -->
                                <!-- <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/companystructure">Company & Organization Structure</a></li>
                                  <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/product">Product</a></li> -->
                                <li><a  class="dropdown-item nav-link nav_item" href="#">Company & Organization Structure</a></li>
                                  <li><a  class="dropdown-item nav-link nav_item" href="#">Product</a></li>

                                <!--  <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Product</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk1">Sapi</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk2">Daging Sapi</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk3">Product Olahan</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk4">Kulit</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk5">Product Ayam</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk6">Komoditas</a></li>

                                        </ul>
                                    </div>
                                </li> -->
                              <!--   <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>strukturorganisasi">Struktur Organisasi</a></li> -->

                            </ul>
                        </div>
                </li>



                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Business Line</a>
                    <div class="dropdown-menu">
                        <ul>
                          <?php  foreach ($posts_bisnis as $post_new){ ?>
                            <!-- <li><a style="text-transform: ;" class="dropdown-item nav-link nav_item" href="<?php echo base_url("linibisnis/kategori_eng/$post_new->bisnis_kategori_judul_seo") ?>"><?php echo $post_new->bisnis_kategori_judul?></a></li> -->
                            <li><a style="text-transform: ;" class="dropdown-item nav-link nav_item" href="#"><?php echo $post_new->bisnis_kategori_judul?></a></li>
                          <?php } ?>
                        </ul>
                    </div>
                </li>
             <!--    <li class="dropdown">
                    <a class="dropdown-toggle nav-link " href="#" data-toggle="dropdown">Product</a>
                    <div class="dropdown-menu">
                        <ul >
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk1">Sapi</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk2">Daging Sapi</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk3">Product Olahan</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk4">Kulit</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk5">Product Ayam</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk6">Komoditas</a></li>
                        </ul>
                    </div>
                </li> -->
                <!--  <li class="dropdown">
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
                 <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/investor-relationship">Investor Relationship</a></li>



                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Governance</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Governance</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <!-- <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola/sekilas_gcg_eng">GCG Overview</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola/penerapan_gcg_eng" >GCG Implementation</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola/pengendalian_gratifikasi_eng">Gratuity Control</a></li>
                                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#" >Business Ethics</a>
                                              <div class="dropdown-menu dropdown-reverse">
                                                  <ul>
                                                  <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola/etikabisnis_pemasok_eng">WMP Supplier Code of Conduct</a></li>
                                                  <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tatakelola/kebijakan_kreditur_eng">WMP Creditor Policy and Vendor Selection</a></li> -->
                                            <li><a class="dropdown-item nav-link nav_item" href="#">GCG Overview</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="#" >GCG Implementation</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">Gratuity Control</a></li>
                                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#" >Business Ethics</a>
                                              <div class="dropdown-menu dropdown-reverse">
                                                  <ul>
                                                  <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="#">WMP Supplier Code of Conduct</a></li>
                                                  <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="#">WMP Creditor Policy and Vendor Selection</a></li>

                                                  </ul>
                                              </div>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="#">Directors Work Guidelines</a></li>

                             <!--   <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Sistem manajemen</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                           <li><a class="dropdown-item nav-link nav_item" href="#">Sistem Manajemen Assets</a></li>
                                              <li><a class="dropdown-item nav-link nav_item" href="#">Sistem Manajemen Mutu</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sistem Manajemen Terintegrasi</a></li>
                                                  <li><a class="dropdown-item nav-link nav_item" href="#">Sistem Manajemen Lainya</a></li>
                                        </ul>
                                    </div>
                                </li>  -->

                               <!--  <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Pedoman Kerja Direksi & Komisaris</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">Laporan Tahunan</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">Laporan Berkelanjutan</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">Laporan Keuangan</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">Kinerja & Rasio Keuangan</a></li>
                                        </ul>
                                    </div>
                                </li>  -->
                        </ul>
                    </div>

                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">ESG</a>
                    <div class="dropdown-menu">
                        <ul>
                             <!-- <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/esg/joglo-tumiyono">Joglo Tumiyono</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/esg/kei">KEI Foundation</a></li> -->
                             <li><a class="dropdown-item nav-link nav_item" href="#">Joglo Tumiyono</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">KEI Foundation</a></li>
                           <!--  <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Program CSR</a>
                                    <div class="dropdown-menu">
                                        <ul>


                                        </ul>
                                    </div>
                                </li> -->
           <!--  <li><a style="text-transform: ;" class="dropdown-item nav-link nav_item" href="#">Anggaran & Realisasi</a></li> -->
                        </ul>
                    </div>
                </li>

                <!-- <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Kontribusi Sosial</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>kontrib/kategori/kesatriaan-enterpreneur-indonesia">Kesatriaan Entrepreneur Indonesia</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>kontrib/kategori/kegiatan-csr">Kegiatan CSR</a></li>
                        </ul>
                    </div>
                </li> -->

                <li class="dropdown">
                    <a class="dropdown-toggle nav-link " href="#" data-toggle="dropdown">Information</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Career</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul>
                                             <!--  <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>ikhtisar-hc">Ikhtisar</a></li> -->
                            <!-- <li><a style="text-transform: ;color: #000;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/recruitment">Join Us</a></li> -->
                            <li><a style="text-transform: ;color: #000;" class="dropdown-item nav-link nav_item" href="#">Join Us</a></li>
                           <!--  <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">Workshop dan Pelatihan</a></li> -->
                            <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="#">Our Programs</a></li>
                            <!-- <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/contact-us-career">Contact Us</a></li> -->
                            <li><a style="text-transform: ; color: #000;" class="dropdown-item nav-link nav_item" href="#">Contact Us</a></li>

                                        </ul>
                                    </div>
                                </li>
                             <li><a style="text-transform: ;" class="dropdown-item nav-link nav_item" href="#">Company Activities</a></li>
                             
                             <!-- <li><a style="text-transform: ;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>informasi/faq">FAQ</a></li> -->
                             <!-- <li><a style="text-transform: ;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>eng/gallery-information">Gallery</a></li> -->
                             <li><a style="text-transform: ;" class="dropdown-item nav-link nav_item" href="#">Gallery</a></li>
                            <!--  <li><a style="text-transform: ;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>informasi/faq">FAQ</a></li> -->

                           <!--  <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="https://www.youtube.com/channel/UCfXFjK_ot0iaQ41TgEHneSg" target="_blank">Youtube WMP</a></li> -->

                        </ul>
                    </div>
                </li>


             <!--    <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Karir</a>
                    <div class="dropdown-menu">
                        <ul>
                           < <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>ikhtisar-hc">Ikhtisar</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>penerimaan-pegawai">Bergabung Bersama Kami</a></li>
                         <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">Workshop dan Pelatihan</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">Program Kami</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>hubungi-kami-karir">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </li> -->
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
