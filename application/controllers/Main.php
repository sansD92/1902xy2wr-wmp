<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */



    /* memanggil function dari masing2 model yang akan digunakan */

  }

  public function index()
	{

			$this->load->view('fronts/index');



}
}
