<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('homepage/homepage_view');
		$this->load->view('template/footer');
	}
}
?>
