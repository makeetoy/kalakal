<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('user_account/manufacturer/mdashboard_view');
		$this->load->view('template/footer');
	}
	public function icon(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/manufacturer/icons');
		$this->load->view('template/footer');
	}
	public function maps(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/manufacturer/maps');
		$this->load->view('template/footer');
	}
	public function notifications(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/manufacturer/notifications');
		$this->load->view('template/footer');
	}
	public function table(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/manufacturer/table');
		$this->load->view('template/footer');
	}
	public function typography(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/manufacturer/typography');
		$this->load->view('template/footer');
	}
	public function upgrade(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/manufacturer/upgrade');
		$this->load->view('template/footer');
	}
	public function user(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/manufacturer/user');
		$this->load->view('template/footer');
	}
}
?>
