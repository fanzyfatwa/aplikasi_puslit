<?php
class Model_lapakhir extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function tampildata()
    {
        return $this->db->get('lapakhir');
    }
    
	function get_one($id_peneliti)
    {
        $param  =   array('id_peneliti'=>$id_peneliti);
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
		$this->db->order_by("id", "DESC");
		$query = $this->db->get("lapakhir");
		return $query->result();
	}
	
	public function exportpdf()
    {
        $query = $this->db->get('lapakhir');
        return $query->result_array();
    }
	
	function grafik(){
        $query = $this->db->get('lapakhir');
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
?>