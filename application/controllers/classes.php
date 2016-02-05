<?php
class Classes extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('no_access', 'Sorry, you are not logged in');
			redirect('home');
		}
	}

	public function index(){
		
		$data['all_classes'] = $this->classe_model->all_classes();
		$data['nbr_classes'] = count($this->classe_model->all_classes());
		$data['main_view'] = "admin-frontend/admin_view";
		$data['admin_main'] = "admin-frontend/classes/index";
		$data['page_title'] = "Gestion des classes";
		$this->load->view('layouts/main', $data);
	}
}
?>