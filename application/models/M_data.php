<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {
    private $_table = "data_karyawan";

    public $nama_karyawan;
    public $bagian_karyawan;
    public $jenis_kelamin;
    public $no_rekening;
    public $ttl_karyawan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
	}

}