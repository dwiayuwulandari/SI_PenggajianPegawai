<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_karyawan extends CI_Model {

    public function karyawan()
    {
		$d = $_POST;
		$data = $this->db->query("INSERT INTO data_karyawan SET nama_karyawan='$d[nama_karyawan]',  bagian_karyawan='$d[bagian_karyawan]'
		, no_rekening='$d[no_rekening]', jenis_kelamin='$d[jenis_kelamin]' ,ttl_karyawan='$d[ttl_karyawan]'");		

				redirect("welcome");
	}

}