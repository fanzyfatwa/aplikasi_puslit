<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Progres extends CI_Controller {
			function __construct(){
			parent::__construct();
			$this->load->model('model_progres');
		}
		public function index(){
			$data = array('title'=> 'Rekap Data Kelengkapan Progres Publikasi',
						'isi'=> 'lihat_progres');
		$data['record'] = $this->model_progres->view();
		$this->load->view('layout/wrapper', $data);
	}
	
	public function upload(){
		$data = array();
		
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$upload = $this->model_progres->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
				$this->model_progres->save($upload);
				
				redirect('progres'); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$this->load->view('progres/form_input', $data);
	}
}
