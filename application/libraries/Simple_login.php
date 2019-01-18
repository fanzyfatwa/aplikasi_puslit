<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($namapengguna, $katasandi) {
		$query = $this->CI->db->get_where('user',array('namapengguna'=>$namapengguna,'katasandi' => $katasandi));
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT id_pengguna FROM user where namapengguna = "'.$namapengguna.'"');
			$admin 	= $row->row();
			$id 	= $admin->id_pengguna;
			$this->CI->session->set_userdata('namapengguna', $namapengguna);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id_pengguna', $id);
			redirect(base_url('dasbor'));
		}else{
			$this->CI->session->set_flashdata('sukses','Oops... namapengguna/katasandi salah');
			redirect(base_url('login'));
		}
		return false;
	}
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('namapengguna') == '') {
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect(base_url('login'));
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('namapengguna');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id_pengguna');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(base_url('login'));
	}
}