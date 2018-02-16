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

      switch ($this->input->post('usertype')) {
        case 'customer':
          $this->load->model('login_model');
          $username = $this->input->post('username');
          $password = sha1($this->input->post('password'));
          if($this->login_model->customerlogin($username,$password)){
            $this->login_model->updatecustomer($username,$password,1);
            redirect(base_url());
          }else{
            echo "error";
          }
          break;

        case 'vendor':
          $this->load->model('login_model');
          $username = $this->input->post('username');
          $password = sha1($this->input->post('password'));
          if($this->login_model->vendorlogin($username,$password)){
            $name = $this->login_model->vendorname($username,$password);
            if($name->num_rows()> 0){
              foreach($name->result() as $row){
                  echo "<br>Hello ". $row->vendName;
              }
            }
          }
          break;

        case 'manufacturer':
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
          break;

        default:
          echo "error";
          break;
      }
    }
}
?>
