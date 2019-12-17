<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bagian extends CI_Model {
    private $_table = "data_bagian";

    public $bagian_karyawan;
    public $gaji_karyawan;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
	}

}