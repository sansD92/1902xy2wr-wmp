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
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/informasi/v_faq',$data);
  }
  public function gallery()
  {
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/informasi/v_gallery',$data);
  }

   public function kegiatan_perusahaan()
  {
    $kegiatan = '2';
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['post_kegiatan']             = $this->Crud_m->get_all_kegiatan($kegiatan);
    $this->load->view('fronts/informasi/v_kegiatan',$data);
  }
}
