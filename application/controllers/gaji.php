<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gaji extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_bagian');
		$this->load->model('M_proyek');
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

		$this->M_bagian->gaji($data);
		redirect('gaji/gajikaryawan');
    }
    public function Detail_Gaji_Karyawan()
	{
		$data['gaji']=$this->M_bagian->getAll();
		$this->load->view('Detail_Gaji_Karyawan');
	}
	public function detail_gaji($id_gaji = null)
    {
		if(is_null($id_gaji)) {
			redirect(base_url('gaji/gaji_karyawan'));
		} else {
			$data['detail_gaji'] = $this->db-> get_where('gaji_karyawan', ['id_gaji'=> $id_gaji])->row_array();
			$this->load->view('Detail_Gaji_Karyawan', $data);
		}
    }
    public function Edit_Data_Gaji()
	{
		$this->load->view('Gaji_Karyawan');
	}
	public function edit_gaji($id_gaji = null)
    {
        if ($this->input->post('submit')){
			$this->M_bagian->updategaji($id_gaji);
			redirect('gaji/gajikaryawan');
		}
        $data["a"] = $this->M_bagian->getById($id_gaji);
        $this->load->view('Edit_Gaji_Karyawan', $data);
	}
    public function hapus_gaji($id_gaji = null)
    {
		if($id_gaji) {
			$this->M_bagian->deletegaji($id_gaji);
			$this->session->set_flashdata('message','Data telah dihapus');
			redirect('gaji/gajikaryawan');
		} else {
			$this->session->set_flashdata('message','Record Not Found');
			redirect('gaji/gajikaryawan');
		}
    }
	public function cetak_slip($id_gaji)
	{
		$data['detail_gaji'] = $this->M_bagian->getById($id_gaji);
		$this->load->view('Cetak_slip', $data);
	}


}
