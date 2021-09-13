<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Esg extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    /* memanggil function dari masing2 model yang akan digunakan */
    $this->load->model(array('Crud_m'));
  }

   public function kei()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/esg/v_kei',$data);
}

public function joglo()
{

   $data['status']   = 'active';
   $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
   $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
   $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



$this->load->view('fronts/esg/v_joglo',$data);
}

public function tahfidzwidodomakmursulaimaniyah()
{

   $data['status']   = 'active';
   $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
   $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
   $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



$this->load->view('fronts/esg/v_tahfidzwidodomakmursulaimaniyah',$data);
}

  // English Version 
   public function kei_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/esg/v_kei_eng',$data);
}

public function joglo_eng()
{

   $data['status']   = 'active';
   $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
   $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
   $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



$this->load->view('fronts/esg/v_joglo_eng',$data);
}
}
