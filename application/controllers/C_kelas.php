<?php
class C_kelas extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_kelas');
	}
	function index(){
		$this->load->view('kelas');
	}
	
	function data_kelas(){
		$data=$this->M_kelas->data_kelas();
		echo json_encode($data);
	}

}