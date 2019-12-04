<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('beranda');
	}
	public function data_karyawan()
	{
		$this->load->view('data_karyawan');
	}
	public function Tambah_Data_Karyawan()
	{
		$this->load->view('Tambah_Data_Karyawan');
	}
	public function gaji_karyawan()
	{
		$this->load->view('gaji_karyawan');
	}
	public function Tambah_Data_Gaji_Karyawan()
	{
		$this->load->view('Tambah_Data_Gaji_Karyawan');	
	}
	public function transfer_gaji()
	{
		$this->load->view('transfer_gaji');
	}
	public function Cetak_slip()
	{
		$this->load->view('Cetak_slip');
	}
	public function laporan()
	{
		$this->load->view('laporan');
	}

}
