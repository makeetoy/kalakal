<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO:
// 1. Newsletter Module
// 2. Footer Links

class Kalakal404_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/404_not_found');
	}
}
?>
