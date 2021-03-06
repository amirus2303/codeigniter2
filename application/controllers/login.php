<?php 
class Login extends CI_Controller{


	public function log_in(){
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

		if($this->form_validation->run() == false){

			$data['errors'] = validation_errors();
			$this->session->set_flashdata($data);
			redirect('home');

		} else{
			$options = ['cost' => 12];
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result_array = $this->login_model->verify_administrator($username, $password);
			$result = array_shift($result_array);


			if($result){

				$user_data = array(
					'id'         => $result->id,
					'username'   => $username,
					'file_name'  => $result->file_name,
					'logged_in'  => true,
					'last_login' => $result->last_login
					);


				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success', 'You are logged in');
				
				$last_login = array(
					'last_login' => date('Y-m-j')
					);

				$id_administrator = $result->id;

				$this->administrator_model->update_last_login($id_administrator, $last_login);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('login_failed', 'You are not logged in');
				redirect('home');
			}
		}
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect("home");
	}

}
?>