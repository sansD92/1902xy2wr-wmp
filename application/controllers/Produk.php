<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    $this->load->model(array('M_produk'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }
public function index()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
       $data['posts_produk'] = $this->Crud_m->get_all_produk();



  $this->load->view('fronts/produk/v_index',$data);
}

  public function detail(){

      
      $query = $this->M_produk->view_join_oness('produk','produk_detail','id_produk',array('produk_seo' => $this->uri->segment(3)),'produk.id_produk','ASC',0,1);
      if ($query->num_rows()<=0){
        redirect('main');
      }else{

        $row = $query->row_array();
            $data['rows'] = $row;
        $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['produk_detail']            = $this->M_produk->get_by_id3($id);
        

        $this->load->view('fronts/produk/v_produk', $data);
      }
    }

     function details($ids){

      $row = $this->M_produk->get_by_id2($ids);
      /* melakukan pengecekan data, apabila ada maka akan ditampilkan */
      if ($row){
      /* memanggil function dari masing2 model yang akan digunakan */
      $produk = $this->M_produk->get_by_id2($ids);
      $data['produk']            = $produk;
       $data['produk_detail']            = $this->M_produk->get_by_id3($ids);
       $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $this->load->view('fronts/produk/v_produk', $data);
      }
  }
public function produk1()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['produk_pt']   = 'PT. Pasir Tengah';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_deskripsi']   = 'Kemitraan Sapi Potong PT Pasir Tengah dilaksanakan untuk membantu peternak rakyat yang sering mengalami permasalahan dalam usahanya. Kendala yang sering dialami oleh peternak rakyat pada saat melakukan usaha pemeliharaan sapi potong diantaranya. kesulitan akses modal di lembaga keuangan dan bunga yang tinggi, tidak ada transfer teknologi, resiko kegagalan perkawinan, resiko kematian, harga panen yang bergantung pada tengkulak, sapi yang tidak dibayarkan, dll.';
  $data['produk_foto1']   = '350.jpg';
  $data['produk_foto2']   = 'livestock2.jpg';
  $data['produk_foto3']   = 'lv3.jpg';
  $data['produk_foto4']   = 'lv4.jpg';
  $data['produk_foto5']   = 'lv5.jpg';
  $data['produk_foto6']   = 'live6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk',$data);
}
public function produk2()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Cianjur Arta Makmur';
  $data['produk_deskripsi']   = 'Cianjur Arta Makmur merupakan unit bisnis dari Widodo Makmur Perkasa yang bergerak di bidang perdagangan poduk daging sapi, beroperasi sejak tahun 2008 yang berbasis ‘Integrated System‘. Sapi-sapi bakalan yang didatangkan dari Australia dipelihara di Cianjur Farm PT. Pasir Tengah dan kemudian diproses oleh Cianjur Arta Makmur menjadi produk daging sapi segar berkualitas prima (premium and high quality chilled beef), beku (frozen beef) dan produk-produk sampingan.';
  $data['produk_foto1']   = 'meat1.jpg';
  $data['produk_foto2']   = 'meat2.jpg';
  $data['produk_foto3']   = 'meat3.jpg';
  $data['produk_foto4']   = 'meat4.jpg';
  $data['produk_foto5']   = 'meat5.jpg';
  $data['produk_foto6']   = 'meat6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk',$data);
}
public function produk3()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Prima Widodo Makmur';
  $data['produk_deskripsi']   = 'PT Prima Widodo Makmur (PWM) bergerak di bidang produksi pangan olahan yang bersumber dari daging sapi dan ayam meliputi bakso, sosis, naget ayam dalam berbagai varian terutama untuk memenuhi kebutuhan hotel, restoran, retail dan distributor. Rumah Potong Hewan (RPH) kami berstandar Internasional dan terbesar di Indonesia yang menerapkan standar higienitas tinggi untuk menjamin kualitas produknya.';
  $data['produk_foto1']   = 'meatpros1.jpg';
  $data['produk_foto2']   = 'meatpros2.jpg';
  $data['produk_foto3']   = 'meatpros3.jpg';
  $data['produk_foto4']   = 'meatpros4.jpg';
  $data['produk_foto5']   = 'meatpros5.jpg';
  $data['produk_foto6']   = 'meatpros6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk',$data);
}
public function produk4()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Garut Makmur Perkasa';
  $data['produk_deskripsi']   = 'PT Garut Makmur Perkasa (GMP) merupakan perusahaan yang memproduksi kulit sebagai bahan baku industri fashion, upholstery dan automotive. Berdiri pada tahun 2015 dan resmi menjadi anak perusahaan dari lini bisnis MEAT di bawah manajemen PT Cianjur Arta Makmur (CAM) yang merupakan salah satu lini bisnis di bawah manajemen PT Widodo Makmur Perkasa (WMP).';
  $data['produk_foto1']   = 'leather1.jpg';
  $data['produk_foto2']   = 'leather2.jpg';
  $data['produk_foto3']   = 'leather3.jpg';
  $data['produk_foto4']   = 'leather4.jpg';
  $data['produk_foto5']   = 'leather5.jpg';
  $data['produk_foto6']   = 'leather6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk',$data);
}
public function produk5()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Widodo Makmur Unggas';
  $data['produk_deskripsi']   = 'Widodo Makmur Unggas adalah bisnis unggas yang terintegrasi secara vertikal yang mengendalikan pabrik pakan skala besar, peternakan pembibitan, pabrik pembenihan, peternakan komersial, peternakan layer, rumah potong hewan dan operasi kemitraan terkait. Di bawah dukungan penuh semangat dari tim kami yang cakap, sistem manajemen inovatif, pengetahuan pertanian yang mendalam, kolaborasi komunitas penuh, dan fasilitas serta teknologi yang patut dicontoh; kami berhasil memastikan pengiriman yang andal dari produk berkualitas tinggi kami ke seluruh Indonesia.';
  $data['produk_foto1']   = 'poultry1.jpg';
  $data['produk_foto2']   = 'poultry2.jpg';
  $data['produk_foto3']   = 'poultry3.jpg';
  $data['produk_foto4']   = 'poultry4.jpg';
  $data['produk_foto5']   = 'poultry5.jpg';
  $data['produk_foto6']   = 'poultry6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk',$data);
}
public function produk6()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Widodofood Makmur Sejahtera';
  $data['produk_deskripsi']   = 'PT WidodoFood Mkamur Sejahtera (WMS) adalah anak perusahaan yang bergerak dalam bisnis Food. WMS bergerak di bidang produksi beras kemasan. Komitmen WMP yang tercantum dalam visi, menjadi jembatan kesejahteraan petani dan peternak diwujudkan dengan menjadikan para petani lokal sebagai mitra pemasok bahan baku beras yang dibutuhkan. Sumber bahan baku diperoleh dari sentra lumbung-lumbung padi di Pulau Jawa.';
  $data['produk_foto1']   = 'comodity1.jpg';
  $data['produk_foto2']   = 'comodity2.jpg';
  $data['produk_foto3']   = 'comodity3.jpg';
  $data['produk_foto4']   = 'comodity4.jpg';
  $data['produk_foto5']   = 'comodity5.jpg';
  $data['produk_foto6']   = 'comodity6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk',$data);
}

