<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('store/globalstore_view');
		$this->load->view('template/footer');
	}
}
?>
