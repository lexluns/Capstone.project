<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class virtual extends CI_Controller {

	
	public function index()
	{

		$this->load->library('googlemaps');
		$this->googlemaps->initialize();
		$data['map'] = $this->googlemaps->create_map();
				$data['title'] = "Main Museum Virtual Tour";
		$this->load->view('Landing/virtual_main', $data);










	}





}
