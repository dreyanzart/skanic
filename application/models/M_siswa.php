<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {
	
	function data_siswa(){
		$hasil=$this->db->query("SELECT * FROM siswa");
		return $hasil->result();
	}
	
	function simpan_siswa($nis,$nama,$kelas,$jurusan,$gender){
		$hasil=$this->db->query("INSERT INTO siswa (nis,nama,kelas,jurusan,gender)VALUES('$nis','$nama','$kelas','$jurusan','$gender')");
		return $hasil;
	}
	
	function hapus_siswa($nis){
		$hasil=$this->db->query("DELETE FROM siswa WHERE nis='$nis'");
		return $hasil;
	}
	
	function get_siswa_nis($nis_edit){
		$hsl=$this->db->query("SELECT * FROM siswa WHERE nis='$nis_edit'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nis' => $data->nis,
					'nama' => $data->nama,
					'kelas' => $data->kelas,
					'jurusan' => $data->jurusan,
					'gender' => $data->gender,
					);
			}
		}
		return $hasil;
	}
	
	function update_siswa($nis,$nama,$kelas,$jurusan,$gender){
		$hasil=$this->db->query("UPDATE siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan', gender='$gender' WHERE nis='$nis'");
		return $hasil;
	}
	
}
?>