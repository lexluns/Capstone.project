<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_virtual extends CI_Controller {

	
	public function index()
	{
$type = $this->session->userdata('utype');

		if ($type == 'Guest') {
		$this->load->library('Googlemaps');
		$this->googlemaps->initialize();
		$data['map'] = $this->googlemaps->create_map();
					    $data['title'] = "Main Museum Virtual Tour";
		$this->load->view('Guest/virtual', $data);



}else{
			$this->session->sess_destroy();
	   		redirect('login');
		}







	}





}
