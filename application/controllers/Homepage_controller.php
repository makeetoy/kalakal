<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// TODO:
// 1. Newsletter Module
// 2. Footer Links

class Homepage_controller extends CI_Controller {

	public function index(){
		$this->load->model("IsLogin_model");
		$logincust=$this->IsLogin_model->iflogin();
		$loginvend=$this->IsLogin_model->iflogin();
		$loginmanu=$this->IsLogin_model->iflogin();
		$customer = 0;
		$vendor = 0;
		$manufacturer = 0;
			foreach($logincust->result() as $row){
				if($row->custLogin == 1){
					$customer=1;
					break;
				}
			}
			// For procsss
			/*foreach($loginvend->result() as $row){
				if($row->vendLogin == 1){
					$vendor=1;
					break;
				}
			}
			foreach($loginmanu->result() as $row){
				if($row->manuLogin == 1){
					$manu=1;
					break;
				}
			}*/
			if($customer==1){
				$this->load->model('login_model');
				$data['name']=$this->login_model->customerdata($customer);
				$this->load->view('template/header');
				$this->load->view('accounts/customer/cDashboard_view',$data);
				$this->load->view('template/footer');
			}
			else if($vendor==1){
				echo 'hello vend';
			}
			else if($manufacturer==1){
				echo 'hello manu';
			}
			else{
				$this->load->view('template/header');
				$this->load->view('homepage/homepage_view');
				$this->load->view('template/footer');
			}
		}
}
?>
