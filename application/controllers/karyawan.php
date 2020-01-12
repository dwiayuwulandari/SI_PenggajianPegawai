<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller {


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
			redirect('karyawan/datakaryawan');
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
		redirect('karyawan/datakaryawan');
	}
	public function Detail_Data_Karyawan()
	{
		$data['karyawan']=$this->M_data->getAll();
		$this->load->view('Detail_Data_Karyawan');
	}
	public function detail_karyawan($id_karyawan = null)
    {
		if(is_null($id_karyawan)) {
			redirect(base_url('karyawan/data_karyawan'));
		} else {
			$data['detail_karyawan'] = $this->db-> get_where('data_karyawan', ['id_karyawan'=> $id_karyawan])->row_array();
			$this->load->view('Detail_Data_Karyawan', $data);
		}
	}
	public function Edit_Data_Karyawan()
	{
		$this->load->view('Edit_Data_Karyawan');
	}
	public function edit_karyawan($id_karyawan = null)
    {
        if ($this->input->post('submit')){
			$this->M_data->updatekaryawan($id_karyawan);
			redirect('karyawan/datakaryawan');
		}

        $data["i"] = $this->M_data->getById($id_karyawan);
        $this->load->view('Edit_Data_Karyawan', $data);
	}
	public function hapus_karyawan($id_karyawan = null)
    {
		if($id_karyawan) {
			$this->M_data->deletekaryawan($id_karyawan);
			$this->session->set_flashdata('message','Data telah dihapus');
			redirect('karyawan/datakaryawan');
		} else {
			$this->session->set_flashdata('message','Record Not Found');
			redirect('karyawan/datakaryawan');
		}
	}

}
