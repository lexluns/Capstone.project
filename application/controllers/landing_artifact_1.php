<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing_artifact_1 extends CI_Controller {

	
	public function index()
	{


		$data['title'] = "Collections";
		$this->load->view('Landing/artifact_1',$data);


	}





}
