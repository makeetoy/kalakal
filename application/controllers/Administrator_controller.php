<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
}
?>
