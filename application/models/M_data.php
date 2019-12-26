<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {
    private $_table = "data_karyawan";

    public $id_karyawan;
    public $nama_karyawan;
    public $bagian_karyawan;
    public $jenis_kelamin;
    public $no_rekening;
    public $ttl_karyawan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id_karyawan)
    {
        return $this->db->get_where($this->_table, ["id_karyawan" => $id_karyawan])->row();
    }
    public function getTransfer()
    {
        $query = $this->db->query("SELECT data_karyawan.nama_karyawan, data_bagian.bagian_karyawan, data_bagian.gaji_karyawan, data_karyawan.no_rekening FROM data_karyawan, data_bagian WHERE data_karyawan.bagian_karyawan = data_bagian.bagian_karyawan");
        return $query->result();
    }
    public function getCetak()
    {
        $query = $this->db->query("SELECT data_karyawan.nama_karyawan, data_bagian.bagian_karyawan, data_bagian.gaji_karyawan FROM data_karyawan, data_bagian WHERE data_karyawan.bagian_karyawan = data_bagian.bagian_karyawan");
        return $query->result();
    }
    public function updatekaryawan($id_karyawan)
    {
        $post = $this->input->post();
        $this->id_karyawan = $post["id_karyawan"];
        $this->nama_karyawan = $post["nama_karyawan"];
        $this->bagian_karyawan = $post["bagian_karyawan"];
        $this->no_rekening = $post["no_rekening"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->ttl_karyawan = $post["ttl_karyawan"];
        $this->db->update($this->_table, $this, array("id_karyawan" => $id_karyawan));
    }

}