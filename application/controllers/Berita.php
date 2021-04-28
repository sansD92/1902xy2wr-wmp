<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }

  public function index()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['judul']   = 'Berita';
    $data['deskripsi']   = 'Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis','bisnis_status','bisnis_id','ASC');
    $this->load->view('fronts/berita/v_berita',$data);
  }

  public function detail($id)
	{

			$config['per_page'] = 4;
			$row = $this->Crud_m->get_by_id_post($id,'blogs_id','blogs','blogs_judul_seo');
			if ($this->uri->segment('4')==''){
				$dari = 0;
				}else{
					$dari = $this->uri->segment('4');
			}
			if ($row)
				{
          $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis','bisnis_status','bisnis_id','ASC');
          $data['status']   = 'active';
          $data['status_produk']   = '';
					$data['posts']            = $this->Crud_m->get_by_id_post($id,'blogs_id','blogs','blogs_judul_seo');
					$this->add_count_blogs($id);
					$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
          $this->load->view('fronts/berita/v_detail', $data);
				}
				else
						{
							$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>Blogs tidak ditemukan</b></div>');
							redirect(base_url());
						}
	}

  function add_count_blogs($id)
	{
			$check_visitor = $this->input->cookie(urldecode($id), FALSE);
			$ip = $this->input->ip_address();
			if ($check_visitor == false) {
					$cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => time() + 10, "secure" => false);
					$this->input->set_cookie($cookie);
					$this->Crud_m->update_counter_berita(urldecode($id));
			}
	}


}
