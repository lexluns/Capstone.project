<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff_Home extends CI_Controller {

	
	public function index()
	{


	$type = $this->session->userdata('utype');

		if ($type == 'Staff') {
	    $data['disp'] = $this->m_login->getnum();
		$data['dispitems'] = $this->m_login->getnum_items();
		$data['dispres'] = $this->m_login->getnum_res();
		$data['dispevents'] = $this->m_login->getnum_events();
		$data['display']=$this->m_login->display();
		$this->load->view('Staff/index',$data);
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
