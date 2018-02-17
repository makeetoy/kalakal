<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {
  public function index(){
    $this->load->view('template/header');
    $this->load->view('accounts/register_view');
    $this->load->view('template/footer');
  }

  public function registerValidation(){

    switch ($this->input->post('usertype')) {
      case 'customer':
        $data = array(
            "custName" => $this->input->post("name"),
            "custAddress" => $this->input->post("address"),
            "custEmail" => $this->input->post("email"),
            "custContact" => $this->input->post("contact"),
            "custUsername" => $this->input->post("username"),
            "custPassword" => sha1($this->input->post("password"))
        );
        $this->load->model('register_model');
        if($this->register_model->custcheckname($data["custName"])){
            $this->session->set_flashdata('nameerror', 'Name Already Exist');
            if($this->register_model->custcheckusername($data["custUsername"])){
              $this->session->set_flashdata('usernameerror', 'Username Already Exist');
              if($this->register_model->custcheckemail($data["custEmail"])){
                $this->session->set_flashdata('emailerror', 'Email Already Exist');
                redirect(base_url().'register');
              }
            }
        }
        else{
        $this->load->model('register_model');
        $this->register_model->registercustomer($data);
        echo "Customer Success!";
        }
        break;


      case 'vendor':
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
        break;

      case 'manufacturer':
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
        break;

      default:
        echo "error";
        break;
    }
  }
}
?>
