<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('user_account/manufacturer/mdashboard_view');
		$this->load->view('template/footer');
	}
}
?>
