<?php
class Classe_model extends CI_Model{


	public function all_classes(){
		$query = $this->db->get('classes');
		return $query->result();
	}
}
?>