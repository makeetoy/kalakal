<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO:
// 1. Newsletter Module
// 2. Footer Links

class Homepage_controller extends CI_Controller {

	public function index(){
		$this->load->model("IsLogin_model");
		$logincust=$this->IsLogin_model->ifcustlogin();
		$loginvend=$this->IsLogin_model->ifvendlogin();
		$loginmanu=$this->IsLogin_model->ifmanulogin();
		$customer = 0;
		$vendor = 0;
		$manufacturer = 0;
			foreach($logincust->result() as $row){
				if($row->custLogin == 1){
					$customer=1;
					break;
				}
			}
			foreach($loginvend->result() as $row){
				if($row->vendLogin == 1){
					$vendor=1;
					break;
				}
			}
			foreach($loginmanu->result() as $row){
				if($row->manuLogin == 1){
					$manufactuer=1;
					break;
				}
			}
			if($customer==1){
				$this->load->model('login_model');
				$data['name']=$this->login_model->customerdata($customer);
				$this->load->view('template/custheader');
				$this->load->view('accounts/customer/dashboard',$data);
				$this->load->view('template/footer');
			}
			else if($vendor==1){
				$this->load->view('template/custheader');
				$this->load->view('accounts/vendor/dashboard');
				$this->load->view('template/footer');
			}
			else if($manufacturer==1){
				$this->load->view('template/custheader');
				$this->load->view('accounts/manufactuer/dashboard');
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
