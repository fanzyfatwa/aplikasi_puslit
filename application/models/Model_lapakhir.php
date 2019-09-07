<?php
class Model_lapakhir extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function tampildata()
    {
        $query = $this->db->select('lapakhir.id_lapakhir, lapakhir.id_peneliti, lapakhir.nama_dosen,
									fakultas.namafakultas, jurusan.namajurusan, lapakhir.logbook, 
									lapakhir.nomor_keg, lapakhir.nama_keg, lapakhir.tgl1, 
									lapakhir.capaian, lapakhir.kendala, lapakhir.link, lapakhir.rab,
									lapakhir.uraian, lapakhir.jumlah');
		$query = $this->db->from('lapakhir');
		$query = $this->db->join('fakultas', 'lapakhir.id_fak = fakultas.id_fak');
		$query = $this->db->join('jurusan', 'lapakhir.id_jur = jurusan.id_jur');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return FALSE;
		}
    }
    
	function get_one($id_lapakhir)
    {
        $param  =   array('id_lapakhir'=>$id_lapakhir);
        return $this->db->get_where('lapakhir',$param);
    }
	
	public function listing() {
		$this->db->select('*');
		$this->db->from('lapakhir');
		$query = $this->db->get();
		return $query->result();
	}
	
	function fetch_data()
	{
		$query = $this->db->select('lapakhir.id_lapakhir, lapakhir.id_peneliti, lapakhir.nama_dosen,
									fakultas.namafakultas, jurusan.namajurusan, lapakhir.logbook, 
									lapakhir.nomor_keg, lapakhir.nama_keg, lapakhir.tgl1, 
									lapakhir.capaian, lapakhir.kendala, lapakhir.link, lapakhir.rab,
									lapakhir.uraian, lapakhir.jumlah');
		$query = $this->db->from('lapakhir');
		$query = $this->db->join('fakultas', 'lapakhir.id_fak = fakultas.id_fak');
		$query = $this->db->join('jurusan', 'lapakhir.id_jur = jurusan.id_jur');
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
        $query = $this->db->get('lapakhir');
        return $query->result_array();
    }
	
	function data_lapakhir_fak(){
		
		$query = $this->db->query("SELECT namafakultas, COUNT(DISTINCT(nama_dosen)) AS jumlahdosen 
					FROM lapakhir, fakultas WHERE lapakhir.id_fak = fakultas.id_fak GROUP BY namafakultas");
        
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function hapuslapakhir($id_lapakhir){
		$this->db->where('id_lapakhir', $id_lapakhir);
		$query = $this->db->delete('lapakhir');
		return $query;
	}
}
?>