<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter_controller extends CI_Controller {

	public function index(){
		$this->load->view('homepage/homepage_view',$data);
	}

  public function submit(){
		$this->load->model('newsletter_model');
		$data = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
		);
		$this->newsletter_model->insert_newsletter($data);
		redirect(base_url()."newsletter_controller/submitted");
	}

  public function submitted(){
		 $this->load->view('homepage/homepage_view');
	}


}
?>
