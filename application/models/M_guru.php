<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {
	
	function data_guru(){
		$hasil=$this->db->query("SELECT * FROM guru");
		return $hasil->result();
	}
	
	function simpan_guru($nip,$nama,$gender){
		$hasil=$this->db->query("INSERT INTO guru (nip,nama,gender)VALUES('$nip','$nama','$gender')");
		return $hasil;
	}
	
	function hapus_guru($nip){
		$hasil=$this->db->query("DELETE FROM guru WHERE nip='$nip'");
		return $hasil;
	}
	
	function get_guru_nip($nip_edit){
		$hsl=$this->db->query("SELECT * FROM guru WHERE nip='$nip_edit'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nip' => $data->nip,
					'nama' => $data->nama,
					'gender' => $data->gender,
					);
			}
		}
		return $hasil;
	}
	
	function update_guru($nip,$nama,$gender){
		$hasil=$this->db->query("UPDATE guru SET nama='$nama', gender='$gender' WHERE nip='$nip'");
		return $hasil;
	}
	
}
?>