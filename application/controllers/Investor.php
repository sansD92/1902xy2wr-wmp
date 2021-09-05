<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Investor extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    /* memanggil function dari masing2 model yang akan digunakan */
    $this->load->model(array('Crud_m'));
  }
  public function informasipemegangsaham()
{

			$data['status']   = 'active';

			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_pemegangsaham',$data);
}
public function kegiatan()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_kegiatan',$data);
}
public function informasipendukung()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_informasipendukung',$data);
}

public function tatakelola1()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola1',$data);
}


public function tatakelola2()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola2',$data);
}
public function tatakelola3()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola3',$data);
}
public function tatakelola4()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola4',$data);
}
public function tatakelola5()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola5',$data);
}
public function tatakelola6()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola6',$data);
}
public function tatakelola7()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola7',$data);
}

public function hubunganinvestor()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC','0','10');


  $this->load->view('fronts/investor/v_hubunganinvestor',$data);
}
}
