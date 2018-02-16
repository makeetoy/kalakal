<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO:
// 1. Newsletter Module
// 2. Footer Links

class Homepage_controller extends CI_Controller {

	public function index(){
		$customer = $this->session->userdata('custLogin');
		$vendor = $this->session->userdata('vendLogin');
		$manufacturer = $this->session->userdata('manuLogin');
			if($customer){
				$this->load->model('login_model');
				$data['name']=$this->login_model->customerdata($this->session->userdata('username'));
				$this->load->view('template/custheader');
				$this->load->view('accounts/customer/dashboard',$data);
				$this->load->view('template/footer');
			}
			else if($vendor){
				$this->load->model('login_model');
				$data['name']=$this->login_model->vendordata($this->session->userdata('username'));
				$this->load->view('template/custheader');
				$this->load->view('accounts/vendor/dashboard',$data);
				$this->load->view('template/footer');
			}
			else if($manufacturer){
				$this->load->model('login_model');
				$data['name']=$this->login_model->manufacturerdata($this->session->userdata('username'));
				$this->load->view('template/custheader');
				$this->load->view('accounts/manufacturer/dashboard',$data);
				$this->load->view('template/footer');
			}
			else{
				$this->load->view('template/header');
				$this->load->view('homepage/homepage_view');
				$this->load->view('template/footer');
			}
		}
}
?>
