<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// TODO:
// 1. ACCESS accounts

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
        $password = sha1($this->input->post('password'));
        if($this->login_model->customerlogin($username,$password)){
          echo "Customer";
          $name = $this->login_model->customername($username,$password);
          if($name->num_rows()> 0){
  					foreach($name->result() as $row){
                echo "<br>Hello ". $row->custName;
            }
          }
        }else{
          echo "error";
        }
      }

      else if($this->input->post('login_vendor')=="Login as Vendor"){
        $this->load->model('login_model');
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        if($this->login_model->vendorlogin($username,$password)){
          echo "Vendor";
          $name = $this->login_model->vendorname($username,$password);
          if($name->num_rows()> 0){
  					foreach($name->result() as $row){
                echo "<br>Hello ". $row->vendName;
            }
          }
        }else{
          echo "error";
        }
      }

      else if($this->input->post('login_manufacturer')=="Login as Manufacturer"){
          $this->load->model('login_model');
          $username = $this->input->post('username');
          $password = sha1($this->input->post('password'));
          if($this->login_model->manufacturerlogin($username,$password)){
            echo "Manufacturer";
            $name = $this->login_model->manufacturername($username,$password);
            if($name->num_rows()> 0){
    					foreach($name->result() as $row){
                  echo "<br>Hello ". $row->manuName;
              }
            }
          }else{
            echo "error";
          }
      }
    }
}
?>
