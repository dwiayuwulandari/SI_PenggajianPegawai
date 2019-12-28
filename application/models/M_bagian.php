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
    public function getById($id_bagian)
    {
        return $this->db->get_where($this->_table, ["id_bagian" => $id_bagian])->row();
    }
    public function updategaji($id_bagian)
    {
        $post = $this->input->post();
        $this->id_bagian = $post["id_bagian"];
        $this->bagian_karyawan = $post["bagian_karyawan"];
        $this->gaji_karyawan = $post["gaji_karyawan"];
        $this->potongan_askes = $post["potongan_askes"];
        $this->total_gaji = $post["total_gaji"];
        $this->db->update($this->_table, $this, array("id_bagian" => $id_bagian));
    }
    public function deletegaji($id_bagian)
    {
        return $this->db->delete($this->_table, array("id_bagian" => $id_bagian));
    }

}