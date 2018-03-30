<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_user extends CI_Controller {
const DB_TABLE = 'user';
const DB_TABLE_PK = 'User_id';


	public function __construct(){
		parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('session');
			
	}


	public function index()
	{	

		$this->load->view('Curator/registerv1_admin');

	}




	public function regmodal(){
		$this->form_validation->set_rules('eadd','Email','trim|valid_email|is_unique[user.uname]|required');
		$this->form_validation->set_rules('pass','password','trim|min_length[6]|required');
		$this->form_validation->set_rules('confpass','Password confirmation','trim|required|matches[pass]');
		$this->form_validation->set_rules('fname','first name','trim|required');
		$this->form_validation->set_rules('lname','last name','trim|required');
		$this->form_validation->set_message('is_unique','Email already taken');
		$this->form_validation->set_message('matches','Passwords do not match');

		$catch1= $this->input->post('pass');
		$catch2= $this->input->post('confpass');
		$catch3= $this->input->post('eadd');
		
		
		$query = $this->db->get('user');



		$var = new m_register();

		// $data['checked'] = $var->emailcheck($catch3);

		// if($data['checked'] == TRUE){


		// 	$this->session->set_flashdata('msg3','Email already taken');


		// }
		if($catch2!=$catch1){
			$this->session->set_flashdata('msg2','Passwords do not match');


		}
		if ($this->form_validation->run() == FALSE)
			{	




			 $type = $this->session->userdata('utype');

    if ($type == 'Curator') {
        $id = $this->session->userdata('id');
        $data['display']=$this->m_user_curator->form_display($id);
        $this->load->view('Curator/userAccounts',$data);

      }else{
      $this->session->sess_destroy();
        redirect('login');
    }
			}
			



			else{	


    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }



				     $db = new m_register();
					$db->uname = $this->input->post('eadd');
			 		$db->upass = sha1($this->input->post('pass'));
			 		$db->code = $randomString;
			 		$db->user_fname = ucwords($this->input->post('fname'));
			 		$db->user_lname =  ucwords($this->input->post('lname'));
					$db->user_type =  $this->input->post('user_type');
					$db->user_status ='Active';
					$db->Activated ='FALSE';
					$db->user_dp =  base_url(). "assets/uploads/defaltdpqwerteeqweqweqweqwerr2938euwqe.png";
					$db->user_bdate ='static';
					$db->form_insert();
					$this->session->set_flashdata('success','Account successfully created');



					$fname1 = $this->input->post('fname');
			 		$fname2 =  $this->input->post('lname');
		 $db2 = new m_addlogs();			
        $db2->Action = "Registered a user";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item =  $fname2."," . " " . $fname1;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
					redirect(curator_User);
				}




	}

}




				
		 		