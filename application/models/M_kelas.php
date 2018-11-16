<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {
	
	public function getKelas(){
			$query = $this->db->get('kelas');
			return $query->result(); 
		}
	
}
?>