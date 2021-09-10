<?php
class Crud_m extends CI_model{

  public $blogs_id    = 'blogs_id';
  public $products_id    = 'products_id';
  public $services_id    = 'services_id ';
  public $products_cat_id    = 'products_cat_id';
  public $id_identitas    = 'id_identitas';
  public $table_identitas = 'identitas';
  public $table_products ='products';
  public $table_services ='services';
  public $table_products_category ='products_category';
  public $table_blogs ='blogs';



  public function view_ordering($table,$order,$ordering)
  {
      $this->db->select('*');
      $this->db->from($table);
      $this->db->order_by($order,$ordering);
      return $this->db->get()->result_array();
  }
  function get_by_id_identitas($id)
  {
      $this->db->where($this->id_identitas, $id);
      return $this->db->get($this->table_identitas)->row();
  }

  function get_by_id_produk($id,$table_ids,$table_nama)
  {

      $this->db->where($table_ids, $id);
      return $this->db->get($table_nama)->row();
  }
  function get_by_id_products($products_id)
  {
      $this->db->where($this->products_id, $products_id);
      $this->db->or_where('products_judul_seo', $products_id);
      return $this->db->get($this->table_products)->row();
  }
  function get_by_id_services($services_id)
  {
      $this->db->where($this->services_id , $services_id );
      $this->db->or_where('services_judul_seo', $services_id );
      return $this->db->get($this->table_services)->row();
  }

  function get_by_id_products_category($products_cat_id)
  {
      $this->db->where($this->products_cat_id, $products_cat_id);
      $this->db->or_where('products_cat_judul_seo', $products_cat_id);
      return $this->db->get($this->table_products_category)->row();
  }

  function get_by_id_blogs($id)
  {
      $this->db->where($this->blogs_id, $id);
      $this->db->or_where('blogs_judul_seo', $id);
      return $this->db->get($this->table_blogs)->row();
  }
  function get_by_id_post($id,$table_ids,$table_nama,$judul_seo)
  {

      $this->db->where($table_ids, $id);
      $this->db->or_where($judul_seo, $id);
      return $this->db->get($table_nama)->row();
  }

  public function view_join_where($table1,$table2,$field,$where)
  {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function update_join_where($table1,$table2,$field,$data,$where)
    {
          $this->db->where($where);
          $this->db->from($table1);
          $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);

          $this->db->set($data);
          $this->db->update($table1,$table2);

      }

