<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Main';
$route['login'] = "Aspanel/login";
$route['produk'] = "Main/produk";
$route['tentangkami'] = "Tentangkami/profil_perusahaan";
$route['visimisi'] = "Tentangkami/visimisi";
$route['milestone'] = "Tentangkami/milestone";
$route['esg/joglo-tumiyono'] = "Esg/joglo";
$route['motto'] = "Tentangkami/motto";
$route['komisaris-direksi'] = "Tentangkami/komisaris";
$route['direksi'] = "Tentangkami/direksi";
$route['strukturcompany'] = "Tentangkami/strukturcompany";
$route['strukturorganisasi'] = "Tentangkami/strukturorganisasi";


$route['investor-informasipemegangsaham'] = "Investor/informasipemegangsaham";
$route['investor-kegiatan'] = "Investor/kegiatan";
$route['investor-informasipendukung'] = "Investor/informasipendukung";

$route['program-kami'] = "informasi/programkami";


$route['hubungi-kami-karir'] = "Karir/hubungi_kami";
$route['ikhtisar-hc'] = "Karir/ikhtisar_hc";
$route['penerimaan-pegawai'] = "Karir/penerimaan_pegawai";
$route['hubungan-investor'] = "Investor/hubunganinvestor";

$route['tatakelola-codeofconduct'] = "Investor/tatakelola1";
$route['tatakelola-pedomandewan'] = "Investor/tatakelola2";
$route['tatakelola-pedomandireksi'] = "Investor/tatakelola3";
$route['tatakelola-komitenominasi'] = "Investor/tatakelola4";
$route['tatakelola-komiteaudit'] = "Investor/tatakelola5";
$route['tatakelola-sekretarisperusahaan'] = "Investor/tatakelola6";
$route['tatakelola-internalaudit'] = "Investor/tatakelola7";

$route['produk'] = "Produk/index";
$route['produk1'] = "Produk/produk1";
$route['produk2'] = "Produk/produk2";
$route['produk3'] = "Produk/produk3";
$route['produk4'] = "Produk/produk4";
$route['produk5'] = "Produk/produk5";
$route['produk6'] = "Produk/produk6";

$route['lini1'] = "Linibisnis/lini1";
$route['lini2'] = "Linibisnis/lini2";
$route['lini3'] = "Linibisnis/lini3";
$route['lini4'] = "Linibisnis/lini4";
$route['lini5'] = "Linibisnis/lini5";


$route['berita'] = "Berita/index";

$route['kontrib'] = "Kontrib/index";
$route['kemitraan'] = "Kontrib/kemitraan";
$route['kemitraan_unggas'] = "Kontrib/kemitraan_unggas";
$route['laporan'] = "Kontrib/laporan";

$route['bisnis/(:any)'] = "main/bisnis/$1";
$route['(:any)'] = "berita/detail/$1";

$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";


// English Version
$route['ind'] = 'Main';
$route['eng/home'] = 'main/main_eng';
// $route['eng/product'] = "Main/produk";
$route['eng/about-us'] = "Tentangkami/profil_perusahaan_eng";
$route['eng/visimisi'] = "Tentangkami/visimisi_eng";
$route['eng/milestone'] = "Tentangkami/milestone_eng";
$route['eng/esg/joglo-tumiyono'] = "Esg/joglo_eng";
$route['eng/esg/kei'] = "Esg/kei_eng";
$route['eng/motto'] = "Tentangkami/motto_eng";
$route['eng/commissioners-directors'] = "Tentangkami/komisaris_eng";
$route['eng/directors'] = "Tentangkami/direksi_eng";
$route['eng/companystructure'] = "Tentangkami/strukturcompany_eng";
$route['eng/organizationalstructure'] = "Tentangkami/strukturorganisasi_eng";


$route['eng/investor-shareholderinformation'] = "Investor/informasipemegangsaham_eng";
$route['eng/investor-activity'] = "Investor/kegiatan_eng";
$route['eng/investor-supportinginformation '] = "Investor/informasipendukung_eng";

$route['eng/gallery-information'] = "informasi/gallery_eng";

$route['eng/contact-us-career'] = "Karir/hubungi_kami_eng";
$route['eng/overview-hc'] = "Karir/ikhtisar_hc_eng";
$route['eng/recruitment'] = "Karir/penerimaan_pegawai_eng";
$route['eng/investor-relationship'] = "Investor/hubunganinvestor_eng";

$route['eng/governance-codeofconduct'] = "Investor/tatakelola1_eng";
$route['eng/governance-boardguidelines'] = "Investor/tatakelola2_eng";
$route['eng/governance-directorsguidelines '] = "Investor/tatakelola3_eng";
$route['eng/governance-nominationcommittee'] = "Investor/tatakelola4_eng";
$route['eng/governance-auditcommittee'] = "Investor/tatakelola5_eng";
$route['eng/governance-companysecretary'] = "Investor/tatakelola6_eng";
$route['eng/governance-internalaudit'] = "Investor/tatakelola7_eng";

$route['eng/product'] = "Produk/index_eng";
$route['eng/product1'] = "Produk/produk1_eng";
$route['eng/product2'] = "Produk/produk2_eng";
$route['eng/product3'] = "Produk/produk3_eng";
$route['eng/product4'] = "Produk/produk4_eng";
$route['eng/product5'] = "Produk/produk5_eng";
$route['eng/product6'] = "Produk/produk6_eng";

$route['eng/businessline1'] = "Linibisnis/lini1_eng";
$route['eng/businessline2'] = "Linibisnis/lini2_eng";
$route['eng/businessline3'] = "Linibisnis/lini3_eng";
$route['eng/businessline4'] = "Linibisnis/lini4_eng";
$route['eng/businessline5'] = "Linibisnis/lini5_eng";


$route['eng/news'] = "Berita/index_eng";

$route['eng/contribution'] = "Kontrib/index_eng";
$route['eng/partnership'] = "Kontrib/kemitraan_eng";
$route['eng/poultrypartnership'] = "Kontrib/kemitraan_unggas_eng";
$route['eng/report'] = "Kontrib/laporan_eng";

$route['eng/bisnis/(:any)'] = "main/bisnis_eng/$1";
$route['eng/(:any)'] = "berita/detail_eng/$1";
