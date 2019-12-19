<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_bagian extends CI_Model {

    public function bagian($data)
    {
		$this->db->insert('data_bagian', $data);
  }
  
}

