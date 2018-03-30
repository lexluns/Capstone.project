<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_about extends CI_Controller {

	
	public function index()
	{

		$type = $this->session->userdata('utype');

		if ($type == 'Guest') {
				$this->load->library('maps');
		$this->maps->initialize();
		$data['map'] = $this->maps->create_map();
	    $data['title'] = "About";
		$this->load->view('Guest/about',$data);

		}else{
			$this->session->sess_destroy();
	   		redirect('login');
		}









	}





}
