<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Main';
$route['login'] = "Aspanel/login";
$route['produk'] = "Main/produk";
$route['tentangkami'] = "Tentangkami/profil_perusahaan";
$route['visimisi'] = "Tentangkami/visimisi";
$route['milestone'] = "Tentangkami/milestone";
$route['motto'] = "Tentangkami/motto";
$route['komisaris-direksi'] = "Tentangkami/komisaris";
$route['direksi'] = "Tentangkami/direksi";
$route['strukturcompany'] = "Tentangkami/strukturcompany";
$route['strukturorganisasi'] = "Tentangkami/strukturorganisasi";


$route['investor-informasipemegangsaham'] = "Investor/informasipemegangsaham";
$route['investor-kegiatan'] = "Investor/kegiatan";
$route['investor-informasipendukung'] = "Investor/informasipendukung";

$route['hubungi-kami-karir'] = "Karir/hubungi_kami";
$route['ikhtisar-hc'] = "Karir/ikhtisar_hc";
$route['penerimaan-pegawai'] = "Karir/penerimaan_pegawai";

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
