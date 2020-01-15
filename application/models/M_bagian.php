<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bagian extends CI_Model {
    private $_table = "gaji_karyawan";

   
    public $id_karyawan;
    public $bulan_terima;
    public $minggu_ke;
    public $tanggal_terima;
    public $ongkos_kerja;
    public $uang_makan;
    public $upah_lembur;
    public $asuransi_kesehatan;
    public $uang_transport;
    public $tunjangan_jabatan;
    public $bonus;
    public $total_gaji;


    public function getAll($pilihproyek)
    {
        $this->db->select('gaji_karyawan.*, tambah_proyek.*,data_karyawan.*');
        $this->db->from('gaji_karyawan');
        $this->db->join('data_karyawan', 'gaji_karyawan.id_karyawan=data_karyawan.id_karyawan');
        $this->db->join('tambah_proyek', 'data_karyawan.id_proyek=tambah_proyek.id_proyek');
        $this->db->where('data_karyawan.id_proyek',$pilihproyek);
        return $this->db->get()->result();
    }
    
    public function getAll2()
    {
        
        $this->db->select('data_karyawan.*, tambah_proyek.*');
        $this->db->from('data_karyawan');
        $this->db->join('tambah_proyek', 'data_karyawan.id_proyek=tambah_proyek.id_proyek');
        
        return $this->db->get()->result();
    }
    public function detailgaji($id_gaji){
        $this->db->select('gaji_karyawan.*, tambah_proyek.*,data_karyawan.*');
        $this->db->from('gaji_karyawan');
        $this->db->join('data_karyawan', 'gaji_karyawan.id_karyawan=data_karyawan.id_karyawan');
        $this->db->join('tambah_proyek', 'data_karyawan.id_proyek=tambah_proyek.id_proyek');
        $this->db->where('gaji_karyawan.id_gaji',$id_gaji);
        return $this->db->get();
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
        $this->id_karyawan = $post["id_karyawan"];
        $this->bulan_terima = $post["bulan_terima"];
        $this->minggu_ke = $post["minggu_ke"];
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