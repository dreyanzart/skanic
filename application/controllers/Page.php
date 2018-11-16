<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
		$this->session->set_flashdata('message', '<p><font color=red size=3px>Anda Belum Login!</font></p>');
			$url=base_url();
			redirect($url);
		}
	$this->load->model('M_kelas');
	$this->load->model('M_guru');
  }
	function index(){
    $this->load->view('menu');
  }
  
  function siswa(){
    if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='guru'){
      $this->load->view('konten/siswa');
    }else{
      $this->load->view('notfound');
    }
  }
  
  function guru(){
    if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='guru'){
      $this->load->view('konten/guru');
    }else{
      $this->load->view('notfound');
    }
  }
  
  function matpel(){
    if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='guru'){
      $this->load->view('konten/matpel');
    }else{
      $this->load->view('notfound');
    }
  }

	function rpl(){
    if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='guru'){
      $this->load->view('konten/rpl');
    }else{
      $this->load->view('notfound');
    }
  }

	function absen_guru(){
	$data['kls'] = $this->M_kelas->getKelas();
    if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='guru'){
      $this->load->view('konten/absen_guru',$data);
    }else{
      $this->load->view('notfound');
    }
  }
  
	function list_absen_guru(){
    if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='guru'){
      $this->load->view('konten/list_absen_guru');
    }else{
      $this->load->view('notfound');
    }
  }
	
}
?>