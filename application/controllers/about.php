<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

	
	public function index()
	{
		$this->load->library('maps');
		$this->maps->initialize();
		$data['map'] = $this->maps->create_map();
	    $data['title'] = "About";
		$this->load->view('Landing/about',$data);

	}





}
