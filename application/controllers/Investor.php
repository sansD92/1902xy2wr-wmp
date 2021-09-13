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
public function pemegangsaham()
  {
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/investor/v_pemegangsaham2',$data);
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


  // English Version
  public function informasipemegangsaham_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_pemegangsaham_eng',$data);
}
public function kegiatan_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_kegiatan_eng',$data);
}
public function informasipendukung_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_informasipendukung_eng',$data);
}

public function tatakelola1_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola1_eng',$data);
}


public function tatakelola2_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola2_eng',$data);
}
public function tatakelola3_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola3_eng',$data);
}
public function tatakelola4_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola4_eng',$data);
}
public function tatakelola5_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola5_eng',$data);
}
public function tatakelola6_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola6_eng',$data);
}
public function tatakelola7_eng()
{

      $data['status']   = 'active';

      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/investor/v_tatakelola7_eng',$data);
}

public function hubunganinvestor_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC','0','10');


  $this->load->view('fronts/investor/v_hubunganinvestor_eng',$data);
}
public function laporan_keuangan()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/investor/v_laporankeuangan',$data);
}
}
