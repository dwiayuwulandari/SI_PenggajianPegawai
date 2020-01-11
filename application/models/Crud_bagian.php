<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_bagian extends CI_Model {

    public function bagian($data)
    {
		$this->db->insert('gaji_karyawan', $data);
  }

  public function karyawan($data)
    {
		$this->db->insert('data_karyawan', $data);
  }

  public function proyek($data)
    {
		$this->db->insert('tambah_proyek', $data);
  }
  
}

