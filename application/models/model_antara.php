<?php
class Model_antara extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function tampildata()
    {
        $query = $this->db->select('laporan.id_antara, laporan.no_regis, laporan.nip, laporan.nidn, laporan.nama_dosen, 
									fakultas.namafakultas, jurusan.namajurusan, laporan.logbook, 
									laporan.lap_uang60, laporan.naskah, laporan.hki, 
									laporan.catatan');
		$query = $this->db->from('laporan');
		$query = $this->db->join('fakultas', 'laporan.id_fak = fakultas.id_fak');
		$query = $this->db->join('jurusan', 'laporan.id_jur = jurusan.id_jur ');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return FALSE;
		}
    }
    
	function get_one($id_antara)
    {
        $param  =   array('id_antara'=>$id_antara);
        return $this->db->get_where('laporan',$param);
    }
	
	public function listing() {
		$this->db->select('*');
		$this->db->from('laporan');
		$query = $this->db->get();
		return $query->result();
	}
	
	function fetch_data()
	{
		/*$this->db->order_by("id_antara", "DESC");
		$query = $this->db->get("laporan");
		return $query->result();*/
		$query = $this->db->select('laporan.no_regis, laporan.nip, laporan.nidn, laporan.nama_dosen, 
									fakultas.namafakultas, jurusan.namajurusan, laporan.logbook, 
									laporan.lap_uang60, laporan.naskah, laporan.hki, 
									laporan.catatan');
		$query = $this->db->from('laporan');
		$query = $this->db->join('fakultas', 'laporan.id_fak = fakultas.id_fak');
		$query = $this->db->join('jurusan', 'laporan.id_jur = jurusan.id_jur ');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	
	public function exportpdf()
    {
        $query = $this->db->get('laporan');
        return $query->result_array();
    }
	
	function data_antara_fak(){
		
		$query = $this->db->query("SELECT namafakultas, COUNT(DISTINCT(nama_dosen)) AS jumlahdosen 
					FROM laporan, fakultas WHERE laporan.id_fak = fakultas.id_fak GROUP BY namafakultas");
        
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

	function hapusantara($id_antara){
		$this->db->where('id_antara', $id_antara);
		$query = $this->db->delete('laporan');
		return $query;
	}
}
?>