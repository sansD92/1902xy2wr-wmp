<?php
class M_produk extends CI_Model{
 public $table = 'produk';
  public $ids    = 'id_produk';
  public $order = 'DESC';




 function get_by_id2($ids)
  {
    $this->db->where($this->ids, $ids);
    $this->db->or_where('produk_Seo', $ids);
    // $this->db->join('users', 'users.id_users = tbl_pelatihan.id_users','inner');
    return $this->db->get('produk')->result_array();
  }
  function get_by_id3($ids)
  {
    $this->db->where('produk_detail.id_produk', $ids);
    $this->db->or_where('produk.produk_seo', $ids);
    $this->db->join('produk', 'produk.id_produk = produk_detail.id_produk','inner');
    return $this->db->get('produk_detail')->result_array();
  }


  function get_by_tatakelolacat($ids)
   {
     $this->db->where($this->ids, $ids);
     $this->db->or_where('tatakelola_cat_judul_seo', $ids);
     // $this->db->join('users', 'users.id_users = tbl_pelatihan.id_users','inner');
     return $this->db->get('tatakelola_kategori')->result_array();
   }
  function get_by_tatakelola($ids)
  {
    $this->db->where('tatakelola_kategori.tatakelola_cat_id', $ids);
    $this->db->or_where('tatakelola_kategori.tatakelola_cat_judul_seo', $ids);
    $this->db->join('tatakelola_kategori', 'tatakelola_kategori.tatakelola_cat_id = tatakelola.tatakelola_id','inner');
    return $this->db->get('tatakelola')->result_array();
  }

    public function view_join_oness($table1,$table2,$field,$where,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }
}
