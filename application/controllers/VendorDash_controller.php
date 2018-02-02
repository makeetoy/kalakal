<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorDash_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('user_account/vendor/vdashboard_view.php');
		$this->load->view('template/footer');
	}
}
?>
