<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/dashboard-css');
		$this->load->view('user_account/vendor/vdashboard_view');
		$this->load->view('template/footer');
	}
	public function icon(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->vendordata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('template/dashboard-css');
		$this->load->view('accounts/vendor/icons',$data);
		$this->load->view('template/footer');
	}
	public function maps(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->vendordata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('template/dashboard-css');
		$this->load->view('accounts/vendor/maps',$data);
		$this->load->view('template/footer');,
	}
	public function notifications(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->vendordata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('template/dashboard-css');
		$this->load->view('accounts/vendor/notifications',$data);
		$this->load->view('template/footer');
	}
	public function table(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->vendordata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('template/dashboard-css');
		$this->load->view('accounts/vendor/table',$data);
		$this->load->view('template/footer');
	}
	public function typography(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->vendordata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('template/dashboard-css');
		$this->load->view('accounts/vendor/typography',$data);
		$this->load->view('template/footer');
	}
	public function user(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->vendordata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('template/dashboard-css');
		$this->load->view('accounts/vendor/user',$data);
		$this->load->view('template/footer');
	}
}
?>
