<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_karyawan extends CI_Model {

    public function karyawan($data)
    {
		$this->db->insert('data_karyawan', $data);
  }
  
}

