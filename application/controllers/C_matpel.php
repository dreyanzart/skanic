<?php
class C_matpel extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_matpel');
	}
	function index(){
		$this->load->view('matpel');
	}
	
	function data_matpel(){
		$data=$this->M_matpel->data_matpel();
		echo json_encode($data);
	}
	
	function simpan_matpel(){
		$kd_matpel=$this->input->post('kd_matpel');
		$matpel=$this->input->post('matpel');
		$data=$this->M_matpel->simpan_matpel($kd_matpel,$matpel);
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