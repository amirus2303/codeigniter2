<?php 
class Administrators extends CI_Controller{


	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('no_access', 'Sorry, you are not logged in');
			redirect('home');
		}
	}



	public function index(){

		$data['all_administrators'] = $this->administrator_model->all_administrators();
		$data['nbr_administrators'] = count($this->administrator_model->all_administrators());
		$data['main_view'] = "admin-frontend/admin_view";
		$data['admin_main'] = "admin-frontend/administrators/index";
		$data['page_title'] = "Gestion des administrateurs";
		$this->load->view('layouts/main', $data);
	}


	public function add(){
		$this->form_validation->set_rules('first_name', 'Prénom', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'Nom', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Courriel', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Nom d\'utilisateur', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirmation du mot de passe', 'trim|required|matches[password]');

		if($this->form_validation->run() == false){
			$data['errors'] = validation_errors();
			$this->session->set_flashdata($data);
			$data['main_view'] = "admin-frontend/admin_view";
			$data['page_title'] = "Ajouter un administrateur";
			$data['admin_main'] = "admin-frontend/administrators/create-administrator";
			$this->load->view('layouts/main', $data);
		} else{
			$config['upload_path']   = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
            $this->upload->initialize($config);

			if (!$this->upload->do_upload('upload-photo')){
				$data['upload_errors'] = array('error' => $this->upload->display_errors());
				$data['main_view']     = "admin-frontend/admin_view";
				$data['page_title']    = "Ajouter un administrateur";
				$data['admin_main']    = "admin-frontend/administrators/create-administrator";
				$this->load->view('layouts/main', $data);
            }
            else
            {
				$first_name = $this->input->post('first_name');
				$last_name  = $this->input->post('last_name');
				$email      = $this->input->post('email');
				$username   = $this->input->post('username');
				$password   = $this->input->post('password');
				$photo_path = $this->upload->data('full_path');
				$options = ['cost' => 12];

				$data_administrator = array(
					'first_name' => $first_name,
					'last_name'  => $last_name,
					'email'      => $email,
					'username'   => $username,
					'password'   => password_hash($password, PASSWORD_BCRYPT, $options),
					'photo_path' => $photo_path
				);

				if($this->administrator_model->add_administrator($data_administrator)){
					$this->session->set_flashdata('add_administrator_success', 'L\'administrateur a été ajouté avec succés');
					redirect('administrators');
				}

            }
   	            
   	//         $upload_data =$this->upload->data();
             
			 // var_dump($_FILES['upload-photo']);
			 // foreach ($upload_data as $item => $value){
			 // 	echo '<li>'.$item.' '. $value.'</li>';
			 // }
			 	
		}
	}


	public function edit($administrator_id){
		echo "Edit";
	}


	public function delete($administrator_id){
		echo "Delete";
	}

}
?>