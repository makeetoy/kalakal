<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('user_account/vendor/vdashboard_view');
		$this->load->view('template/footer');
	}
	public function icon(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/vendor/icons');
		$this->load->view('template/footer');
	}
	public function maps(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/vendor/maps');
		$this->load->view('template/footer');
	}
	public function notifications(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/vendor/notifications');
		$this->load->view('template/footer');
	}
	public function table(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/vendor/table');
		$this->load->view('template/footer');
	}
	public function typography(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/vendor/typography');
		$this->load->view('template/footer');
	}
	public function upgrade(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/vendor/upgrade');
		$this->load->view('template/footer');
	}
	public function user(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/vendor/user');
		$this->load->view('template/footer');
	}
}
?>