    public function view_join_where_array($table1,$table2,$field,$where){
          $this->db->select('*');
          $this->db->from($table1);
          $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
          $this->db->where($where);
          return $this->db->get();
      }
    public function view_join_one($table1,$table2,$field,$where,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get()->result();
    }
  public function view_join_where_promo($table1,$table2,$field,$status,$status2,$order,$ordering,$baris,$dari)
  {
          $this->db->select('*');
          $this->db->from($table1);
          $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
          $this->db->where($status,'publish');
          $this->db->where($status2,'PROMO');
          $this->db->order_by($order,$ordering);
          $this->db->limit($dari, $baris);
          return $this->db->get()->result();
  }
  public function view_join_where_publish($table1,$table2,$field,$status,$status2,$order,$ordering,$baris,$dari)
  {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
            $this->db->where($status,'publish');
            $this->db->where($status2,'NON PROMO');
            $this->db->order_by($order,$ordering);
            $this->db->limit($dari, $baris);
            return $this->db->get()->result();
  }
  public function view_where_ordering($table,$data,$order,$ordering)
  {
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
      $query = $this->db->get($table);
      return $query->result_array();
  }
  public function view_join_where_ordering($table1,$table2,$field,$data,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
  }
  public function view_join_where2($table1,$table2,$field,$data)
  {
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
    return $this->db->get_where($table1, $data);
  }
  public function view_join_where2_ordering($table1,$table2,$field,$field2,$data,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field2);
      $this->db->where($data);
      $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
  }


  public function view_join_ordering($table1,$table2,$field,$order,$ordering)
  {
    $this->db->select('*');
    $this->db->from($table1);
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
    $this->db->order_by($order,$ordering);
    return $this->db->get()->result_array();
  }
  public function view_where_ordering_publish($table,$data,$order,$ordering)
  {
      $this->db->where($data);
      $this->db->where('blogs_status','publish');
      $this->db->order_by($order,$ordering);
      $query = $this->db->get($table);
      return $query->result_array();
  }
  public function delete($table, $where)
  {
      return $this->db->delete($table, $where);
  }
  public function insert($table,$data)
  {
      return $this->db->insert($table, $data);
  }
  public function view_where($table,$data)
  {
      $this->db->where($data);
      return $this->db->get($table);
  }
  public function views_row($table1,$status,$order,$ordering)
  {
     $this->db->limit(3);
     $this->db->from($table1);
     $this->db->where($status,'publish');
     $this->db->order_by($order,$ordering);
     return $this->db->get()->num_rows();
   }
  public function view_one_limit($table1,$status,$order,$ordering,$baris,$dari)
  {
         $this->db->from($table1);
         $this->db->where($status,'publish');
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
  }
  public function view_where_orders($table1,$status,$order,$ordering)
  {
         $this->db->from($table1);
         $this->db->where($status,'publish');
         $this->db->order_by($order,$ordering);
         return $this->db->get()->result();
  }

  public function viewz($table,$order,$ordering)
  {
      $this->db->from($table);
      $this->db->order_by($order,$ordering);
      return $this->db->get()->result();
  }
  public function view_one_limit_v2($table1,$status,$status2,$order,$ordering,$baris,$dari)
  {
         $this->db->from($table1);
         $this->db->where($status,'publish');
         $this->db->where($status2,'PROMO');
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
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
  function update_counter_products($products_id)
  {
       //return current article views
       $this->db->where('products_judul_seo', urldecode($products_id));
       $this->db->select('products_dibaca');
       $count = $this->db->get('products')->row();
       // then increase by one
       $this->db->where('products_judul_seo', urldecode($products_id));
       $this->db->set('products_dibaca', ($count->products_dibaca + 1));
       $this->db->update('products');
   }

  function update_counter_blogs($id)
   {
        //return current article views
        $this->db->where('blogs_judul_seo', urldecode($id));
        $this->db->select('blogs_dibaca');
        $count = $this->db->get('blogs')->row();
        // then increase by one
        $this->db->where('blogs_judul_seo', urldecode($id));
        $this->db->set('blogs_dibaca', ($count->blogs_dibaca + 1));
        $this->db->update('blogs');
    }

    function update_counter_bisnis($id)
     {
          //return current article views
          $this->db->where('bisnis_judul_seo', urldecode($id));
          $this->db->select('bisnis_dibaca');
          $count = $this->db->get('bisnis')->row();
          // then increase by one
          $this->db->where('bisnis_judul_seo', urldecode($id));
          $this->db->set('bisnis_dibaca', ($count->bisnis_dibaca + 1));
          $this->db->update('bisnis');
      }

      function update_counter_berita($id)
       {
            //return current article views
            $this->db->where('blogs_judul_seo', urldecode($id));
            $this->db->select('blogs_dibaca');
            $count = $this->db->get('blogs')->row();
            // then increase by one
            $this->db->where('blogs_judul_seo', urldecode($id));
            $this->db->set('blogs_dibaca', ($count->blogs_dibaca + 1));
            $this->db->update('blogs');
        }

  public function view_ordering_limits($table,$order,$ordering,$baris,$dari)
    {
         $this->db->select('*');
         $this->db->from($table);
         $this->db->order_by($order,$ordering);
         $this->db->limit($dari, $baris);
         return $this->db->get()->result();
     }

  public function tambah_user($data)
   	{
   		$this->db->insert('user', $data);
   		$id = $this->db->insert_id();
   		return (isset($id)) ? $id : FALSE;
   	}

  public function tambah_user_detail($data)
   {
     $this->db->insert('user_detail', $data);
     $id = $this->db->insert_id();
     return (isset($id)) ? $id : FALSE;
   }
  public function tambah_order($data)
   {
      $this->db->insert('products_order', $data);
      $id = $this->db->insert_id();
      return (isset($id)) ? $id : FALSE;
    }

  public function tambah_detail_order($data)
	 {
		   $this->db->insert('products_order_detail', $data);
	 }

   function total_rows() {
    $this->db->where('blogs_status','publish');
  return $this->db->get('blogs')->num_rows();
}
function get_all_blogs($per_page,$dari)
  {
    $this->db->order_by('blogs_id', 'DESC');
    $this->db->where('blogs_status','publish');
    $query = $this->db->get('blogs',$per_page,$dari);
    return $query->result();
  }
  function get_all_blogs2($per_page,$dari)
  {
    $this->db->order_by('blogs_id', 'DESC');
    $this->db->where('blogs_status','publish');
    $query = $this->db->get('blogs',$per_page,$dari);
    return $query->result();
  }
  function get_all_direksi()
  {
    $this->db->limit(5);
    $this->db->order_by('id_direksi');
    return $this->db->get('direksi')->result();
  }
  function get_all_komisaris()
  {
    $this->db->limit(5);
    $this->db->order_by('id_komisaris');
    return $this->db->get('komisaris')->result();
  }
  function get_all_produk()
  {
    $this->db->limit(6);
    $this->db->order_by('urutan_produk');
    return $this->db->get('produk')->result();
  }
   function get_by_produk($id)
  {
    $this->db->where('produk_detail.id_produk', $id);
    $this->db->or_where('produk_detail.id_produk', $id);
    $this->db->join('produk', 'produk.id_produk = produk_detail.id_produk','inner');
    return $this->db->get('produk_detail')->result_array();
}

 function get_all_kegiatan($kegiatan)
  {
    $this->db->limit(9);
    $this->db->where('blogs.blogs_kategori_id',$kegiatan);
    $this->db->order_by('blogs_id', 'DESC');
    $this->db->join('blogs_kategori', 'blogs_kategori.blogs_kategori_id = blogs.blogs_kategori_id','inner');
    return $this->db->get('blogs')->result();
  }
}
