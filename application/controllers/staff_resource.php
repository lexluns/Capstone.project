<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff_resource extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('resource_model', 'srm');
		$this->load->model('m_user_curator', 'srz');
		$this->load->helper(array('form', 'url'));
		$this->load->library(['form_validation','session']);
	}
	
	public function index()
	{
		$type = $this->session->userdata('utype');

		if ($type == 'Staff') {
		$id = $this->session->userdata('id');
		$this->load->model('resource_model');
		$data['learning'] = $this->resource_model->viewAllresourcesMuseum();
		$data['display']=$this->m_user_curator->notadmin($id);
		$this->load->view('Staff/learningResources', $data);

		}else{
			$this->session->sess_destroy();
	   		redirect('login');
		}


	}


	public function viewAllresources() {

		$data['learning'] = $this->srm->viewAllresourcesMuseum();
		$this->load->view('Staff/learningResources', $data);
	} 


	public function deleteResources($id = ' ') {
		
			$db2 = new m_addlogs();
        $where = array('resource_id' => $id);
        $data['stats'] = $db2->read('learning_resources',$where);

        foreach($data['stats'] as $data_item){
            $artifactname = $data_item->resourceTitle;
        }


        $db2->Action = "Deleted a resource";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();

		$where = array('resource_id' => $id);
		$where2 = array('res_id' => $id);
		$db = new resource_model();
		$db->deleteentry('entries',$where2);
		$db->delete('learning_resources',$where);


	    $this->session->set_flashdata('success', 'Resource deleted');
		redirect('staff_resource');



	}



