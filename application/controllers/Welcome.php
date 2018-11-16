<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}
	
	public function Ceklogin(){
		if(isset($_POST['login'])){
		$user = $this->input->post('user',true);
		$pass = $this->input->post('pass',true);
		$where = array(
			'user' => $user,
			'pass' => $pass
			);
		$cek = $this->M_login->Proseslogin($user,$pass);
			$hasil = count($cek);
			if($hasil >0){
				$data_session = array(
				'user' => $user,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
				$pengguna = $this->db->get_where('user',array('username' => $user,'password' => $pass))->row();
				if($pengguna->level == 'admin'){
					$this->session->set_userdata('akses','admin');
					redirect('Page');
				}elseif($pengguna->level == 'guru'){
					$this->session->set_userdata('akses','guru');
					redirect('Page');
				}elseif($pengguna->level == 'other'){
					$this->session->set_userdata('akses','other');
					redirect('Page');
				}
			}else{
			$this->session->set_flashdata('message', '<p><font color=red size=3px>Username atau Password Salah!</font></p>');
            $url=base_url('');
			redirect($url);
		}
	}
}

	function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}