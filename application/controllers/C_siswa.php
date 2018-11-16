<?php
class C_siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_siswa');
	}
	function index(){
		$this->load->view('siswa');
	}
	
	function data_siswa(){
		$data=$this->M_siswa->data_siswa();
		echo json_encode($data);
	}
	
	function simpan_siswa(){
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$kelas=$this->input->post('kelas');
		$jurusan=$this->input->post('jurusan');
		$gender=$this->input->post('gender');
		$data=$this->M_siswa->simpan_siswa($nis,$nama,$kelas,$jurusan,$gender);
		echo json_encode($data);
	}
	
	function hapus_siswa(){
		$nis=$this->input->post('nis');
		$data=$this->M_siswa->hapus_siswa($nis);
		echo json_encode($data);
	}
	
	function get_siswa(){
		$nis_edit=$this->input->get('id');
		$data=$this->M_siswa->get_siswa_nis($nis_edit);
		echo json_encode($data);
	}
	
	function update_siswa(){
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$kelas=$this->input->post('kelas');
		$jurusan=$this->input->post('jurusan');
		$gender=$this->input->post('gender');
		$data=$this->M_siswa->update_siswa($nis,$nama,$kelas,$jurusan,$gender);
		echo json_encode($data);
	}

}