// English Version
public function index_eng()
{

      $data['status']   = 'active';
      $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
       $data['posts_produk'] = $this->Crud_m->get_all_produk();



  $this->load->view('fronts/produk/v_index_eng',$data);
}

  public function detail_eng(){

      
      $query = $this->M_produk->view_join_oness('produk','produk_detail','id_produk',array('produk_seo' => $this->uri->segment(3)),'produk.id_produk','ASC',0,1);
      if ($query->num_rows()<=0){
        redirect('main');
      }else{

        $row = $query->row_array();
            $data['rows'] = $row;
        $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $data['produk_detail']            = $this->M_produk->get_by_id3($id);
        

        $this->load->view('fronts/produk/v_produk_eng', $data);
      }
    }

     function details_eng($ids){

      $row = $this->M_produk->get_by_id2($ids);
      /* melakukan pengecekan data, apabila ada maka akan ditampilkan */
      if ($row){
      /* memanggil function dari masing2 model yang akan digunakan */
      $produk = $this->M_produk->get_by_id2($ids);
      $data['produk']            = $produk;
       $data['produk_detail']            = $this->M_produk->get_by_id3($ids);
       $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
      $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
      $this->load->view('fronts/produk/v_produk_eng', $data);
      }
  }
public function produk1_eng()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['produk_pt']   = 'PT. Pasir Tengah';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_deskripsi']   = 'Kemitraan Sapi Potong PT Pasir Tengah dilaksanakan untuk membantu peternak rakyat yang sering mengalami permasalahan dalam usahanya. Kendala yang sering dialami oleh peternak rakyat pada saat melakukan usaha pemeliharaan sapi potong diantaranya. kesulitan akses modal di lembaga keuangan dan bunga yang tinggi, tidak ada transfer teknologi, resiko kegagalan perkawinan, resiko kematian, harga panen yang bergantung pada tengkulak, sapi yang tidak dibayarkan, dll.';
  $data['produk_foto1']   = '350.jpg';
  $data['produk_foto2']   = 'livestock2.jpg';
  $data['produk_foto3']   = 'lv3.jpg';
  $data['produk_foto4']   = 'lv4.jpg';
  $data['produk_foto5']   = 'lv5.jpg';
  $data['produk_foto6']   = 'live6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk_eng',$data);
}
public function produk2_eng()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Cianjur Arta Makmur';
  $data['produk_deskripsi']   = 'Cianjur Arta Makmur merupakan unit bisnis dari Widodo Makmur Perkasa yang bergerak di bidang perdagangan poduk daging sapi, beroperasi sejak tahun 2008 yang berbasis ‘Integrated System‘. Sapi-sapi bakalan yang didatangkan dari Australia dipelihara di Cianjur Farm PT. Pasir Tengah dan kemudian diproses oleh Cianjur Arta Makmur menjadi produk daging sapi segar berkualitas prima (premium and high quality chilled beef), beku (frozen beef) dan produk-produk sampingan.';
  $data['produk_foto1']   = 'meat1.jpg';
  $data['produk_foto2']   = 'meat2.jpg';
  $data['produk_foto3']   = 'meat3.jpg';
  $data['produk_foto4']   = 'meat4.jpg';
  $data['produk_foto5']   = 'meat5.jpg';
  $data['produk_foto6']   = 'meat6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk_eng',$data);
}
public function produk3_eng()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Prima Widodo Makmur';
  $data['produk_deskripsi']   = 'PT Prima Widodo Makmur (PWM) bergerak di bidang produksi pangan olahan yang bersumber dari daging sapi dan ayam meliputi bakso, sosis, naget ayam dalam berbagai varian terutama untuk memenuhi kebutuhan hotel, restoran, retail dan distributor. Rumah Potong Hewan (RPH) kami berstandar Internasional dan terbesar di Indonesia yang menerapkan standar higienitas tinggi untuk menjamin kualitas produknya.';
  $data['produk_foto1']   = 'meatpros1.jpg';
  $data['produk_foto2']   = 'meatpros2.jpg';
  $data['produk_foto3']   = 'meatpros3.jpg';
  $data['produk_foto4']   = 'meatpros4.jpg';
  $data['produk_foto5']   = 'meatpros5.jpg';
  $data['produk_foto6']   = 'meatpros6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk_eng',$data);
}
public function produk4_eng()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Garut Makmur Perkasa';
  $data['produk_deskripsi']   = 'PT Garut Makmur Perkasa (GMP) merupakan perusahaan yang memproduksi kulit sebagai bahan baku industri fashion, upholstery dan automotive. Berdiri pada tahun 2015 dan resmi menjadi anak perusahaan dari lini bisnis MEAT di bawah manajemen PT Cianjur Arta Makmur (CAM) yang merupakan salah satu lini bisnis di bawah manajemen PT Widodo Makmur Perkasa (WMP).';
  $data['produk_foto1']   = 'leather1.jpg';
  $data['produk_foto2']   = 'leather2.jpg';
  $data['produk_foto3']   = 'leather3.jpg';
  $data['produk_foto4']   = 'leather4.jpg';
  $data['produk_foto5']   = 'leather5.jpg';
  $data['produk_foto6']   = 'leather6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk_eng',$data);
}
public function produk5_eng()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Widodo Makmur Unggas';
  $data['produk_deskripsi']   = 'Widodo Makmur Unggas adalah bisnis unggas yang terintegrasi secara vertikal yang mengendalikan pabrik pakan skala besar, peternakan pembibitan, pabrik pembenihan, peternakan komersial, peternakan layer, rumah potong hewan dan operasi kemitraan terkait. Di bawah dukungan penuh semangat dari tim kami yang cakap, sistem manajemen inovatif, pengetahuan pertanian yang mendalam, kolaborasi komunitas penuh, dan fasilitas serta teknologi yang patut dicontoh; kami berhasil memastikan pengiriman yang andal dari produk berkualitas tinggi kami ke seluruh Indonesia.';
  $data['produk_foto1']   = 'poultry1.jpg';
  $data['produk_foto2']   = 'poultry2.jpg';
  $data['produk_foto3']   = 'poultry3.jpg';
  $data['produk_foto4']   = 'poultry4.jpg';
  $data['produk_foto5']   = 'poultry5.jpg';
  $data['produk_foto6']   = 'poultry6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk_eng',$data);
}
public function produk6_eng()
{
  $data['status']   = '';
  $data['status_produk']   = 'active';
  $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  $data['produk_pt']   = 'PT. Widodofood Makmur Sejahtera';
  $data['produk_deskripsi']   = 'PT WidodoFood Mkamur Sejahtera (WMS) adalah anak perusahaan yang bergerak dalam bisnis Food. WMS bergerak di bidang produksi beras kemasan. Komitmen WMP yang tercantum dalam visi, menjadi jembatan kesejahteraan petani dan peternak diwujudkan dengan menjadikan para petani lokal sebagai mitra pemasok bahan baku beras yang dibutuhkan. Sumber bahan baku diperoleh dari sentra lumbung-lumbung padi di Pulau Jawa.';
  $data['produk_foto1']   = 'comodity1.jpg';
  $data['produk_foto2']   = 'comodity2.jpg';
  $data['produk_foto3']   = 'comodity3.jpg';
  $data['produk_foto4']   = 'comodity4.jpg';
  $data['produk_foto5']   = 'comodity5.jpg';
  $data['produk_foto6']   = 'comodity6.jpg';
  $data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis_kategori','bisnis_kategori_status','bisnis_kategori_id','ASC');
  $this->load->view('fronts/produk/v_produk_eng',$data);
}
}
