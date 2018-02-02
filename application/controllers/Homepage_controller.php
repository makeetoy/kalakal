<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header.php');
		$this->load->view('homepage/homepage_view.php');
		$this->load->view('template/footer.php');
	}
}
?>
