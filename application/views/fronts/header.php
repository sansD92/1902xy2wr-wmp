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
                    <ul class="list_none header_list list_menu justify-content-center justify-content-sm-end text_uppercase">
                        <li class="dropdown">
                    <a class="dropdown-toggle " href="#" data-toggle="dropdown">Karir</a>
                    <div class="dropdown-menu">
                        <ul>
                           <!--  <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>ikhtisar-hc">Ikhtisar</a></li> -->
                            <li><a style="text-transform: uppercase;color: #000;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>penerimaan-pegawai">Bergabung Bersama Kami</a></li>
                           <!--  <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">Workshop dan Pelatihan</a></li> -->
                            <li><a style="text-transform: uppercase; color: #000;" class="dropdown-item nav-link nav_item" href="#">Program Kami</a></li>
                            <li><a style="text-transform: uppercase; color: #000;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>hubungi-kami-karir">Hubungi Kami</a></li>

                        </ul>

                    </div>

                </li>
                        <li><a href="<?php echo $identitas->youtube?>" target="_blank"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="<?php echo $identitas->facebook?>" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="<?php echo $identitas->instagram?>" target="_blank"><i class="ion-social-instagram-outline"></i></a></li>
                         <li><a href="https://www.linkedin.com/in/pt-widodo-makmur-perkasa-118b5a12b/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                       <div class="col-md-3 col-sm-4 col-3">
                   
                    <div class="lng_dropdown lng_dropdown_white float-right mr-sm-3">
                        <select name="countries" id="lng_select">
                            <option value='en' data-image="<?php echo base_url()?>assets/frontend/eng.png" data-title="English">EN</option>
                            <option value='fn' data-image="demo-medical/images/fn.png" data-title="France">IND</option>
                         
                        </select>
                    </div>
                </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>







  <div class="container " >
    <nav class="navbar navbar-expand-lg">
    	<a class="navbar-brand" href="<?php echo base_url()?>">
			<img class="logo_light" src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt="logo" />
            <img class="logo_dark" src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt="logo" />
            <img class="logo_default" src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
      	<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link " href="<?php echo base_url()?>"><span style="font-weight: 800;" class="ti-home"></span></a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Tentang Kami</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Profil Perusahaan</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>tentangkami">Profil</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>visimisi">Filosofi Misi</a></li>
                                              <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>milestone">Milestone WMP</a></li>
                                               
                                        </ul>
                                    </div>
                                </li>
                              
                               
                                <!-- <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>motto">MOTTO WMP</a></li> -->
                                

                                <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>komisaris-direksi">Dewan Komisaris & Direksi</a></li>
                               <!--  <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>direksi">Dewan Direksi</a></li> -->
                                <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>strukturcompany">Struktur Company & Organisasi</a></li>
                                  <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk">Produk</a></li>

                                <!--  <li><a class="dropdown-item menu-link dropdown-toggler" href="#">Produk</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk1">Sapi</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk2">Daging Sapi</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk3">Produk Olahan</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk4">Kulit</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk5">Produk Ayam</a></li>
                            <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk6">Komoditas</a></li>
                                               
                                        </ul>
                                    </div>
                                </li> -->
                              <!--   <li><a  class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>strukturorganisasi">Struktur Organisasi</a></li> -->

                            </ul>
                        </div>
                </li>


                
                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Lini Bisnis</a>
                    <div class="dropdown-menu">
                        <ul>
                          <?php  foreach ($posts_bisnis as $post_new){ ?>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url("linibisnis/kategori/$post_new->bisnis_kategori_judul_seo") ?>"><?php echo $post_new->bisnis_kategori_judul?></a></li>
                          <?php } ?>
                        </ul>
                    </div>
                </li>
             <!--    <li class="dropdown">
                    <a class="dropdown-toggle nav-link " href="#" data-toggle="dropdown">Produk</a>
                    <div class="dropdown-menu">
                        <ul >
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk1">Sapi</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk2">Daging Sapi</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk3">Produk Olahan</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk4">Kulit</a></li>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>produk5">Produk Ayam</a></li>
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
 <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Hubungan Investor</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#">LAPORAN-LAPORAN</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">LAPORAN TAHUNAN</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">LAPORAN BERKELANJUTAN</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">LAPORAN KEUANGAN</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">KINERJA & RASIO KEUANGAN</a></li>
                                        </ul>
                                    </div>
                                </li>

                               <!--   <li><a class="dropdown-item menu-link dropdown-toggler" href="#">TATA KELOLA PERUSAHAAN</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                           <li><a class="dropdown-item nav-link nav_item" href="#">SEKILAS GCG</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">PENERAPAN GCG</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">PENGENDALIAN GRATIFIKASI</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">ETIKA BISNIS</a></li>


                                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#">SISTEM MANAGEMENT</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                           <li><a class="dropdown-item nav-link nav_item" href="#">SISTEM MANAJEMEN ASSET</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">SISTEM MANAJEMEN MUTU</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">SISTEM MANAJEMEN TERINTEGRASI</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">SISTEM MANAJEMEN LAINNYA</a></li>
                                        </ul>
                                    </div>
                                </li>

                                 <li><a class="dropdown-item menu-link dropdown-toggler" href="#">PEDOMAN KERJA DIREKSI & KOMISARIS</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                           <li><a class="dropdown-item nav-link nav_item" href="#">KOMITE PERUSAHAAN</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">UNIT INTERNAL AUDIT</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">SISTEM PELAPORAN PELANGGARAN</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">KEBIJAKAN MANAJEMEN RISIKO</a></li>
                                        </ul>
                                    </div>
                                </li>
                                        </ul>
                                    </div>
                                </li> -->
                        </ul>
                    </div>
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Tata Kelola</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#">TATA KELOLA</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">SEKILAS GCG</a></li>
                                              <li><a class="dropdown-item nav-link nav_item" href="#">PENERAPAN GCG</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">PENGENDALIAN GRATIFIKASI</a></li>
                                                  <li><a class="dropdown-item nav-link nav_item" href="#">ETIKA BISNIS</a></li>
                                          
                                        </ul>
                                    </div>
                                </li>

                               <li><a class="dropdown-item menu-link dropdown-toggler" href="#">SISTEM MANAGEMENT</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                           <li><a class="dropdown-item nav-link nav_item" href="#">SISTEM MANAJEMEN ASSET</a></li>
                                              <li><a class="dropdown-item nav-link nav_item" href="#">SISTEM MANAJEMEN MUTU</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">SISTEM MANAJEMEN TERINTEGRASI</a></li>
                                                  <li><a class="dropdown-item nav-link nav_item" href="#">SISTEM MANAJEMEN LAINNYA</a></li>
                                        </ul>
                                    </div>
                                </li> 

                                <li><a class="dropdown-item menu-link dropdown-toggler" href="#">PEDOMAN KERJA DIREKSI DAN DEWAN KOMISARIS</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">LAPORAN TAHUNAN</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">LAPORAN BERKELANJUTAN</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">LAPORAN KEUANGAN</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>">KINERJA & RASIO KEUANGAN</a></li>
                                        </ul>
                                    </div>
                                </li> 
                        </ul>
                    </div>

                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">CSR</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a class="dropdown-item menu-link dropdown-toggler" href="#">PROGRAM CSR</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">JOGLO TUMIYONO</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">YAYASAN KEI</a></li>
                                           
                                        </ul>
                                    </div>
                                </li>
            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">ANGGARAN & REALISASI</a></li>
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
                    <a class="dropdown-toggle nav-link " href="#" data-toggle="dropdown">Informasi</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="<?php echo base_url()?>berita">MEDIA & RILIS</a></li>
                             <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">COVID-19</a></li>
                             <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">E-ANNOUNCEMENT</a></li>
                             <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">GALLERY</a></li>
                             <li><a style="text-transform: uppercase;" class="dropdown-item nav-link nav_item" href="#">FAQ</a></li>

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
