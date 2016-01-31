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
		echo "Add";
	}


	public function edit($administrator_id){
		echo "Edit";
	}


	public function delete($administrator_id){
		echo "Delete";
	}

}
?>