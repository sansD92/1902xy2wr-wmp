<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontrib extends CI_Controller {

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
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Kesatriaan Entrepreneur Indonesia';
    $data['foto'] = 'joglo222.JPG';
    $data['deskripsi']   = '<p style="text-align:justify;">Kesatriaan Entrepreneur Indonesia (KEI) yang berpusat di  Joglo Tumiyono, Desa Ngerangan, Bayat, Kabupaten Klaten ini merupakan wadah komunitas bagi para petani dan peternak milenial untuk meningkatkan pengetahuan dan wawasannya di bidang pertanian dan peternakan, pengadaan workshop secara berkesinambungan dan membantu mendapatkan pendanaan dari perbankan dan lembaga keuangan dengan menjadikan Widodo Makmur sebagai off taker dari produk yang dihasilkan.</p>

   ';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/kontrib/v_kontrib',$data);
  }

  public function kemitraan()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Kemitraan Sapi ';
    $data['deskripsi']   = '<p style="text-align:justify;">Gerakan kemitraan peternak sapi potong Indonesia pertama kali digulirkan oleh PT Pasir Tengah sebagai bentuk dukungan terhadap produk pemerintah dalam peningkatan jumlah stok sapi dalam negeri dengan melibatkan para peternak sebagai mitra. Program ini diinagurasi oleh wakil gubernur Jawa Tengah, di Wonogiri pada tahun 2017. Program kemitraan ini menyinergi kan berbagai stakeholder diantaranya perbankan sebagai penyedia modal, Perusahaan Asuransi sebagai penjamin, Peternak sebagai pelaku dan mitra PT Pasir Tengah. Berikut peran PT Pasir Tengah:</p>
    <p style="text-align:justify;">Peran PT Pasir Tengah : 1. Pemberi referensi peternak pada Bank atau lembaga keuangan 2. Penyedia bibit sapi 3. Penyedia pakan konsentrat bernutrisi tinggi 4. Pendampingan & transfer knowledge 5. Off taker sebagai pengambil hasil panen</p>';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/kontrib/v_kontrib',$data);
  }
  public function kemitraan_unggas()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['foto'] = '';
    $data['judul']   = 'Kemitraan Unggas';
    $data['deskripsi']   = '<h3>PT Widodo Makmur Unggas Komitmen Dukung Penguatan 10.000 UMKM</h3>
    <p style="text-align:justify;">Perusahaan peternakan ayam terintegrasi, PT Widodo Makmur Unggas (WMU) menjalin kerja sama dengan Mitra Usaha Kecil Mikro dan Menengah (Mitra UMKM) Daerah guna mendukung penguatan 10.000 UMKM di Indonesia. Kerja sama ini merupakan bagian dari komitmen WMU untuk maju dan tumbuh bersama dalam menyediakan produk pangan hewani berkualitas bagi seluruh masyarakat Indonesia.</p>
    <p style="text-align:justify;">Melalui kerja sama ini, WMU akan menjamin pengadaan bahan baku yang halal dan berkualitas. Tidak hanya itu, WMU akan memberikan benefit bagi UMKM seperti adanya potongan harga dan kemudahan dalam skema pembayaran.</p>
    <p style="text-align:justify;">Seremonial penandatanganan MoU kerja sama ini dilakukan secara virtual bersama 3 mitra pengelola UMKM, yaitu Holistika Institute, The Local Enablers dan Lokalkarya. Mitra UMKM ini mayoritas bergerak di industri makanan olahan. Dengan memastikan kualitas bahan baku serta pendampingan dalam peningkatan kualitas produk yang diberikan oleh WMU bisa menjadi salah satu solusi bangkitnya UMKM di tengah era adaptasi normal baru.</p>';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/kontrib/v_kontrib',$data);
  }
  public function laporan()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Laporan Berkelanjutan';
    $data['deskripsi']   = '<p style="text-align:justify;">Kalimat masih dalam perancangan</p>
    ';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/kontrib/v_kontrib',$data);
  }

  public function kategori(){

    $query = $this->model_utama->view_where('kontribs_kategori',array('kontribs_kategori_judul_seo' => $this->uri->segment(3)));
    if ($query->num_rows()<=0){
      redirect('main');
    }else{
      $row = $query->row_array();
      $jumlah= $this->model_utama->view_where('kontribs',array('kontribs_kategori_id' => $row['kontribs_kategori_id']))->num_rows();
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
      $config['base_url'] = base_url().'kontrib/kategori/'.$this->uri->segment(3);
      $config['total_rows'] = $jumlah;
      $config['per_page'] = 20;
      $config['per_page'] = 30;

      if ($this->uri->segment('4')==''){
        $dari = 0;
      }else{
        $dari = $this->uri->segment('4');
      }

      $data['rows'] = $row;
      $page1 = 'Y';

      if (is_numeric($dari)) {

        $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC',$dari,'10');
        $data['status']   = 'active';
        $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
        $data['post_terbaru'] = $this->model_utama->view_join_one('kontribs','kontribs_kategori','kontribs_kategori_id',array('kontribs.kontribs_kategori_id' => $row['kontribs_kategori_id'],'kontribs_status'=>'publish'),'kontribs_id','asc',$dari,$config['per_page']);
          //    artikel populer

      }else{
        redirect('main');
      }
      $this->pagination->initialize($config);
      $this->load->view('fronts/kontrib/v_kontrib', $data);
    }
  }

  // English Version
  public function index_eng()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Kesatriaan Entrepreneur Indonesia';
    $data['foto'] = 'joglo222.JPG';
    $data['deskripsi']   = '<p style="text-align:justify;">Kesatriaan Entrepreneur Indonesia (KEI) yang berpusat di  Joglo Tumiyono, Desa Ngerangan, Bayat, Kabupaten Klaten ini merupakan wadah komunitas bagi para petani dan peternak milenial untuk meningkatkan pengetahuan dan wawasannya di bidang pertanian dan peternakan, pengadaan workshop secara berkesinambungan dan membantu mendapatkan pendanaan dari perbankan dan lembaga keuangan dengan menjadikan Widodo Makmur sebagai off taker dari produk yang dihasilkan.</p>

   ';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/kontrib/v_kontrib_eng',$data);
  }

  public function kemitraan_eng()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Kemitraan Sapi ';
    $data['deskripsi']   = '<p style="text-align:justify;">Gerakan kemitraan peternak sapi potong Indonesia pertama kali digulirkan oleh PT Pasir Tengah sebagai bentuk dukungan terhadap produk pemerintah dalam peningkatan jumlah stok sapi dalam negeri dengan melibatkan para peternak sebagai mitra. Program ini diinagurasi oleh wakil gubernur Jawa Tengah, di Wonogiri pada tahun 2017. Program kemitraan ini menyinergi kan berbagai stakeholder diantaranya perbankan sebagai penyedia modal, Perusahaan Asuransi sebagai penjamin, Peternak sebagai pelaku dan mitra PT Pasir Tengah. Berikut peran PT Pasir Tengah:</p>
    <p style="text-align:justify;">Peran PT Pasir Tengah : 1. Pemberi referensi peternak pada Bank atau lembaga keuangan 2. Penyedia bibit sapi 3. Penyedia pakan konsentrat bernutrisi tinggi 4. Pendampingan & transfer knowledge 5. Off taker sebagai pengambil hasil panen</p>';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/kontrib/v_kontrib_eng',$data);
  }
  public function kemitraan_unggas_eng()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['foto'] = '';
    $data['judul']   = 'Kemitraan Unggas';
    $data['deskripsi']   = '<h3>PT Widodo Makmur Unggas Komitmen Dukung Penguatan 10.000 UMKM</h3>
    <p style="text-align:justify;">Perusahaan peternakan ayam terintegrasi, PT Widodo Makmur Unggas (WMU) menjalin kerja sama dengan Mitra Usaha Kecil Mikro dan Menengah (Mitra UMKM) Daerah guna mendukung penguatan 10.000 UMKM di Indonesia. Kerja sama ini merupakan bagian dari komitmen WMU untuk maju dan tumbuh bersama dalam menyediakan produk pangan hewani berkualitas bagi seluruh masyarakat Indonesia.</p>
    <p style="text-align:justify;">Melalui kerja sama ini, WMU akan menjamin pengadaan bahan baku yang halal dan berkualitas. Tidak hanya itu, WMU akan memberikan benefit bagi UMKM seperti adanya potongan harga dan kemudahan dalam skema pembayaran.</p>
    <p style="text-align:justify;">Seremonial penandatanganan MoU kerja sama ini dilakukan secara virtual bersama 3 mitra pengelola UMKM, yaitu Holistika Institute, The Local Enablers dan Lokalkarya. Mitra UMKM ini mayoritas bergerak di industri makanan olahan. Dengan memastikan kualitas bahan baku serta pendampingan dalam peningkatan kualitas produk yang diberikan oleh WMU bisa menjadi salah satu solusi bangkitnya UMKM di tengah era adaptasi normal baru.</p>';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/kontrib/v_kontrib_eng',$data);
  }
  public function laporan_eng()
  {
    $data['status']   = '';
    $data['status_produk']   = '';
    $data['status_lini']   = 'active';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $data['judul']   = 'Laporan Berkelanjutan';
    $data['deskripsi']   = '<p style="text-align:justify;">Kalimat masih dalam perancangan</p>
    ';
    $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
    $this->load->view('fronts/kontrib/v_kontrib_eng',$data);
  }

  public function kategori_eng(){

    $query = $this->model_utama->view_where('kontribs_kategori',array('kontribs_kategori_judul_seo' => $this->uri->segment(3)));
    if ($query->num_rows()<=0){
      redirect('main');
    }else{
      $row = $query->row_array();
      $jumlah= $this->model_utama->view_where('kontribs',array('kontribs_kategori_id' => $row['kontribs_kategori_id']))->num_rows();
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
      $config['base_url'] = base_url().'kontrib/kategori_eng/'.$this->uri->segment(3);
      $config['total_rows'] = $jumlah;
      $config['per_page'] = 20;
      $config['per_page'] = 30;

      if ($this->uri->segment('4')==''){
        $dari = 0;
      }else{
        $dari = $this->uri->segment('4');
      }

      $data['rows'] = $row;
      $page1 = 'Y';

      if (is_numeric($dari)) {

        $data['posts_bisnis'] = $this->Crud_m->view_one_limit('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC',$dari,'10');
        $data['status']   = 'active';
        $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
        $data['post_terbaru'] = $this->model_utama->view_join_one('kontribs','kontribs_kategori','kontribs_kategori_id',array('kontribs.kontribs_kategori_id' => $row['kontribs_kategori_id'],'kontribs_status'=>'publish'),'kontribs_id','asc',$dari,$config['per_page']);
          //    artikel populer

      }else{
        redirect('main');
      }
      $this->pagination->initialize($config);
      $this->load->view('fronts/kontrib/v_kontrib_eng', $data);
    }
  }
}
