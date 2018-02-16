<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO:
// 1. Newsletter Module
// 2. Footer Links

class Custdash_controller extends CI_Controller {

	public function index(){

	}
	public function icon(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/icons');
		$this->load->view('template/footer');
	}
	public function maps(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/maps');
		$this->load->view('template/footer');
	}
	public function notifications(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/notifications');
		$this->load->view('template/footer');
	}
	public function table(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/table');
		$this->load->view('template/footer');
	}
	public function typography(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/typography');
		$this->load->view('template/footer');
	}
	public function upgrade(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/upgrade');
		$this->load->view('template/footer');
	}
	public function user(){
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/user');
		$this->load->view('template/footer');
	}
}
?>
