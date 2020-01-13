<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('M_laporan');
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

	public function laporan_mingguan()
	{
		$data['lapming'] = $this->M_laporan->laporan_mingguan(); 
		$this->load->view('laporan_mingguan', $data);
    }
    public function laporan_bulanan()
	{
		$data['lapbul'] = $this->M_laporan->laporan_bulanan();
		$this->load->view('laporan_bulanan', $data);
	}

}
