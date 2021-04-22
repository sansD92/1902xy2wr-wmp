<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontrib extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }

  public function index()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['judul']   = 'Berita';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/kontrib/v_berita',$data);
  }


}
