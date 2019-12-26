<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bagian extends CI_Model {
    private $_table = "data_bagian";

    public $id_bagian;
    public $bagian_karyawan;
    public $gaji_karyawan;
    public $potongan_askes;
    public $total_gaji;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function deletegaji($id_bagian)
    {
        return $this->db->delete($this->_table, array("id_bagian" => $id_bagian));
    }

}