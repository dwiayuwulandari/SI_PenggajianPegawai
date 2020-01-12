<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bagian extends CI_Model {
    private $_table = "gaji_karyawan";

   
    public $nama_karyawan;
    public $bagian_karyawan;
    public $bulan_terima;
    public $tanggal_terima;
    public $ongkos_kerja;
    public $uang_makan;
    public $upah_lembur;
    public $asuransi_kesehatan;
    public $uang_transport;
    public $tunjangan_jabatan;
    public $bonus;
    public $total_gaji;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id_gaji)
    {
        return $this->db->get_where($this->_table, ["id_gaji" => $id_gaji])->row();
    }
    public function gaji($data)
    {
		$this->db->insert('gaji_karyawan', $data);
    }
    public function updategaji($id_gaji)
    {
        $post = $this->input->post();
        $this->nama_karyawan = $post["nama_karyawan"];
        $this->bagian_karyawan = $post["bagian_karyawan"];
        $this->bulan_terima = $post["bulan_terima"];
        $this->tanggal_terima = $post["tanggal_terima"];
        $this->ongkos_kerja = $post["ongkos_kerja"];
        $this->uang_makan = $post["uang_makan"];
        $this->upah_lembur = $post["upah_lembur"];
        $this->asuransi_kesehatan = $post["asuransi_kesehatan"];
        $this->uang_transport = $post["uang_transport"];
        $this->tunjangan_jabatan = $post["tunjangan_jabatan"];
        $this->bonus = $post["bonus"];
        $this->total_gaji  = $post["total_gaji"];
        $this->db->update($this->_table, $this, array("id_gaji" => $id_gaji));
    }
    public function deletegaji($id_gaji)
    {
        return $this->db->delete($this->_table, array("id_gaji" => $id_gaji));
    }

}