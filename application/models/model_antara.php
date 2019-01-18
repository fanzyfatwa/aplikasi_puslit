<?php
class Model_antara extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function tampildata()
    {
        return $this->db->get('laporan');
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
		$this->db->order_by("id_antara", "DESC");
		$query = $this->db->get("laporan");
		return $query->result();
	}
	
	public function exportpdf()
    {
        $query = $this->db->get('laporan');
        return $query->result_array();
    }
	
	function grafik(){
        $query = $this->db->get('laporan');
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
?>