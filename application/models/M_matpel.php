<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_matpel extends CI_Model {
	
	function data_matpel(){
		$hasil=$this->db->query("SELECT * FROM matpel");
		return $hasil->result();
	}
	
	function simpan_matpel($kd_matpel,$matpel){
		$hasil=$this->db->query("INSERT INTO matpel (kd_matpel,matpel)VALUES('$kd_matpel','$matpel')");
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