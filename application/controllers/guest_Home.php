<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_Home extends CI_Controller {

	
	public function index()
	{


		$type = $this->session->userdata('utype');

		if ($type == 'Guest') {
							    $data['title'] = "Home";
				$this->load->view('Guest/Home',$data); 

		}else{
			$this->session->sess_destroy();
	   		redirect('login');
		}




	




	}



		public function logout()
	{	

		$this->session->sess_destroy();
        redirect('login');
	}


}
