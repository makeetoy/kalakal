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
    public function logoutvendor(){
      $this->load->model('login_model');
      $venddata = $this->login_model->vendordata(1);
      foreach($venddata->result() as $row){
        $username = $row->vendUsername;
        $password = $row->vendPassword;
      }
      $this->login_model->updatevendor($username,$password,0);
      redirect(base_url());
    }
    public function logoutmanufacturer(){
      $this->load->model('login_model');
      $manudata = $this->login_model->manufactuerdata(1);
      foreach($manudata->result() as $row){
        $username = $row->manuUsername;
        $password = $row->manuPassword;
      }
      $this->login_model->updatemanufacturer($username,$password,0);
      redirect(base_url());
    }


}
?>
