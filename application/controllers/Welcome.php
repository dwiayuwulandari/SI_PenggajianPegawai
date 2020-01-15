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
		$data['proyek']=$this->M_proyek->getAll();
		$this->load->view('beranda', $data);
	}
	function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah keluar</div>');
		redirect('login');
	}
	public function hapusAll($id_proyek = null)
    {
		if($id_proyek) {
			$this->M_data->deleteAll($id_proyek);
			$this->session->set_flashdata('message','Data telah dihapus');
			redirect('Welcome');
		} else {
			$this->session->set_flashdata('message','Record Not Found');
			redirect('Welcome');
		}
	}

}
