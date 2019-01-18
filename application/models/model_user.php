<?php
class Model_user extends CI_Model{
	
	function tampildata()
    {
        return $this->db->get('user');
    }
     function get_one($id)
    {
        $param  =   array('id_pengguna'=>$id);
        return $this->db->get_where('user',$param);
    }
}
?>