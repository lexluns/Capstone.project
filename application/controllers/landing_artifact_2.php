<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing_artifact_2 extends CI_Controller {

	
	public function index()
	{


		$data['title'] = "Collections";
		$this->load->view('Landing/artifact_2',$data);


	}





}
