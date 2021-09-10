<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Karir extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    /* memanggil function dari masing2 model yang akan digunakan */
    $this->load->model(array('Crud_m'));
  }
  public function hubungi_kami()
{

			  $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/karir/v_hubungikami',$data);
}
public function ikhtisar_hc()
{

        $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/karir/v_ikhtisar',$data);
}
public function penerimaan_pegawai()
{

        $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/karir/v_penerimaan',$data);
}

  // English Version
  public function hubungi_kami_eng()
{

        $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/karir/v_hubungikami_eng',$data);
}
public function ikhtisar_hc_eng()
{

        $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/karir/v_ikhtisar_eng',$data);
}
public function penerimaan_pegawai_eng()
{

        $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/karir/v_penerimaan_eng',$data);
}
}
