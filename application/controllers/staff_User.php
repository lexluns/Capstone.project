<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff_User extends CI_Controller {

    

        public function __construct(){
        parent::__construct();
        $this->load->model('m_user_curator');

    }




    public function index()
    {

    	$type = $this->session->userdata('utype');

		if ($type == 'Staff') {
         $id = $this->session->userdata('id');
        $data['display']=$this->m_user_curator->form_display($id);
        $this->load->view('staff/Useraccounts',$data);
        }else{
			$this->session->sess_destroy();
	   		redirect('login');
		}
    }

   


}
