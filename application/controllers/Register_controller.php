<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {
  public function index(){
    $this->load->view('template/header');
    $this->load->view('accounts/register_view');
    $this->load->view('template/footer');
  }

  public function registerValidation(){
    if($this->input->post('create_customer')=="Register as Customer"){
      $data = array(
          "custName" => $this->input->post("name"),
          "custAddress" => $this->input->post("address"),
          "custEmail" => $this->input->post("email"),
          "custContact" => $this->input->post("contact"),
          "custUsername" => $this->input->post("username"),
          "custPassword" => sha1($this->input->post("password"))
      );
      $this->load->model('register_model');
      $this->register_model->registercustomer($data);
      echo "Customer Success!";
    }

    else if($this->input->post('create_vendor')=="Register as Vendor"){
      $data = array(
            "vendName" => $this->input->post("name"),
            "vendAddress" => $this->input->post("address"),
            "vendEmail" => $this->input->post("email"),
            "vendContact" => $this->input->post("contact"),
            "vendUsername" => $this->input->post("username"),
            "vendPassword" => sha1($this->input->post("password"))
        );
        $this->load->model('register_model');
        $this->register_model->registervendor($data);
        echo "Vendor Success!";
    }

    else if($this->input->post('create_Manufacturer')=="Register as Manufacturer"){
        $data = array(
            "manuName" => $this->input->post("name"),
            "manuAddress" => $this->input->post("address"),
            "manuEmail" => $this->input->post("email"),
            "manuContact" => $this->input->post("contact"),
            "manuUsername" => $this->input->post("username"),
            "manuPassword" => sha1($this->input->post("password"))
        );
        $this->load->model('register_model');
        $this->register_model->registermanufacturer($data);
        echo "Manufacturer Success";
    }
  }
}
?>
