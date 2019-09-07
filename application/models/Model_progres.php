<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_progres extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function tampildata()
    {
        return $this->db->get('pengajuan');
    }
	public function view(){
		//return $this->db->get('progres');
		$query = $this->db->select('progres.id_progres, pengajuan.id_peneliti, progres.id_peneliti, progres.nama_dosen, pengajuan.nama_dosen, progres.pro_pub, progres.upload_file');
		$query = $this->db->from('progres');
		$query = $this->db->join('pengajuan', 'progres.id_peneliti = pengajuan.id_peneliti');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	
	function get_one($id_pengajuan)
    {
        $param  =   array('id_pengajuan'=>$id_pengajuan);
        return $this->db->get_where('pengajuan',$param);
    }
	
	public function listing() {
		$this->db->select('*');
		$this->db->from('progres');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'zip|rar';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_file')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}
		else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'id_peneliti'=>$this->input->post('id_peneliti'),
			'nama_dosen'=>$this->input->post('nama_dosen'),
			'pro_pub'=>$this->input->post('input_deskripsi2'),
			'upload_file' => $upload['file']['file_name']
		);
		
		$this->db->insert('progres', $data);
	}
	
	
	
	
}
