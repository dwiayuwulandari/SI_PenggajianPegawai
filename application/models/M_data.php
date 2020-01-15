<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {
    private $_table = "data_karyawan";

    public $id_karyawan;
    public $nama_karyawan;
    public $bagian_karyawan;
    public $jenis_kelamin;
    public $no_rekening;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $alamat_karyawan;
    public $nomer_hp;
    public $foto_ktp;
    


    public function getAll($id)
    {
        $this->db->select('data_karyawan.*, tambah_proyek.*');
        $this->db->from('data_karyawan');
        $this->db->join('tambah_proyek', 'data_karyawan.id_proyek=tambah_proyek.id_proyek');
        $this->db->where('data_karyawan.id_proyek',$id);
        return $this->db->get()->result();
        //$query = $this->db->query("SELECT * FROM data_karyawan JOIN tambah_proyek ON data_karyawan.id_proyek_id=tambah_proyek.id_proyek");
       //return $query->result();
    }

    function getById($id_karyawan)
    {
        return $this->db->get_where($this->_table, ["id_karyawan" => $id_karyawan])->row();
    }
    public function karyawan($data)
    {
		$this->db->insert('data_karyawan', $data);
    }
    public function updatekaryawan($id_karyawan)
    {
        $post = $this->input->post();
        $this->id_karyawan = $post["id_karyawan"];
        $this->nama_karyawan = $post["nama_karyawan"];
        $this->bagian_karyawan = $post["bagian_karyawan"];
        $this->no_rekening = $post["no_rekening"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat_karyawan = $post["alamat_karyawan"];
        $this->nomer_hp = $post["nomer_hp"];
        $this->foto_ktp  = $post["foto_ktp"];
        $this->db->update($this->_table, $this, array("id_karyawan" => $id_karyawan));
    }
    public function deletekaryawan($id_karyawan)
    {
        return $this->db->delete($this->_table, array("id_karyawan" => $id_karyawan));
    }

    function deleteAll($id_proyek){
        $query = $this->db->query("DELETE `gaji_karyawan`,data_karyawan,tambah_proyek FROM gaji_karyawan JOIN data_karyawan ON gaji_karyawan.id_karyawan=data_karyawan.id_karyawan JOIN tambah_proyek ON data_karyawan.id_proyek=tambah_proyek.id_proyek WHERE tambah_proyek.id_proyek='$id_proyek'");
        return $query;
    }


}