<?php
class C_guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_guru');
	}
	function index(){
		$this->load->view('guru');
	}
	
	function data_guru(){
		$data=$this->M_guru->data_guru();
		echo json_encode($data);
	}
	
	function simpan_guru(){
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$gender=$this->input->post('gender');
		$data=$this->M_guru->simpan_guru($nip,$nama,$gender);
		echo json_encode($data);
	}
	
	function hapus_guru(){
		$nip=$this->input->post('nip');
		$data=$this->M_guru->hapus_guru($nip);
		echo json_encode($data);
	}
	
	function get_guru(){
		$nip_edit=$this->input->get('id');
		$data=$this->M_guru->get_guru_nip($nip_edit);
		echo json_encode($data);
	}
	
	function update_guru(){
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$gender=$this->input->post('gender');
		$data=$this->M_guru->update_guru($nip,$nama,$gender);
		echo json_encode($data);
	}

}