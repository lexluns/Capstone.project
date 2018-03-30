<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_pastevents extends CI_Controller {

	
	public function index()
	{

					    $data['title'] = "Past Events";
		$this->load->view('Guest/pastevents',$data);











	}





}
