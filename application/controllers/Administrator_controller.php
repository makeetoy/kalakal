<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header.php');
		$this->load->view('administrator/admin_view.php');
		$this->load->view('template/footer.php');
	}
}
?>
