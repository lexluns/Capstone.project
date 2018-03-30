<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('guest_model', 'gm');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}
	
	public function index(){
	$type = $this->session->userdata('utype');

		if ($type == 'Guest') {
		$id = $this->session->userdata('id');
		$data['guest_info'] = $this->gm->getProfileRecord($id);
					    $data['title'] = "Profile";
		$this->load->view('Guest/myProfile', $data);
		}else{
			$this->session->sess_destroy();
	   		redirect('login');
		}
	
	}

	// public function EditInfo() {

	// 	$id = $this->session->user_id;
	// 	$data['guest_info'] = $this->gm->getProfileRecord($id);
	// 	$this->load->view('Guest/myProfile', $data);

	// }

	public function InfoSubmit() {


		$id = $this->input->post('User_id'); 
		$seshid = $this->session->userdata('id');

		if($seshid != $id ){
		redirect(guest_Profile);		

		}

		$db = new guest_model();
		$data = array (
			'user_fname' => ucwords($this->input->post('user_fname')),
			'user_lname' => ucwords($this->input->post('user_lname')),
			'address' => $this->input->post('address'),
			'school' => $this->input->post('school'),
			'occupation' => $this->input->post('occupation'),
			'user_bdate' => $this->input->post('bdate'),
			'age' => $this->input->post('age'),
			'contact_num' => $this->input->post('contact_num'),
			'purpose' => $this->input->post('purpose'),
			'topic' => $this->input->post('topic')
		);
		$_SESSION['fname'] = $this->input->post('user_fname');
		$_SESSION['lname'] = $this->input->post('user_lname');
		$db->EditInfo($id, $data);
		$this->session->set_flashdata('success', 'Information succesfully changed!');
		redirect('guest_profile');
	}


	public function upload_profile_image() {

	
		$id = $this->input->post('User_id'); 
		$seshid = $this->session->userdata('id');

		if($seshid != $id ){
		redirect(guest_Profile);		

		}
		$db = new guest_model();


		$config['upload_path']    = './assets/profile_image/';
		$config['allowed_types']  = 'jpeg|jpg|png';
	    $config['max_size']       = 9999999;
	    $config['max_width']      =	99999;
		$config['max_height']     =	99999;

	    $this->load->library('upload', $config);

	    if(! $this->upload->do_upload('user_dp')) {


	    $this->session->set_flashdata('error', 'Error file format');
        redirect('guest_profile');
	     	// $error = array('error' => $this->upload->display_errors() );
	     	// $this->load->view('Guest/myProfile', $error);

	    }

	  	else {

	  		$file =$this->upload->data();

			$data = array (
				'user_dp' => base_url(). "assets/profile_image/". $file['file_name']
				);
			$_SESSION['pic'] = base_url(). "assets/profile_image/". $file['file_name'];
			$db->Upload_Picture($id, $data);
			$this->session->set_flashdata('success', 'Picture succesfully changed!');
			redirect('guest_profile');

		}
		
	}



	public function changePassword() {

		$this->load->library('form_validation');
		 $this->form_validation->set_rules('npass', 'New Password', 'required');
		 $this->form_validation->set_rules('rpass', 'Confirm Password', 'required|matches[npass]');




		if($this->form_validation->run() == FALSE ){

			$this->session->set_flashdata('error', 'Password does not match');
			redirect('guest_profile');
		}

		else {


		$id = $this->input->post('User_id'); 
		$seshid = $this->session->userdata('id');

		if($seshid != $id ){
		redirect(guest_Profile);		

		}

			$oldpass = sha1($this->input->post('oldpass'));
			$db = new guest_model();
			$data['conf'] = $db->getold($id,$oldpass);


					if ($data['conf'] == TRUE) {
					$data = array (
					'upass' =>sha1( $this->input->post('npass'))
					);
					$db->EditInfo($id, $data);
					$this->session->set_flashdata('success', 'Password succesfully changed!');
					redirect('guest_profile');
					}else{
					 $this->session->set_flashdata('error', 'Invalid password');
					redirect('guest_profile');
					}

			
		}


	}








}


?>