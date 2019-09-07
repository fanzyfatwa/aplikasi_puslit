<?php
	class Peneliti_progres extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('model_peneliti_progres');
		}
		public function index(){
			$data = array(	'title'	=> 'Daftar Peneliti untuk Progres Penelitian',
						'isi'	=> 'lihat_peneliti_progres');
			
			$data['record']=  $this->model_peneliti_progres->tampildata();
			$this->load->view('layout/wrapper',$data);
		}


  
	}
	
  ?>