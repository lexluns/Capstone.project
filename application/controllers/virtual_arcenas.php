<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class virtual_arcenas extends CI_Controller {

	
	public function index()
	{

		$this->load->library('location');
		$this->location->initialize();
		$data['map'] = $this->location->create_map();
		$data['title'] = "Arcenas Museum Virtual Tour";
		$this->load->view('Landing/virtual_arcenas', $data);











	}





}
