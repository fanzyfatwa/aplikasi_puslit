<?php
class Model_pengajuan extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function tampildata()
    {
		$query = $this->db->select('pengajuan.id_pengajuan, pengajuan.no_regis, pengajuan.id_peneliti, 
									pengajuan.nip, pengajuan.nidn, pengajuan.nama_dosen, pengajuan.tahun,
									fakultas.namafakultas, jurusan.namajurusan, pengajuan.file_prop, 
									pengajuan.file_rab, pengajuan.file_turnitin, pengajuan.id_litap, 
									pengajuan.status_litap, pengajuan.akun_sinta, pengajuan.akun_hki, pengajuan.nidn_br, 
									pengajuan.tugas_bel, pengajuan.akun_digilib, pengajuan.catatan');
			$query = $this->db->from('pengajuan');
		$query = $this->db->join('fakultas', 'pengajuan.id_fak = fakultas.id_fak');
		$query = $this->db->join('jurusan', 'pengajuan.id_jur = jurusan.id_jur ');
		//$query = $this->db->order_by('nama_dosen', 'asc');

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
		$this->db->from('pengajuan');
		$query = $this->db->get();
		return $query->result();
	}
	
	function fetch_data()
	{
		//$this->db->order_by("id_pengajuan", "DESC");
		//$query = $this->db->get("pengajuan");
		//return $query->result();
		$query = $this->db->select('pengajuan.id_peneliti, pengajuan.nama_dosen, pengajuan.nip, pengajuan.nidn, 
									fakultas.namafakultas, jurusan.namajurusan, pengajuan.file_prop, 
									pengajuan.file_rab, pengajuan.file_turnitin, pengajuan.id_litap, 
									pengajuan.status_litap, pengajuan.akun_sinta, pengajuan.akun_hki, pengajuan.nidn_br, 
									pengajuan.tugas_bel, pengajuan.akun_digilib, pengajuan.catatan');
		$query = $this->db->from('pengajuan');
		$query = $this->db->join('fakultas', 'pengajuan.id_fak = fakultas.id_fak');
		$query = $this->db->join('jurusan', 'pengajuan.id_jur = jurusan.id_jur ');
		$query = $this->db->order_by('nama_dosen', 'ASC');
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
        $query = $this->db->get('pengajuan');
        return $query->result_array();
    }
	
	//Grafik Dosen yang Daftar Proposal per-Fakultas
	function data_dosen_fak(){
		$query = $this->db->query("SELECT namafakultas, COUNT(DISTINCT(nama_dosen)) AS jumlahdosen 
					FROM pengajuan, fakultas WHERE pengajuan.id_fak = fakultas.id_fak GROUP BY namafakultas");
        
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function data_pro_fak(){
    	
		$query = $this->db->query("SELECT namafakultas, COUNT(DISTINCT(file_prop)) AS jumlahpro 
					FROM pengajuan, fakultas WHERE pengajuan.id_fak = fakultas.id_fak and file_prop='ada' GROUP BY namafakultas");
        
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function getDataFakultas(){
		$query="select * from fakultas";
		$q=$this->db->query($query);
		if ($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[]=$row;
			}
			return $data;
		}
	}
	function getDataJurusan($id_fak){
		$query="select * from jurusan where id_fak = '$id_fak'";
		$q=$this->db->query($query);
		if ($q->num_rows() > 0){
			foreach ($q->result() as $row){
				$data[]=$row;
			}
			return $data;
		}
	}
	function hapuspengajuan($id_pengajuan){
		$this->db->where('id_pengajuan', $id_pengajuan);
		$query = $this->db->delete('pengajuan');
		return $query;
	}

	// public function get2016()
	// 	{
	// 		$this->db->where('tahun=2016');
	// 		return $this->db->get('pengajuan')->result();
	// 	}
	// public function get2017()
	// 	{
	// 		$this->db->where('tahun=2017');
	// 		return $this->db->get('pengajuan')->result();
	// 	}
	// public function get2018()
	// 	{
	// 		$this->db->where('tahun=2018');
	// 		return $this->db->get('pengajuan')->result();
	// 	}
	// public function get2019()
	// 	{
	// 		$this->db->where('tahun=2019');
	// 		return $this->db->get('pengajuan')->result();
	// 	}

	
}
?>