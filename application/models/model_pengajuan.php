<?php
class Model_pengajuan extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function tampildata()
    {
        return $this->db->get('pengajuan');
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
		$this->db->order_by("id_pengajuan", "DESC");
		$query = $this->db->get("pengajuan");
		return $query->result();
	}
	public function exportpdf()
    {
        $query = $this->db->get('pengajuan');
        return $query->result_array();
    }
	
	function grafik(){
        $query = $this->db->get('pengajuan');
         
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
}
?>