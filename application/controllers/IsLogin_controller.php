<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// TODO:
// 1. ACCESS accounts

class IsLogin_controller extends CI_Controller {
    public function index(){
      $this->load->view('template/header');
  		$this->load->view('accounts/login_view');
  		$this->load->view('template/footer');
    }
    public function logoutcustomer(){
      $this->load->model('login_model');
      $custdata = $this->login_model->customerdata(1);
      foreach($custdata->result() as $row){
        $username = $row->custUsername;
        $password = $row->custPassword;
      }
      $this->login_model->updatecustomer($username,$password,0);
      redirect(base_url());
    }


}
?>
