<?php

class Login_model extends CI_Model{
	
	public function verify_administrator($username, $password){
			$this->db->where('username', $username);

			$query = $this->db->get('administrators');
			$db_password = $query->row(2)->password;
			if(password_verify($password, $db_password)){
				return $query->result();
			} else{
				return false;
			}
			
		}
}
?>