function do_upload_file($filename) {

		$config['upload_path'] 		= './assets/documents/';
		$config['allowed_types'] 	= 'doc|docx|pdf|odt|rtf|tex|txt|wks|wps|wpd|xls|xlsx|png|jpg|jpeg';
		$config['max_size']       	=  99999999999;
		$config['max_width']      	=  99999999999;
		$config['max_height']     	=  99999999999;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($filename)) {
    
    		$error = array('error' => $this->upload->display_errors());
        
        	$this->load->view('Staff/learningResources', $error);

		} else {
 
 			$file =$this->upload->data();

			$data = array('upload_data' => $this->upload->data());

			return  $file['file_name'];

		}

	}


	public function createResource() {

			$db = new resource_model();
	$confirm = 	$this->input->post('resourceTitle');
		$data['logged'] = $db->confrecs($confirm);
   
			if( $data['logged'] )
			{


				   $this->session->set_flashdata('error', 'Existing Title Please Try Again');
				  redirect('staff_resource');
			   

			}






		$this->form_validation->set_rules('resourceAuthor','Author','trim|required');
		$this->form_validation->set_rules('resourceTitle','Title','trim|required');
		$this->form_validation->set_rules('date_pub','Year of Publication','trim|required');
		$this->form_validation->set_rules('journal_book','Journal/Book','trim|required');
		$this->form_validation->set_rules('place_of_publication','Place of Publication','trim|required');
		$this->form_validation->set_rules('publisher','Publish','trim|required');
		$this->form_validation->set_rules('resourceType','Type','trim|required');
		

			if (empty($_FILES['resourceFile']['name']))
{
    $this->form_validation->set_rules('resourceFile', 'Document File', 'required');
}

		if ($this->form_validation->run() == FALSE) {	
			
			$this->session->set_flashdata('message1','Error submitting form  .');
					
			$type = $this->session->userdata('utype');

			if ($type == 'Staff') {
			$id = $this->session->userdata('id');
			$this->load->model('resource_model');
			$data['learning'] = $this->resource_model->viewAllresourcesMuseum();
			$data['display']=$this->m_user_curator->notadmin($id);
			$this->load->view('Staff/learningResources', $data);

			}else{
				$this->session->sess_destroy();
		   		redirect('login');
				}
			} else {

		$allowed = array('doc','docx','pdf','odt','rtf','tex','txt','wks','wps','wpd');
       	$filename = $_FILES['resourceFile']['name'];
       	$ext = pathinfo($filename, PATHINFO_EXTENSION);

       	if(!in_array($ext, $allowed)) {
       		echo 'error';
       	}
	  	
	   	else if (isset($_FILES['resourceFile']) && $_FILES['resourceFile']['name'] != ''){
                
             $file = $this->do_upload_file('resourceFile');
            
        }
         
        if (isset($_FILES['resourceImage']) && $_FILES['resourceImage']['name'] != '') {
                
            $file1 = $this->do_upload_file('resourceImage');
            
        } 

		if($_FILES['resourceImage']['size'] == 0 ) {
                 
            $file1 = "pdf.png";
            
        }

        $db = new resource_model();

	  		$db->resourceTitle = $this->input->post('resourceTitle');
	  		$db->resourceAuthor = $this->input->post('resourceAuthor');
			$db->date_pub = $this->input->post('date_pub');
			$db->place_of_publication = $this->input->post('place_of_publication');
			$db->journal_book = $this->input->post('journal_book');
			$db->publisher = $this->input->post('publisher');
			$db->resourceType = $this->input->post('resourceType');
			$db->resourceFile = base_url(). "assets/documents/". $file;
			$db->resourceImage = base_url(). "assets/documents/". $file1;






	  		$db->createResource();

	  		    $db2 = new m_addlogs();
       				 $db2->Action = "Added a resource";
       				 $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
       				 $db2->Name_item = $this->input->post('resourceTitle');
        			$db2->Action_time = date('Y-m-d');
        			$db2->forminsert(); 
	  		$this->session->set_flashdata('success', 'Resource successfully created');
	  		redirect('staff_resource');
					
		}			
		
	}




	public function updateResources() {


		$this->form_validation->set_rules('resourceAuthor','Author','trim|required');
		$this->form_validation->set_rules('resourceTitle','Title','trim|required');
		$this->form_validation->set_rules('date_pub','Year of Publication','trim|required');
		$this->form_validation->set_rules('journal_book','Journal/Book','trim|required');
		$this->form_validation->set_rules('place_of_publication','Place of Publication','trim|required');
		$this->form_validation->set_rules('publisher','Publish','trim|required');
		$this->form_validation->set_rules('resourceType','Type','trim|required');

		if ($this->form_validation->run() == FALSE) {	
			
			$this->session->set_flashdata('message1','Error submitting form  .');
					
			$type = $this->session->userdata('utype');

			if ($type == 'Staff') {
			$id = $this->session->userdata('id');
			$this->load->model('resource_model');
			$data['learning'] = $this->resource_model->viewAllresourcesMuseum();
			$data['display']=$this->m_user_curator->notadmin($id);
			$this->load->view('Staff/learningResources', $data);

			}else{
				$this->session->sess_destroy();
		   		redirect('login');
				}
			} else {

		$db = new resource_model();

		$id = $this->input->post('resource_id');
		$db2 = new m_addlogs();
        $where = array('resource_id' => $id);
		$data = array(
				'resourceTitle' => $this->input->post('resourceTitle'),
		 		'resourceAuthor' => $this->input->post('resourceAuthor'),
		 		'date_pub' => $this->input->post('date_pub'),
		 		'place_of_publication' => $this->input->post('place_of_publication'),
		 		'journal_book' => $this->input->post('journal_book'),
		 		'publisher' => $this->input->post('publisher'),
		 		'resourceType' => $this->input->post('resourceType')
		);
		
        if (isset($_FILES['resourceFile']) && $_FILES['resourceFile']['name'] != '') {
                       
	        $config['upload_path'] 		= './assets/documents/';
			$config['allowed_types'] 	= 'doc|docx|pdf|odt|rtf|tex|txt|wks|wps|wpd|xls|xlsx|png|jpg|jpeg';
			$config['max_size']       	=  99999999999;
			$config['max_width']      	=  99999999999;
			$config['max_height']     	=  99999999999;

			$this->load->library('upload', $config);
			
			if(! $this->upload->do_upload('resourceFile')){
		     
		     	$error = array('error' => $this->upload->display_errors() );
		     	 $this->load->view('Staff/learningResources', $error);

		     }
	  		
	  		$file_doc = $this->upload->data();

			$data += ['resourceFile' => base_url(). "assets/documents/" . $file_doc['file_name']];
		}


		if(isset($_FILES['resourceImage']) && $_FILES['resourceImage']['name'] != ''){
			$config['upload_path'] 		= './assets/documents/';
			$config['allowed_types'] 	= 'doc|docx|pdf|odt|rtf|tex|txt|wks|wps|wpd|xls|xlsx|png|jpg|jpeg';
			$config['max_size']       	=  99999999999;
			$config['max_width']      	=  99999999999;
			$config['max_height']     	=  99999999999;

			$this->load->library('upload', $config);
			
			if(! $this->upload->do_upload('resourceImage')){
		     
		     	$error = array('error' => $this->upload->display_errors() );
		     	 $this->load->view('Staff/learningResources', $error);

		     }
		     
		     $file_img = $this->upload->data();

		     $data += ['resourceImage' => base_url(). "assets/documents/" . $file_img['file_name']];
		}


		$db->updateResources($id, $data);



        $data['stats'] = $db2->read('learning_resources',$where);

        foreach($data['stats'] as $data_item){
            $artifactname = $data_item->resourceTitle;
        }


        $db2->Action = "Updated a resource";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
		$this->session->set_flashdata('success', 'Resource successfully updated');
		redirect('staff_resource');

		}

	}







	public function ressend() {


		$db = new resource_model();
		$user = $this->input->post('resource_email');
		$data['exist'] = $db->checkuser($user);


		if($data['exist'] == FALSE){
	    $this->session->set_flashdata('error', 'User email does not exist');
 		redirect('staff_resource');
		}else{
		$where = array('uname' => $user);
		$data['type'] = $db->checkusertype('user',$where);
		 foreach($data['type'] as $data_item){
           $acctype = $data_item->user_type;
        }
        	if ($acctype != 'Guest' ) {
        		$this->session->set_flashdata('error', 'User is not a guest');
 				redirect('staff_resource');
        }else{
        	$useremail = $this->input->post('resource_email');
        	$where = array('uname' => $useremail);
		    $data['type'] = $db->checkusertype('user',$where);
		   foreach($data['type'] as $data_item){
           $userid = $data_item->User_id;
           }


	        $resid =  $this->input->post('resource_id');
        	$data['conf'] = $db->confrec($userid, $resid);

        	if($data['conf'] == TRUE){
        		$this->session->set_flashdata('error', 'This resource is already sent');
 				redirect('staff_resource');
        	}else{
		        			$data = array(
				   'user_id' => $userid,
				   'res_id' =>  $this->input->post('resource_id')    
				);
				$db->insertsendResources($data); 
				$this->session->set_flashdata('success', 'Resource sent');
			 $db2 = new m_addlogs();
     		 $where = array('resource_id' => $resid);
       		 $data['stats'] = $db2->read('learning_resources',$where);

        foreach($data['stats'] as $data_item){
            $name = $data_item->resourceTitle;
        }

				
       			   $db2->Action = "Resource sent";
       			   $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
       			   $db2->Name_item = $name;
        		   $db2->Action_time = date('Y-m-d');
        		   $db2->forminsert(); 

				redirect('staff_resource');

        	}


        }


		}


		


	}


















}
?>