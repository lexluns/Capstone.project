<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reset_pass extends CI_Controller {


		  public function __construct()
   {
      parent::__construct();
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library('session');
      $this->load->library('form_validation');

   }





	
	public function index($code)
	{

		$db = new m_login;
		$data['logged'] = $db->codereader($code);


			if($data['logged'] == FALSE)
		{
		redirect(login);	
		}
	



	     $where = array('code' => $code);
		 $data['code'] = $db->read('user',$where);
		 foreach($data['code'] as $data_item){
			$changepass = $data_item->change_pass;
				 }

	if($changepass == 'TRUE')
	{
	$this->session->set_flashdata('message','Link already expired');
	redirect('login');
	}else{
	$data['code'] = $code;
	$this->load->view('Landing/reset_pass',$data);
	}




	}

	public function landing($code){

			$db = new m_login;
		$data['logged'] = $db->codereader($code);


			if($data['logged'] == FALSE)
		{
		redirect(login);	
		}



		$db = new m_login;
	     $where = array('code' => $code);
		 $data['code'] = $db->read('user',$where);
		 foreach($data['code'] as $data_item){
			$changepass = $data_item->change_pass;
				 }

       

	if($changepass == 'TRUE')
	{
	$this->session->set_flashdata('message','Link already expired');
	redirect('login');
	}else{
	$data['code'] = $code;
	$this->load->view('Landing/reset_pass',$data);
	}


	}

	public function resetpass()
	{


		$code = $this->input->post('code');

			$db = new m_login;
		$data['logged'] = $db->codereader($code);


			if($data['logged'] == FALSE)
		{
		redirect(login);	
		}






		$db = new m_forget;
		$confpass = $this->input->post('confpass');
		$newpass = $this->input->post('newpass');
		$code = $this->input->post('code');
		 $this->form_validation->set_rules('newpass','Password','required');

		   if ($this->form_validation->run() == FALSE)
      { 

        $data['code'] = $code;
	    $this->load->view('Landing/reset_pass',$data);
      }else{

		if ($confpass == $newpass) {
			
			 $data = array(
			'upass' => sha1($newpass),
            // 'upass' => $newpass,
            'change_pass' => 'TRUE'
      
         );

	   $db->updatepass($code,$data);
	    $this->session->set_flashdata('success', 'Password changed!');
	   redirect(login);



		}else{
	    $this->session->set_flashdata('error', 'Password does not match!');	
		$data['code'] = $code;
		$this->load->view('Landing/reset_pass',$data);		

		}



	}

}




}
