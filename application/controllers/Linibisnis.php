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
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
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
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Meet Processing';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis',$data);
  }
  public function lini3()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['status_lini']   = 'active';
    $data['judul']   = 'Integrated Poultry';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis',$data);
  }
  public function lini4()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
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
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Construction & Energy';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis',$data);
  }
  public function kategori(){

    $query = $this->model_utama->view_where('bisnis_kategori',array('bisnis_kategori_judul_seo' => $this->uri->segment(3)));
    if ($query->num_rows()<=0){
      redirect('main');
    }else{
      $row = $query->row_array();
      $jumlah= $this->model_utama->view_where('bisnis',array('bisnis_kategori_id' => $row['bisnis_kategori_id']))->num_rows();
      $config['full_tag_open']    = "<ul class='pagination'>";
      $config['full_tag_close']   = "</ul>";
      $config['num_tag_open']     = "<li>";
      $config['num_tag_close']    = "</li>";
      $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
      $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
      $config['next_link']        = "Selanjutnya";
      $config['next_tag_open']    = "<li>";
      $config['next_tagl_close']  = "</li>";
      $config['prev_link']        = "Sebelumnya";
      $config['prev_tag_open']    = "<li>";
      $config['prev_tagl_close']  = "</li>";
      $config['first_link']       = "Awal";
      $config['first_tag_open']   = "<li>";
      $config['first_tagl_close'] = "</li>";
      $config['last_link']        = 'Terakhir';
      $config['last_tag_open']    = "<li>";
      $config['last_tagl_close']  = "</li>";
      $config['base_url'] = base_url().'linibisnis/kategori_eng/'.$this->uri->segment(3);
      $config['total_rows'] = $jumlah;
      $config['per_page'] = 20;
      $config['per_page'] = 30;

      if ($this->uri->segment('4')==''){
        $dari = 0;
      }else{
        $dari = $this->uri->segment('4');
      }
      $data['title'] = "$row[bisnis_kategori_judul]";
      $data['gambar'] = "$row[bisnis_kategori_gambar]";
      $data['gambar_sub'] = "$row[bisnis_kategori_gambar_sub]";
      $data['deskripsi'] = "$row[bisnis_kategori_desk]";
      $data['rows'] = $row;
      $page1 = 'Y';

      if (is_numeric($dari)) {
        $data['judul'] = "Portal Berita CI";

        $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC',$dari,'10');
        $data['status']   = 'active';
        $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
        $data['linibisniskategori'] = $this->model_utama->view_join_one('bisnis','bisnis_kategori','bisnis_kategori_id',array('bisnis.bisnis_kategori_id' => $row['bisnis_kategori_id'],'bisnis_status'=>'publish'),'bisnis_id','asc',$dari,$config['per_page']);
          //    artikel populer

      }else{
        redirect('main');
      }
      $this->pagination->initialize($config);
      $this->load->view('fronts/linibisnis/v_linibisnis2', $data);
    }
  }

  // English Version
  public function lini1_eng()
  {

    $data['status']   = '';
    $data['status_produk']   = '';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['status_lini']   = 'active';
    $data['judul']   = 'Integrated Livestock';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis_eng',$data);
  }
  public function lini2_eng()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Meet Processing';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis_eng',$data);
  }
  public function lini3_eng()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['status_lini']   = 'active';
    $data['judul']   = 'Integrated Poultry';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis_eng',$data);
  }
  public function lini4_eng()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['status_lini']   = 'active';
    $data['judul']   = 'Commodity';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis_eng',$data);
  }
  public function lini5_eng()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Construction & Energy';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';

    $this->load->view('fronts/linibisnis/v_linibisnis_eng',$data);
  }
  public function kategori_eng(){

    $query = $this->model_utama->view_where('bisnis_kategori',array('bisnis_kategori_judul_seo' => $this->uri->segment(3)));
    if ($query->num_rows()<=0){
      redirect('main');
    }else{
      $row = $query->row_array();
      $jumlah= $this->model_utama->view_where('bisnis',array('bisnis_kategori_id' => $row['bisnis_kategori_id']))->num_rows();
      $config['full_tag_open']    = "<ul class='pagination'>";
      $config['full_tag_close']   = "</ul>";
      $config['num_tag_open']     = "<li>";
      $config['num_tag_close']    = "</li>";
      $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
      $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
      $config['next_link']        = "Selanjutnya";
      $config['next_tag_open']    = "<li>";
      $config['next_tagl_close']  = "</li>";
      $config['prev_link']        = "Sebelumnya";
      $config['prev_tag_open']    = "<li>";
      $config['prev_tagl_close']  = "</li>";
      $config['first_link']       = "Awal";
      $config['first_tag_open']   = "<li>";
      $config['first_tagl_close'] = "</li>";
      $config['last_link']        = 'Terakhir';
      $config['last_tag_open']    = "<li>";
      $config['last_tagl_close']  = "</li>";
      $config['base_url'] = base_url().'linibisnis/kategori_eng/'.$this->uri->segment(3);
      $config['total_rows'] = $jumlah;
      $config['per_page'] = 20;
      $config['per_page'] = 30;

      if ($this->uri->segment('4')==''){
        $dari = 0;
      }else{
        $dari = $this->uri->segment('4');
      }
      $data['title'] = "$row[bisnis_kategori_judul]";
      $data['gambar'] = "$row[bisnis_kategori_gambar]";
      $data['gambar_sub'] = "$row[bisnis_kategori_gambar_sub]";
      $data['deskripsi'] = "$row[bisnis_kategori_desk]";
      $data['rows'] = $row;
      $page1 = 'Y';

      if (is_numeric($dari)) {
        $data['judul'] = "Portal Berita CI";

        $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC',$dari,'10');
        $data['status']   = 'active';
        $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
        $data['linibisniskategori'] = $this->model_utama->view_join_one('bisnis','bisnis_kategori','bisnis_kategori_id',array('bisnis.bisnis_kategori_id' => $row['bisnis_kategori_id'],'bisnis_status'=>'publish'),'bisnis_id','asc',$dari,$config['per_page']);
          //    artikel populer

      }else{
        redirect('main');
      }
      $this->pagination->initialize($config);
      $this->load->view('fronts/linibisnis/v_linibisnis2_eng', $data);
    }
  }

}
