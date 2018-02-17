<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('user_account/manufacturer/mdashboard_view');
		$this->load->view('template/footer');
	}
	public function icon(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->manufacturerdata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('accounts/manufacturer/icons',$data);
		$this->load->view('template/footer');
	}
	public function maps(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->manufacturerdata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('accounts/manufacturer/maps',$adata);
		$this->load->view('template/footer');
	}
	public function notifications(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->manufacturerdata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('accounts/manufacturer/notifications',$data);
		$this->load->view('template/footer');
	}
	public function table(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->manufacturerdata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('accounts/manufacturer/table',$data);
		$this->load->view('template/footer');
	}
	public function typography(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->manufacturerdata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('accounts/manufacturer/typography',$data);
		$this->load->view('template/footer');
	}
	public function user(){
		$this->load->model('login_model');
		$data['name']=$this->login_model->manufacturerdata($this->session->userdata('username'));
		$this->load->view('template/header');
		$this->load->view('accounts/manufacturer/user',$data);
		$this->load->view('template/footer');
	}
}
?>
