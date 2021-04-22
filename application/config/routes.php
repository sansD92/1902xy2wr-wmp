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

$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
