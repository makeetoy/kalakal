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
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run()){
      switch ($this->input->post('usertype')) {
        case 'customer':
          $this->load->model('login_model');
          $username = $this->input->post('username');
          $password = sha1($this->input->post('password'));
          $custLogin = true;
          if($this->login_model->customerlogin($username,$password)){
            $session_data = array(
               'username' => $username,
               'custLogin' => $custLogin
            );
            $this->session->set_userdata($session_data);
            redirect(base_url());
          }else{
            $this->session->set_flashdata('error', 'Invalid Username and Password');
            redirect(base_url().'login');
          }
          break;

        case 'vendor':
          $this->load->model('login_model');
          $username = $this->input->post('username');
          $password = sha1($this->input->post('password'));
          $vendLogin = true;
          if($this->login_model->vendorlogin($username,$password)){
            $session_data = array(
               'username' => $username,
               'vendLogin' => $vendLogin
            );
            $this->session->set_userdata($session_data);
            redirect(base_url());
          }else{
            $this->session->set_flashdata('error', 'Invalid Username and Password');
            redirect(base_url().'login');
          }
          break;

        case 'manufacturer':
          $this->load->model('login_model');
          $username = $this->input->post('username');
          $password = sha1($this->input->post('password'));
          $manuLogin= true;
          if($this->login_model->manufacturerlogin($username,$password)){
            $session_data = array(
               'username' => $username,
               'manuLogin' => $manuLogin
            );
            $this->session->set_userdata($session_data);
            redirect(base_url());
          }else{
            $this->session->set_flashdata('error', 'Invalid Username and Password');
            redirect(base_url().'login');
          }
          break;

        default:
          echo "error";
          break;
      }
    }
    }
    public function logoutcustomer(){
      $this->session->unset_userdata('custLogin');
      redirect(base_url());
    }
    public function logoutvendor(){
      $this->session->unset_userdata('vendLogin');
      redirect(base_url());
    }
    public function logoutmanufacturer(){
      $this->session->unset_userdata('manuLogin');
      redirect(base_url());
    }
  }
?>
