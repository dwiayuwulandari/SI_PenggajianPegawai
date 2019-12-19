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
    
    public function getTransfer()
    {
        $query = $this->db->query("SELECT data_karyawan.nama_karyawan, data_bagian.bagian_karyawan, data_bagian.gaji_karyawan, data_karyawan.no_rekening FROM data_karyawan, data_bagian WHERE data_karyawan.bagian_karyawan = data_bagian.bagian_karyawan");
        return $query->result();
    }

}