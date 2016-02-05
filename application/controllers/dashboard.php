<?php 
class Dashboard extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('no_access', 'Sorry, you are not logged in');
			redirect('home');
		}
	}


	
	public function index(){

		$nbr_administrators = count($this->administrator_model->all_administrators());
		$data['nbr_administrators'] = $nbr_administrators;

		$nbr_classes = count($this->classe_model->all_classes());
		$data['nbr_classes'] = $nbr_classes;


		$data['main_view'] = "admin-frontend/admin_view";
		$data['admin_main'] = "admin-frontend/dashboard/dashboard_view";
		$data['page_title'] = "Dashboard";
		$this->load->view('layouts/main', $data);
	}

}
?>