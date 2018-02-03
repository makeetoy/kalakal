<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('user_account/customer/cdashboard_view');
		$this->load->view('template/footer');
	}
}
?>
