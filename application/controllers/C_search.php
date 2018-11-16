<?php
class C_search extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_search');
		error_reporting(0);
	}

	function index(){
		$this->load->view('absen_guru');
	}

	function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->M_search->search_guru($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'	=> $row->nama,
					'nip'	=> $row->nip,
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}
	
	function get_autocomplete2(){
		if (isset($_GET['term'])) {
		  	$result = $this->M_search->search_matpel($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'	=> $row->matpel,
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}

}