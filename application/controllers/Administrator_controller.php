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

	public function login(){
		$this->load->view('template/header');
		$this->load->view('administrator/adminDash_view');
		$this->load->view('template/footer');
	}

    public function loginValidation(){
      if($this->input->post('login_admin')=="Login"){
        $this->load->model('Administrator_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($this->Administrator_model->adminlogin($username,$password)){
          echo "Admin";
        }else{
          echo "error";
        }
      }
    }
}
?>


