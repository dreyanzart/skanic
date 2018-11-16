<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_absen extends CI_Model {
	
	public function tambahData($data){
			return $this->db->insert('absen', $data);
		}
		
	function data_absen(){
		$hasil=$this->db->query("SELECT * FROM absen ORDER BY tgl ASC");
		return $hasil->result();
	}
	
	function hapus_absen($id){
		$hasil=$this->db->query("DELETE FROM absen WHERE id='$id'");
		return $hasil;
	}
}
?>