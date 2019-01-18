<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	// Index login
	public function index() {
		// Fungsi Login
		$valid = $this->form_validation;
		$namapengguna = $this->input->post('namapengguna');
		$katasandi = $this->input->post('katasandi');
		$valid->set_rules('namapengguna','namapengguna','required');
		$valid->set_rules('katasandi','katasandi','required');
		if($valid->run()) {
			$this->simple_login->login($namapengguna,$katasandi, base_url('dasbor'), base_url('login'));
		}
		// End fungsi login
		$data = array(	'title'	=> 'Pusat Penelitian UIN Sunan Gunung Djati');
		$this->load->view('login_view',$data);
	}	
	// Logout di sini
	public function logout() {
		$this->simple_login->logout();	
	}	
}