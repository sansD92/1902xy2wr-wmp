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
  public function piagam_bod()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/new/v_piagam',$data);
}

public function piagam_komisaris()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/new/v_komisaris',$data);
}

public function pedoman_komite()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/new/v_komite',$data);
}
public function piagam_corporate()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/new/v_corporate',$data);
}
public function piagam_audit()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/new/v_audit',$data);
}
public function piagam_komiteaudit()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/new/v_komiteaudit',$data);
}

public function ikhtisarkeuangan()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');

  $this->load->view('fronts/tatakelola/new/v_ikhtisar',$data);
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

// English Version
  public function sekilas_gcg_eng()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_sgcg_eng',$data);
}
 public function penerapan_gcg_eng()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_pgcg_eng',$data);
}
public function pengendalian_gratifikasi_eng()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_pg_eng',$data);
}
public function etikabisnis_pemasok_eng()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_etikab_1_eng',$data);
}

public function kebijakan_kreditur_eng()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/v_etikab_2_eng',$data);
}

// pedoman kerja

public function pedomankerja_kodeetikwmp()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/pedomankerja/v_kodeetikwmp',$data);
}
public function pedomankerja_kodeetikpemasok()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/pedomankerja/v_kodeetikpemasok',$data);
}

public function pedomankerja_manajemenresiko()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/pedomankerja/v_manajemenresiko',$data);
}

public function pedomankerja_kebijakankreditur()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/pedomankerja/v_kebijakankreditur',$data);
}

public function pedomankerja_kebijakanseleksi()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/pedomankerja/v_kebijakankebijakanseleksi',$data);
}
public function pedomankerja_kebijakanantikorupsi()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/pedomankerja/v_kebijakanantikorupsi',$data);
}
public function pedomankerja_whistleblowing()
{
      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');




  $this->load->view('fronts/tatakelola/pedomankerja/v_whistleblowing',$data);
}
}
