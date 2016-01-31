<?php  
class Home extends CI_Controller{

	public function index(){
		$data['main_view'] = "login";
		$this->load->view('layouts/main', $data);
	}
	
}
?>