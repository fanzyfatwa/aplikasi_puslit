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
		
		if($this->input->post('submit')){ 
			$upload = $this->model_progres->upload();
			
			if($upload['result'] == "success"){ 
				$this->model_progres->save($upload);
				
				redirect('progres'); // 
				$data['message'] = $upload['error']; 
			}
		}
		else{
			$data= array(	'title'	=> 'Tambah Data',
			'isi'	=> 'progres/form_input');
			$id_pengajuan=  $this->uri->segment(3);
            $data['record']=  $this->model_progres->get_one($id_pengajuan)->row_array();
            $this->load->view('layout/wrapper',$data);


		}
		
	}
	
	function delete()
    {
        $id_progres=  $this->uri->segment(3);
        $this->db->where('id_progres',$id_progres);
        $this->db->delete('progres');
        redirect('progres');
    }
		
}
