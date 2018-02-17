<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO:
// 1. Login Module
// 2. Dashboard Module
// 3. Logout Module
// 4. Manipulate Models

class Administrator_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('administrator/admin_view');
		$this->load->view('template/footer');
	}

	public function adminIndex($data){
		$this->load->view('template/header');
		$this->load->view('administrator/admin_view', $data);
		$this->load->view('template/footer');
	}

	public function dashboard(){
		$this->load->view('template/header');
		$this->load->view('administrator/adminDash_view');
		$this->load->view('template/footer');
	}

	public function login(){
			$this->load->model('Administrator_model');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->Administrator_model->adminLogin($email,$password)){
				redirect('/admindash');
			}else{
				$data['status'] = false;
				$this->adminIndex($data);
			}
		}


}
?>
