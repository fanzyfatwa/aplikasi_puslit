<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_progres extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function view(){
		return $this->db->get('progres');
	}
	
	function get_one($id_peneliti)
    {
        $param  =   array('id_peneliti'=>$id_peneliti);
        return $this->db->get_where('progres',$param);
    }
	
	public function listing() {
		$this->db->select('*');
		$this->db->from('progres');
		$query = $this->db->get();
		return $query->result();
	}
	
	function fetch_data()
	{
		$this->db->order_by("id_peneliti", "DESC");
		$query = $this->db->get("progres");
		return $query->result();
	}
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'docx|pdf';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar','input_gambar2','input_gambar3')){ // Lakukan upload dan Cek jika proses upload berhasil
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
			'nama_peneliti'=>$this->input->post('input_deskripsi'),
			'bahan_artikel' => $upload['file']['file_name'],
			'dummy_book' => $upload['file']['file_name'],
			'pro_pub'=>$this->input->post('input_deskripsi2'),
			'upload_bukti' => $upload['file']['file_name']
		);
		
		$this->db->insert('progres', $data);
	}
	
	
	
	
}
