<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff_Events extends CI_Controller {

public function __construct()
   {
      parent::__construct();
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library(['form_validation','session']);

   }


public function index()
	{
		$type = $this->session->userdata('utype');
		if ($type == 'Staff') {
        $db = new m_addevents();
        $data['event']=$db->view_events();  
        $this->load->view('staff/events', $data);  

        }else{
        	$this->session->sess_destroy();
	   		redirect('login');
		}  

	}

public function addevents()
	{

		$this->form_validation->set_rules('etitle','title','trim|required');
		$this->form_validation->set_rules('etagline','tagline','trim|required');
		$this->form_validation->set_rules('edescription','description','trim|required');
		$this->form_validation->set_rules('estart','starting date','trim|required');
		$this->form_validation->set_rules('eend','ending date','trim|required');
		$this->form_validation->set_rules('etag','tagline','trim|required');


		if (empty($_FILES['eventdp']['name']))
{
    $this->form_validation->set_rules('eventdp', 'Event photo', 'required');
}


		if ($this->form_validation->run() == FALSE)
			{	
				$this->session->set_flashdata('message1','Error submitting form  .');
		
		$type = $this->session->userdata('utype');
		if ($type == 'Staff') {
        $db = new m_addevents();
        $data['event']=$db->view_events();  
        $this->load->view('staff/events', $data);  

        }else{
        	$this->session->sess_destroy();
	   		redirect('login');
		}  
			}

			else{

		$db = new m_addevents();
		$confirm = 	$this->input->post('etitle');
		$data['logged'] = $db->confrec($confirm);

		if ($data['logged'] == TRUE ) {

			  $this->session->set_flashdata('error', 'Event already existed');
			  redirect('staff_Events');

		}else{


				  $config['upload_path']    = './assets/uploads/events_dp/';
					  $config['allowed_types']  =   'gif|jpg|png|jpeg';
				      $config['max_size']       =   99999999999;
					  $config['max_width']      =	99999999999;
					  $config['max_height']     =	99999999999;
				      $this->load->library('upload', $config);

				     if(! $this->upload->do_upload('eventdp')){
				     
				     $this->session->set_flashdata('error', 'Error file format');
			 		redirect('staff_events');
				     	

				     }
				  	else{
				  	$file =$this->upload->data();
				  	$db = new m_addevents();
			        $db->event_name = $this->input->post('etitle');
			 		$db->event_subname = $this->input->post('etagline');
			 		$db->event_desc = $this->input->post('edescription');
			 		$db->event_tags = $this->input->post('etag');
			 		$db->event_start = $this->input->post('estart');
			 		$db->event_end = $this->input->post('eend');
			 		$db->event_photo = base_url(). "assets/uploads/events_dp/". $file['file_name'];
			 		$db->forminsert();

			 		$db2 = new m_addlogs();
       				 $db2->Action = "Added an event";
       				 $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
       				 $db2->Name_item = $this->input->post('etitle');
        			$db2->Action_time = date('Y-m-d');
        			$db2->forminsert(); 

			 		 $this->session->set_flashdata('success', 'Event successfully added');
			 		redirect('staff_events');
			 	    }


		}

	}
					

	}

public function deleteEvents($id = ' ') {
		
		  $db2 = new m_addlogs();
		$where = array('event_id' => $id);
		 $data['stats'] = $db2->read('event',$where);

 foreach($data['stats'] as $data_item){
            $eventname = $data_item->event_name;
        }


        $db2->Action = "Deleted an Item";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $eventname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();

		$db = new m_addevents();
		$db->delete('event', $where);
		 $this->session->set_flashdata('success', 'Event successfully deleted');
		redirect('staff_events');
}



public function updateevents() {
	
		$this->form_validation->set_rules('event_name','title','trim|required');
		$this->form_validation->set_rules('event_subname','tagline','trim|required');
		$this->form_validation->set_rules('event_desc','description','trim|required');
		$this->form_validation->set_rules('event_start','starting date','trim|required');
		$this->form_validation->set_rules('event_end','ending date','trim|required');
		$this->form_validation->set_rules('event_tags','tagline','trim|required');

		if ($this->form_validation->run() == FALSE)
			{	
				$this->session->set_flashdata('message1','Error submitting form  .');
		
		$type = $this->session->userdata('utype');
		if ($type == 'Staff') {
        $db = new m_addevents();
        $data['event']=$db->view_events();  
        $this->load->view('staff/events', $data);  

        }else{
        	$this->session->sess_destroy();
	   		redirect('login');
		}  
			}

			else{

		$db = new m_addevents();

		$id = $this->input->post('event_id'); 
        
        if (isset($_FILES['event_photo']) && $_FILES['event_photo']['name'] != '') {
                       
        $config['upload_path'] 		= './assets/uploads/events_dp/';
		$config['allowed_types'] 	= 'jpeg|jpg|gif|png';
		$config['max_size']       	=  99999999999;
		$config['max_width']      	=  99999999999;
		$config['max_height']     	=  99999999999;

		$this->load->library('upload', $config);
		
		if(! $this->upload->do_upload('event_photo')){
	     
	     	  $this->session->set_flashdata('error', 'Error file format');
			 		redirect('staff_events');
				     	

	     }
	  		$file =$this->upload->data();

			$data = array (
				'event_name' => $this->input->post('event_name'),
				'event_subname' => $this->input->post('event_subname'),
				'event_desc' => $this->input->post('event_desc'),
				'event_start' => $this->input->post('event_start'),
				'event_end' => $this->input->post('event_end'),
				'event_tags' => $this->input->post('event_tags'),
				'event_photo' => base_url(). "./assets/uploads/events_dp/". $file['file_name']
				);

			$db->eventupdate($id, $data);

			$db2 = new m_addlogs();
        $db2->Action = "Updated an event";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $this->input->post('event_name');
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert(); 
			  $this->session->set_flashdata('success', 'Event successfully updated');
			redirect('staff_events');

		}else{

			$data = array (
				'event_name' => $this->input->post('event_name'),
				'event_subname' => $this->input->post('event_subname'),
				'event_desc' => $this->input->post('event_desc'),
				'event_start' => $this->input->post('event_start'),
				'event_end' => $this->input->post('event_end'),
				'event_tags' => $this->input->post('event_tags'),
				);

			$db->eventupdate($id, $data);


				$db2 = new m_addlogs();
        $db2->Action = "Updated an event";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $this->input->post('event_name');
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert(); 
			 $this->session->set_flashdata('success', 'Event successfully updated');
			redirect('staff_events');

		}
		}
	}


public function unfeature($id =" "){
	     $db = new m_addevents;  
		 $data = array(
            'event_label' => ''
         );
		  $db->updatestatus($id,$data);
         redirect('staff_Events');
	}

public function feature($id =" "){
	     $db = new m_addevents;  
		 $data = array(
            'event_label' => 'Featured'
         );
		  $db->updatestatus($id,$data);
         redirect('staff_Events');
	}
}
?>