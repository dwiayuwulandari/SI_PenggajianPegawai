<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_karyawan extends CI_Model {
  
  private $_table = "data_karyawan";

  
 public $id_proyek;
  public $nama_karyawan;
  public $bagian_karyawan;
  public $jenis_kelamin;
  public $no_rekening;
  public $tempat_lahir;
  public $tanggal_lahir;
  public $alamat_karyawan;
  public $nomer_hp;
  public $foto_ktp = "default.jpg";

    function karyawan()
    {
    $post = $this->input->post();
    $this->id_proyek = $post['id_proyek'];
    $this->nama_karyawan = $post['nama_karyawan'];
    $this->bagian_karyawan = $post['bagian_karyawan'];
    $this->jenis_kelamin = $post['jenis_kelamin'];
    $this->no_rekening = $post['no_rekening'];
    $this->tempat_lahir = $post['tempat_lahir'];
    $this->tanggal_lahir = $post['tanggal_lahir'];
    $this->alamat_karyawan = $post['alamat_karyawan'];
    $this->nomer_hp = $post['nomer_hp'];
    $this->foto_ktp = $this->_uploadImage();
    $this->db->insert($this->_table,$this);

   }

   private function _uploadImage()
   {
     $config['upload_path']     = './assets/images/';
     $config['allowed_types']   = 'gif|jpg|png|JPG';
     $config['max_size']        = 9048;
     $config['overwrite']       = true;
     $config['file_name']       = $_FILES['foto_ktp']['name'];
     $this->load->library('upload', $config);

     if($this->upload->do_upload('foto_ktp')) {
       return $this->upload->data("file_name");
     }

     return "default.jpg";
   }

}

