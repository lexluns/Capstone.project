<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff_Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('staff_model', 'sm');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}
	
	public function index(){

		$id = $this->session->userdata('id');

		$data['staff_info'] = $this->sm->getProfileRecord($id);

		// $this->session->user_id = $data['guest_info']['User_id'];

		$this->load->view('Staff/myProfile', $data);
	
	}

	// public function EditInfo() {

	// 	$id = $this->session->user_id;
	// 	$data['staff_info'] = $this->sm->getProfileRecord($id);
	// 	$this->load->view('Staff/myProfile', $data);

	// }

	public function InfoSubmit() {
		$id = $this->input->post('User_id'); 
		$seshid = $this->session->userdata('id');

		if($seshid != $id ){
		redirect(staff_Profile);		

		}

		$db = new staff_model;
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
		redirect('staff_Profile');
	}




	public function upload_profile_image() {

	

		$id = $this->input->post('User_id'); 
		$seshid = $this->session->userdata('id');

		if($seshid != $id ){
		redirect(staff_Profile);		

		}
		$db = new staff_model();



		$config['upload_path']    = './assets/profile_image/';
		$config['allowed_types']  = 'jpeg|jpg|png';
	    $config['max_size']       = 9999999;
	    $config['max_width']      =	99999;
		$config['max_height']     =	99999;

	    $this->load->library('upload', $config);

	    if(! $this->upload->do_upload('user_dp')) {
	     
	    $this->session->set_flashdata('error', 'Error file format');
        redirect('staff_profile');

	    }

	  	else {

	  		$file =$this->upload->data();

			$data = array (
				'user_dp' => base_url(). "assets/profile_image/". $file['file_name']
				);
			$_SESSION['pic'] = base_url(). "assets/profile_image/". $file['file_name'];
			$db->Upload_Picture($id, $data);
			$this->session->set_flashdata('success', 'Picture succesfully changed!');
			redirect('staff_Profile');

		}
		
	}



	public function changePassword() {

		// $this->form_validations->set_rules('upass', 'Password', 'required');
		 $this->form_validation->set_rules('npass', 'New Password', 'required');
		 $this->form_validation->set_rules('rpass', 'Confirm Password', 'required|matches[npass]');

		$this->load->library('form_validation');

		// $pass1 = $this->input->post('nupass');
		// $pass2 = $this->input->post('cupass');

		// $query = $this->db->get('user');

		if($this->form_validation->run() == FALSE ){
			$this->session->set_flashdata('error', 'Password does not match');
			redirect('staff_profile');
		}

		else {


		$id = $this->input->post('User_id'); 
		$seshid = $this->session->userdata('id');

		if($seshid != $id ){
		redirect(staff_Profile);		

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
					redirect('staff_profile');
					}else{
					 $this->session->set_flashdata('error', 'Invalid password');
					redirect('staff_profile');
					}

		}


	}




}

?>