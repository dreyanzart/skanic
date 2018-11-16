<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_absen extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_absen');
	}

	public function index(){
		$this->load->view('absen_guru');
	}

	public function tambah(){
		$data['nip'] = $this->input->post('nip');
		$data['tgl'] = $this->input->post('tgl');
		$data['nama'] = $this->input->post('nama');
		$data['status'] = $this->input->post('status');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['matpel'] = $this->input->post('matpel');
		$data['kelas'] = $this->input->post('kelas');
		$data['jam_mulai'] = $this->input->post('jam_mulai');
		$data['jam_selesai'] = $this->input->post('jam_selesai');
		
		$query = $this->M_absen->tambahData($data);

		if($query){
			redirect('Page/absen_guru');
		}

	}
	
	function data_absen(){
		$data=$this->M_absen->data_absen();
		echo json_encode($data);
	}
	
	function hapus_absen(){
		$id=$this->input->post('id');
		$data=$this->M_absen->hapus_absen($id);
		echo json_encode($data);
	}

	
}
?>