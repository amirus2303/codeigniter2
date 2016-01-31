<?php
class Administrator_model extends CI_Model{


	public function all_administrators(){
		$query = $this->db->get('administrators');
		return $query->result();
	}

}
?>