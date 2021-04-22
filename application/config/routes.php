<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Main';
$route['login'] = "Aspanel/login";
$route['produk'] = "Main/produk";
$route['visimisi'] = "Tentangkami/visimisi";
$route['milestone'] = "Tentangkami/milestone";
$route['komisaris'] = "Tentangkami/komisaris";
$route['direksi'] = "Tentangkami/direksi";
$route['strukturcompany'] = "Tentangkami/strukturcompany";
$route['strukturorganisasi'] = "Tentangkami/strukturorganisasi";


$route['investor-informasipemegangsaham'] = "Investor/informasipemegangsaham";
$route['investor-kegiatan'] = "Investor/kegiatan";
$route['investor-informasipendukung'] = "Investor/informasipendukung";

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

$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
