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

	public function fungsitambahproyek(){
		$data = 
		[
			'nama_proyek' => $this->input->post('nama_proyek'),
		];

		$this->M_proyek->proyek($data);
		redirect('karyawan/datakaryawan');
	}

}
