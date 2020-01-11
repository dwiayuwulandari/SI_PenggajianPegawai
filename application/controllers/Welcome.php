<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_data');
		$this->load->model('M_bagian');
		$this->load->model('M_proyek');
		$this->load->model('Crud_karyawan');
		$this->load->model('Crud_bagian');
		$this->load->helper(array('url'));
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
	public function fungsitambahproyek(){
		$data = 
		[
			'nama_proyek' => $this->input->post('nama_proyek'),
		];

		$this->Crud_bagian->proyek($data);
		redirect('Welcome/datakaryawan');
	}
	public function data_karyawan()
	{
		$this->load->view('Data_karyawan');
	}
	public function datakaryawan()
	{
		
		$data['proyek']=$this->M_proyek->getAll();
		// $data['karyawan']=$this->M_data->getAll();
		$this->load->view('view_karyawan',$data);
	}
	public function Tambah_Data_Karyawan()
	{
		$id_proyek = $this->uri->segment(3);
		// $data_session = array('id' => $id_proyek);
		// $this->session->set_userdata($data_session);
		// $this->session->userdata("id");
		if($this->input->post('submit')) {
			$this->Crud_karyawan->karyawan();
			redirect('Welcome/datakaryawan');
		}
		
		$this->load->view('Tambah_Data_Karyawan', $id_proyek);
	}

	public function fungsitambahkaryawan($id_proyek = null){
		$data = [
			'id_proyek_id' => $id_proyek,
			'nama_karyawan' => $this->input->post('nama_karyawan'),
			'bagian_karyawan' => $this->input->post('bagian_karyawan'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),	
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'no_rekening' => $this->input->post('no_rekening'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),	
			'alamat_karyawan' => $this->input->post('bagian_karyawan'),
			'nomer_hp ' => $this->input->post('nomer_hp'),	
			'foto_ktp' => $this->input->post('foto_ktp')
		];

		$this->Crud_bagian->karyawan($data);
		redirect('Welcome/datakaryawan');
	}
	public function Detail_Data_Karyawan()
	{
		$data['karyawan']=$this->M_data->getAll();
		$this->load->view('Detail_Data_Karyawan');
	}
	public function Edit_Data_Karyawan()
	{
		$this->load->view('Edit_Data_Karyawan');
	}
	public function edit_karyawan($id_karyawan = null)
    {
        if ($this->input->post('submit')){
			$this->M_data->updatekaryawan($id_karyawan);
			redirect('Welcome/datakaryawan');
		}

        $data["i"] = $this->M_data->getById($id_karyawan);
        $this->load->view('Edit_Data_Karyawan', $data);
	}
	public function detail_karyawan($id_karyawan = null)
    {
		if(is_null($id_karyawan)) {
			redirect(base_url('Welcome/data_karyawan'));
		} else {
			$data['detail_karyawan'] = $this->db-> get_where('data_karyawan', ['id_karyawan'=> $id_karyawan])->row_array();
			$this->load->view('Detail_Data_Karyawan', $data);
		}
	}
	public function hapus_karyawan($id_karyawan = null)
    {
		if($id_karyawan) {
			$this->M_data->deletekaryawan($id_karyawan);
			$this->session->set_flashdata('message','Data telah dihapus');
			redirect('Welcome/datakaryawan');
		} else {
			$this->session->set_flashdata('message','Record Not Found');
			redirect('Welcome/datakaryawan');
		}
	}
	public function Edit_Data_Gaji()
	{
		$this->load->view('Gaji_Karyawan');
	}
	public function gaji_karyawan()
	{
		$this->load->view('gaji_karyawan');
	}
	public function gajikaryawan()
	{   $data['proyek']=$this->M_proyek->getAll();
		//$data['gaji']=$this->M_bagian->getAll();
		$this->load->view('view_gaji_karyawan',$data);
	}
	public function Tambah_Data_Gaji_Karyawan()
	{
		$this->load->view('Tambah_Data_Gaji_Karyawan');	
	}
	public function fungsitambahgaji(){
		$data = [
			'id_proyek' => $this->input->post('id_proyek'),
			'nama_karyawan' => $this->input->post('nama_karyawan'),
			'bagian_karyawan' => $this->input->post('bagian_karyawan'),
			'bulan_terima' => $this->input->post('bulan_terima'),
			'tanggal_terima' => $this->input->post('tanggal_terima'),
			'ongkos_kerja' => $this->input->post('ongkos_kerja'),
			'uang_makan' => $this->input->post('uang_makan'),
			'upah_lembur' => $this->input->post('upah_lembur'),
			'asuransi_kesehatan' => $this->input->post('asuransi_kesehatan'),
			'uang_transport' => $this->input->post('uang_transport'),
			'tunjangan_jabatan' => $this->input->post('tunjangan_jabatan'),
			'bonus' => $this->input->post('bonus'),
			'total_gaji' => $this->input->post('total_gaji')
			
		];

		$this->Crud_bagian->bagian($data);
		redirect('Welcome/gajikaryawan');
	}
	public function hapus_gaji($id_gaji = null)
    {
		if($id_gaji) {
			$this->M_bagian->deletegaji($id_gaji);
			$this->session->set_flashdata('message','Data telah dihapus');
			redirect('Welcome/gajikaryawan');
		} else {
			$this->session->set_flashdata('message','Record Not Found');
			redirect('Welcome/gajikaryawan');
		}
	}
	public function edit_gaji($id_gaji = null)
    {
        if ($this->input->post('submit')){
			$this->M_bagian->updategaji($id_gaji);
			redirect('Welcome/gajikaryawan');
		}
        $data["a"] = $this->M_bagian->getById($id_gaji);
        $this->load->view('Edit_Gaji_Karyawan', $data);
	}
	public function Detail_Gaji_Karyawan()
	{
		$data['gaji']=$this->M_bagian->getAll();
		$this->load->view('Detail_Gaji_Karyawan');
	}
	public function detail_gaji($id_gaji = null)
    {
		if(is_null($id_gaji)) {
			redirect(base_url('Welcome/gaji_karyawan'));
		} else {
			$data['detail_gaji'] = $this->db-> get_where('gaji_karyawan', ['id_gaji'=> $id_gaji])->row_array();
			$this->load->view('Detail_Gaji_Karyawan', $data);
		}
	}
	public function cetak_slip($id_gaji)
	{
		$data['detail_gaji'] = $this->M_bagian->getById($id_gaji);
		$this->load->view('Cetak_slip', $data);
	}
	public function laporan()
	{
		$this->load->view('laporan');
	}
	function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah keluar</div>');
		redirect('login');
	}

}
