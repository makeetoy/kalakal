<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function index(){
      $this->load->view('template/header');
  		$this->load->view('accounts/login_view');
  		$this->load->view('template/footer');
    }

    public function loginValidation(){
      if($this->input->post('login_customer')=="Login as Customer"){
        $this->load->model('login_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($this->login_model->customerlogin($username,$password)){
          echo "Customer";
        }else{
          echo "error";
        }
      }

      else if($this->input->post('login_vendor')=="Login as Vendor"){
        $this->load->model('login_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($this->login_model->vendorlogin($username,$password)){
          echo "vendor";
        }else{
          echo "error";
        }
      }

      else if($this->input->post('login_manufacturer')=="Login as Manufacturer"){
          $this->load->model('login_model');
          $username = $this->input->post('username');
          $password = $this->input->post('password');
          if($this->login_model->manufacturerlogin($username,$password)){
            echo "manufacturer";
          }else{
            echo "error";
          }
      }
    }
}
?>
