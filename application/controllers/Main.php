<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {



  public function index()
	{

    $jumlah= $this->Crud_m->views_row('blogs','blogs_status','blogs_id','DESC');
    $config['total_rows'] = $jumlah;
    $config['per_page_slider'] = 6;
    $config['per_page_bisnis'] = 10;
    if ($this->uri->segment('4')==''){
      $dari = 0;
    }else{
      $dari = $this->uri->segment('4');
    }

    if (is_numeric($dari)) {
			$config['per_page'] = 6;
			$data['status']   = 'active';
      $data['status_produk']   = '';
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
			$data['posts']= $this->Crud_m->view_one_limit('blogs','blogs_status','blogs_id','desc',$dari,$config['per_page']);
      $data['posts_logo']= $this->Crud_m->view_one_limit('logo','logo_status','logo_urutan','ASC',$dari,'20');
      $data['posts_slider'] = $this->Crud_m->view_one_limit('slider','slider_status','slider_id','ASC',$dari,$config['per_page_slider']);
      $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC',$dari,'10');
      $data['posts_blogs'] = $this->db->query("select * from blogs a join blogs_kategori b on a.blogs_kategori_id = b.blogs_kategori_id  where   a.blogs_status = 'publish' and (a.blogs_kategori_id = '1' or a.blogs_kategori_id = '2' or a.blogs_kategori_id = '3') ORDER BY  blogs_id desc
			")->result();
		}else{
			redirect('main');
		}
		$this->load->view('fronts/index',$data);
  }
  public function bisnis($id)
	{

			$config['per_page'] = 4;


			$row = $this->Crud_m->get_by_id_post($id,'bisnis_id','bisnis','bisnis_judul_seo');
			if ($this->uri->segment('4')==''){
				$dari = 0;
				}else{
					$dari = $this->uri->segment('4');
			}
			if ($row)
				{
          $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC',$dari,'10');
          $data['status']   = 'active';
          $data['status_produk']   = '';
					$data['posts']            = $this->Crud_m->get_by_id_post($id,'bisnis_id','bisnis','bisnis_judul_seo');
					$this->add_count_bisnis($id);
					$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
          $this->load->view('fronts/linibisnis/v_linibisnis', $data);
				}
				else
						{
							$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>Bisnis tidak ditemukan</b></div>');
							redirect(base_url());
						}
	}
	function add_count_bisnis($id)
	{
			$check_visitor = $this->input->cookie(urldecode($id), FALSE);
			$ip = $this->input->ip_address();
			if ($check_visitor == false) {
					$cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => time() + 10, "secure" => false);
					$this->input->set_cookie($cookie);
					$this->Crud_m->update_counter_bisnis(urldecode($id));
			}
	}


	// English Version
	public function main_eng()
	{
		$jumlah= $this->Crud_m->views_row('blogs','blogs_status','blogs_id','DESC');
		$config['total_rows'] = $jumlah;
		$config['per_page_slider'] = 6;
		$config['per_page_bisnis'] = 10;
		if ($this->uri->segment('4')==''){
		 	$dari = 0;
		}else{
		 	$dari = $this->uri->segment('4');
		}

		if (is_numeric($dari)) {
				$config['per_page'] = 6;
				$data['status']   = 'active';
		  $data['status_produk']   = '';
				$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
				$data['posts']= $this->Crud_m->view_one_limit('blogs','blogs_status','blogs_id','desc',$dari,$config['per_page']);
		  $data['posts_logo']= $this->Crud_m->view_one_limit('logo','logo_status','logo_urutan','ASC',$dari,'20');
		  $data['posts_slider'] = $this->Crud_m->view_one_limit('slider','slider_status','slider_id','ASC',$dari,$config['per_page_slider']);
		  $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC',$dari,'10');
		}else{
			redirect('main/main_eng');
		}
		$this->load->view('fronts/index_eng',$data);
	}
	
  public function bisnis_eng($id)
	{

			$config['per_page'] = 4;


			$row = $this->Crud_m->get_by_id_post($id,'bisnis_id','bisnis','bisnis_judul_seo');
			if ($this->uri->segment('4')==''){
				$dari = 0;
				}else{
					$dari = $this->uri->segment('4');
			}
			if ($row)
				{
          $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC',$dari,'10');
          $data['status']   = 'active';
          $data['status_produk']   = '';
					$data['posts']            = $this->Crud_m->get_by_id_post($id,'bisnis_id','bisnis','bisnis_judul_seo');
					$this->add_count_bisnis($id);
					$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
          $this->load->view('fronts/linibisnis/v_linibisnis_eng', $data);
				}
				else
						{
							$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>Bisnis tidak ditemukan</b></div>');
							redirect(base_url());
						}
	}
	function add_count_bisnis_eng($id)
	{
			$check_visitor = $this->input->cookie(urldecode($id), FALSE);
			$ip = $this->input->ip_address();
			if ($check_visitor == false) {
					$cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => time() + 10, "secure" => false);
					$this->input->set_cookie($cookie);
					$this->Crud_m->update_counter_bisnis(urldecode($id));
			}
	}

}
