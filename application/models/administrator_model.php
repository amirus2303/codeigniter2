<?php
class Administrator_model extends CI_Model{


	public function all_administrators(){
		$query = $this->db->get('administrators');
		return $query->result();
	}


	public function add_administrator($data_administrator){
		$query = $this->db->insert('administrators', $data_administrator);
		return $query;
	}

}
?>