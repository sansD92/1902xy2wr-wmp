<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Informasi extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    /* memanggil function dari masing2 model yang akan digunakan */
    $this->load->model(array('Crud_m'));
  }
  public function faq()
{

			$data['status']   = 'active';

			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/informasi/v_faq',$data);
}