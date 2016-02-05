<?php
class Administrator_model extends CI_Model{


	public function all_administrators(){
		$query = $this->db->get('administrators');
		return $query->result();
	}


	public function get_administrator($id_administrator){
		$this->db->where('id', $id_administrator);
		$query = $this->db->get('administrators');
		return $query->result();
	}



	public function add_administrator($data_administrator){
		$query = $this->db->insert('administrators', $data_administrator);
		return $query;
	}


	public function edit_administrator($id_administrator, $data_administrator){
		$this->db->where('id', $id_administrator);
		$query = $this->db->update('administrators', $data_administrator);
		return $query;
	}



	public function update_last_login($id_administrator, $data){
		$this->db->where('id', $id_administrator);
		$query = $this->db->update('administrators', $data);
		return $query;
	}

	
	public function delete_administrator($id_administrator){
		$this->db->where('id', $id_administrator);
		$query = $this->db->delete('administrators');
		return $query;
	}

}
?>