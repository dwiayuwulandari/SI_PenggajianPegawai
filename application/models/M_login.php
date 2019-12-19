<?php 

class M_login extends CI_Model{
	function ambil_data(){
		return $this->db->get('data_admin');
	}
}