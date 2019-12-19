<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_data');
		$this->load->model('M_bagian');
		$this->load->model('Crud_karyawan');
		$this->load->model('Crud_bagian');
    }
	
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
		$this->load->view('Data_karyawan');
	}
	public function datakaryawan()
	{
		$data['karyawan']=$this->M_data->getAll();
		$this->load->view('view_karyawan',$data);
	}
	public function Tambah_Data_Karyawan()
	{
		$this->load->view('Tambah_Data_Karyawan');
	}

	public function fungsitambahkaryawan(){
		$data = [
			'nama_karyawan' => $this->input->post('nama_karyawan'),
			'bagian_karyawan' => $this->input->post('bagian_karyawan'),
			'no_rekening' => $this->input->post('no_rekening'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),	
			'ttl_karyawan' => $this->input->post('ttl_karyawan')
		];

		$this->Crud_karyawan->karyawan($data);
		redirect('Welcome/datakaryawan');
	}
	public function gaji_karyawan()
	{
		$this->load->view('gaji_karyawan');
	}
	public function gajikaryawan()
	{
		$data['gaji']=$this->M_bagian->getAll();
		$this->load->view('view_gaji_karyawan',$data);
	}
	public function Tambah_Data_Gaji_Karyawan()
	{
		$this->load->view('Tambah_Data_Gaji_Karyawan');	
	}
	public function fungsitambahgaji(){
		$data = [
			'bagian_karyawan' => $this->input->post('bagian_karyawan'),
			'gaji_karyawan' => $this->input->post('gaji_karyawan')
		];

		$this->Crud_bagian->bagian($data);
		redirect('Welcome/gajikaryawan');
	}
	public function transfer_gaji()
	{
		$data['transfer']=$this->M_data->getTransfer();
		$this->load->view('transfer_gaji', $data);
	}
	public function Cetak_slip()
	{
		$data['cetak']=$this->M_data->getCetak();
		$this->load->view('Cetak_slip',$data);
	}
	public function laporan()
	{
		$this->load->view('laporan');
	}

}
