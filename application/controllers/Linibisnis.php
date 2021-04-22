<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Linibisnis extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }

  public function lini1()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['judul']   = 'Integrated Livestock';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis',$data);
  }
  public function lini2()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['judul']   = 'Meet Processing';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis',$data);
  }
  public function lini3()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['judul']   = 'Integrated Poultry';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis',$data);
  }
  public function lini4()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['judul']   = 'Commodity';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis',$data);
  }
  public function lini5()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['judul']   = 'Construction & Energy';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis',$data);
  }

}
