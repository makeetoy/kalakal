<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO:
// 1. Newsletter Module
// 2. Footer Links

class Homepage_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('homepage/homepage_view');
		$this->load->view('template/footer');
	}
}
?>
