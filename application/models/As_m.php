<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class As_m extends CI_Model {
  public function register($enc_password){
     // User data array
     $data = array(
      'username' => $this->input->post('username'),
      'email' => $this->input->post('email'),
      'password' => $enc_password,
      'nama' => $this->input->post('nama'),
      'user_post_hari'=>hari_ini(date('w')),
      'user_post_tanggal'=>date('Y-m-d'),
      'user_post_jam'=>date('H:i:s'),
      'level' => '4',
      'user_status' => '1',
      'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis')
     );
     return $this->db->insert('user', $data);
    }

    public function absen_harian_user($id_user)
    {
        $today = date('Y-m-d');
        $this->db->where('user_absensi_tgl', $today);
        $this->db->where('user_absensi_id', $id_user);
        $data = $this->db->get('user_absensi');
        return $data;
    }
  public function insert($table,$data){
      return $this->db->insert($table, $data);
  }
  public function view_where($table,$data){
      $this->db->where($data);
      return $this->db->get($table);
  }
  public function login($username, $password){
   // Validate
   $this->db->where('username', $username);
   $this->db->where('password', $password);

   $result = $this->db->get('user');

   if($result->num_rows() == 1){
    return $result->row(0)->id_user;
   } else {
    return false;
   }
  }
  public function cek_login($username,$password,$table){
      return $this->db->query("SELECT * FROM $table where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."' ");
  }
  public function view($table){
      return $this->db->get($table);
  }
  public function view_wheres_publish($table,$status){
      $this->db->where($status,'publish');
      return $this->db->get($table);
  }
  public function view_wheres_delete($table,$status){
      $this->db->where($status,'delete');
      return $this->db->get($table);
  }
  public function view_wheres_status($table,$stat,$status){
      $this->db->where($stat,$status);
      return $this->db->get($table);
  }
  public function check_email_exists($email){
     $query = $this->db->get_where('user', array('email' => $email));
     if(empty($query->row_array())){
      return true;
     } else {
      return false;
    }
  }
  public function check_username_exists($username){
   $query = $this->db->get_where('user', array('username' => $username));
   if(empty($query->row_array())){
    return true;
   } else {
    return false;
   }
  }
  public function view_ordering($table,$order,$ordering){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->order_by($order,$ordering);
    return $this->db->get()->result_array();
  }
  public function update($table, $data, $where){
      return $this->db->update($table, $data, $where);
  }
  public function edit($table, $data){
      return $this->db->get_where($table, $data);
  }
  public function edit2($table, $data){
    $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field2);
      return $this->db->get_where($table, $data);
  }

}
