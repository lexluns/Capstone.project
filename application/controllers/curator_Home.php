<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curator_Home extends CI_Controller {


	

		public function __construct(){
		parent::__construct();
		$this->load->model('m_login');

	}

	
	public function index()
	{

		$type = $this->session->userdata('utype');

		if ($type == 'Curator') {
				$data['disp'] = $this->m_login->getnum();
				$data['dispitems'] = $this->m_login->getnum_items();
				$data['dispres'] = $this->m_login->getnum_res();
				$data['dispevents'] = $this->m_login->getnum_events();
				$data['display']=$this->m_login->display();
			   $this->load->view('Curator/index',$data); 

			
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
