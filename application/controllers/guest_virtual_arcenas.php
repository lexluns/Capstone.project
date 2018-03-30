<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_virtual_arcenas extends CI_Controller {

	
	public function index()
	{
		$type = $this->session->userdata('utype');

		if ($type == 'Guest') {
		$this->load->library('location');
		$this->location->initialize();
		$data['map'] = $this->location->create_map();
			    $data['title'] = "Arcenas Virtual Tour";
		$this->load->view('Guest/virtual_arcenas', $data);


	}else{
			$this->session->sess_destroy();
	   		redirect('login');
		}








	}





}
