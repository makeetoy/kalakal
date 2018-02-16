<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO:
// 1. Newsletter Module
// 2. Footer Links

class Custdash_controller extends CI_Controller {

	public function index(){

	}
	public function icon(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->customerdata($this->session->userdata('username'));
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/icons',$data);
		$this->load->view('template/footer');
	}
	public function maps(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->customerdata($this->session->userdata('username'));
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/maps',$data);
		$this->load->view('template/footer');
	}
	public function notifications(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->customerdata($this->session->userdata('username'));
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/notifications',$data);
		$this->load->view('template/footer');
	}
	public function table(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->customerdata($this->session->userdata('username'));
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/table',$data);
		$this->load->view('template/footer');
	}
	public function typography(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->customerdata($this->session->userdata('username'));
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/typography',$data);
		$this->load->view('template/footer');
	}
	public function user(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->customerdata($this->session->userdata('username'));
		$this->load->view('template/custheader');
		$this->load->view('accounts/customer/user',$data);
		$this->load->view('template/footer');
	}
}
?>
