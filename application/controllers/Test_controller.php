<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('test');
		$this->load->view('template/footer');
	}
}
?>
