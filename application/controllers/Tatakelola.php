<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tatakelola extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    /* memanggil function dari masing2 model yang akan digunakan */
    $this->load->model(array('Crud_m'));
  }
  public function sekilas_gcg()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_sgcg',$data);
}
 public function penerapan_gcg()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_pgcg',$data);
}
public function pengendalian_gratifikasi()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_pg',$data);
}
public function etikabisnis_pemasok()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_etikab_1',$data);
}

public function kebijakan_kreditur()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_etikab_2',$data);
}
}