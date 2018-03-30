<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_upevents extends CI_Controller {

	
	public function index()
	{

		$type = $this->session->userdata('utype');

		if ($type == 'Guest') {

					    $data['title'] = "Upcoming Events";
		$this->load->view('Guest/upevents',$data);


}else{
			$this->session->sess_destroy();
	   		redirect('login');
		}








	}





}
