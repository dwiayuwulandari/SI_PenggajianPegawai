<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proyek extends CI_Model {
    private $_table = "tambah_proyek";

    public $id_proyek;
    public $nama_proyek;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function proyek($data)
    {
		$this->db->insert('tambah_proyek', $data);
  }
    
}