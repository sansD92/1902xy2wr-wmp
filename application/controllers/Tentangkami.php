<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tentangkami extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    /* memanggil function dari masing2 model yang akan digunakan */
    $this->load->model(array('Crud_m'));
  }

   public function profil_perusahaan()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_profil_perusahaan',$data);
}
  public function visimisi()
{

			$data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_visimisi',$data);
}

public function motto()
{

			$data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_motto',$data);
}
 public function milestone()
{

			$data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_milestone',$data);
}
public function komisaris()
{

			$data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
       $data['posts_komisaris'] = $this->Crud_m->get_all_komisaris();
       $data['posts_direksi'] = $this->Crud_m->get_all_direksi();
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_dewankomisaris',$data);
}

public function direksi()
{

			$data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['posts_direksi'] = $this->Crud_m->get_all_direksi();
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_dewandireksi',$data);
}
public function strukturcompany()
{

			$data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_strukturcompany',$data);
}
public function strukturorganisasi()
{

			$data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_strukturorganisasi',$data);
}

  // English Version
   public function profil_perusahaan_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_profil_perusahaan_eng',$data);
}
  public function visimisi_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_visimisi_eng',$data);
}

public function motto_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_motto_eng',$data);
}
 public function milestone_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_milestone_eng',$data);
}
public function komisaris_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
       $data['posts_komisaris'] = $this->Crud_m->get_all_komisaris();
       $data['posts_direksi'] = $this->Crud_m->get_all_direksi();
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_dewankomisaris_eng',$data);
}

public function direksi_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['posts_direksi'] = $this->Crud_m->get_all_direksi();
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_dewandireksi_eng',$data);
}
public function strukturcompany_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_strukturcompany_eng',$data);
}
public function strukturorganisasi_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');



  $this->load->view('fronts/tentangkami/v_strukturorganisasi_eng',$data);
}
}
