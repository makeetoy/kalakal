<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {
  public function index(){
    $this->load->view('template/header');
    $this->load->view('user_account/register_view');
    $this->load->view('template/footer');
  }
  public function registervalidation(){
    if($this->input->post('create_customer')=="Create as Customer"){
    $password1 = $this->input->post("password_1");
    $password2 = $this->input->post("password_2");
		if($password1 == $password2){
      $data = array(
          "custName" => $this->input->post("name"),
          "custAddress" => $this->input->post("address"),
          "custEmail" => $this->input->post("email"),
          "custContact" => $this->input->post("contact"),
          "custUsername" => $this->input->post("username"),
          "custPassword" => $this->input->post("password_1"),

      );
      $this->load->model('register_model');
      $this->register_model->registercustomer($data);
      echo "Customer!";
    }
    else{
      $this->session->set_flashdata('error','Passwords does not match');
      $this->index();
    }
    }
    else if($this->input->post('create_vendor')=="Create as Vendor"){
      $password1 = $this->input->post("password_1");
      $password2 = $this->input->post("password_2");
  		if($password1 == $password2){
        $data = array(
            "vendName" => $this->input->post("name"),
            "vendAddress" => $this->input->post("address"),
            "vendEmail" => $this->input->post("email"),
            "vendContact" => $this->input->post("contact"),
            "vendUsername" => $this->input->post("username"),
            "vendPassword" => $this->input->post("password_1"),

        );
        $this->load->model('register_model');
        $this->register_model->registervendor($data);
        echo "Vendor!";
      }
      else{
        $this->session->set_flashdata('error','Passwords does not match');
        $this->index();
      }
    }
    else if($this->input->post('create_Manufacturer')=="Create as Manufacturer"){
      $password1 = $this->input->post("password_1");
      $password2 = $this->input->post("password_2");
  		if($password1 == $password2){
        $data = array(
            "manuName" => $this->input->post("name"),
            "manuAddress" => $this->input->post("address"),
            "manuEmail" => $this->input->post("email"),
            "manuContact" => $this->input->post("contact"),
            "manuUsername" => $this->input->post("username"),
            "manuPassword" => $this->input->post("password_1"),

        );
        $this->load->model('register_model');
        $this->register_model->registermanufacturer($data);
        echo "Manufacturer";
      }
      else{
        $this->session->set_flashdata('error','Passwords does not match');
        $this->index();
      }

    }
  }
}
?>
