<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class curator_Schedule extends CI_Controller
{
  public function __construct() {
      parent::__construct();
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library(['form_validation','session']);
    }

     public function index()
     {

      $type = $this->session->userdata('utype');

    if ($type == 'Curator') {
        $db = new m_schedule();
        $data['event']=$db->view_schedule();  
        $this->load->view('curator/schedule', $data);   

    }else{
      $this->session->sess_destroy();
        redirect('login');
    } 
     }

    public function add_event() 
{

    $this->form_validation->set_rules('name','title','trim|required');
    $this->form_validation->set_rules('start_date','starting date','trim|required');
    $this->form_validation->set_rules('end_date','ending date','trim|required');

    if ($this->form_validation->run() == FALSE)
      { 
        $this->session->set_flashdata('message1','Error submitting form  .');
    
    $type = $this->session->userdata('utype');
    if ($type == 'Curator') {
        $db = new m_addevents();
        $data['event']=$db->view_events();  
        $this->load->view('curator/schedule', $data);  

        }else{
          $this->session->sess_destroy();
        redirect('login');
    }  
      }

      else{
    
    $name = $this->input->post("name", TRUE);
    $desc = $this->input->post("description", TRUE);
    $start_date = $this->input->post("start_date", TRUE);
    $end_date = $this->input->post("end_date", TRUE);
    $added_by =  $this->session->userdata('lname').",". " ". $this->session->userdata('fname');

    if(!empty($start_date)) {
       $sd = DateTime::createFromFormat("Y-m-d H:i", $start_date);
       $start_date = $sd->format('Y-m-d H:i:s');
       $start_date_timestamp = $sd->getTimestamp();
    } else {
       $start_date = date("Y-m-d H:i:s", time());
       $start_date_timestamp = time();
    }

    if(!empty($end_date)) {
       $ed = DateTime::createFromFormat("Y-m-d H:i", $end_date);
       $end_date = $ed->format('Y-m-d H:i:s');
       $end_date_timestamp = $ed->getTimestamp();
    } else {
       $end_date = date("Y-m-d H:i:s", time());
       $end_date_timestamp = time();
    }

    $this->m_schedule->add_event(array(
       "title" => $name,
       "description" => $desc,
       "start" => $start_date,
       "end" => $end_date,
       "added_by" => $added_by
       )
    );
            $db2 = new m_addlogs();
               $db2->Action = "Added a schedule";
               $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
               $db2->Name_item = $this->input->post('name');
              $db2->Action_time = date('Y-m-d');
              $db2->forminsert(); 
    redirect(curator_schedule);
}
}


public function get_events()
 {
     // Our Start and End Dates
    $db = new m_schedule();
     $start = $this->input->get("start");
     $end = $this->input->get("end");

     $startdt = new DateTime('now'); // setup a local datetime
     $startdt->setTimestamp($start); // Set the date based on timestamp
     $start_format = $startdt->format('Y-m-d H:i:s');

     $enddt = new DateTime('now'); // setup a local datetime
     $enddt->setTimestamp($end); // Set the date based on timestamp
     $end_format = $enddt->format('Y-m-d H:i:s');

     $events = $this->m_schedule->get_events($start_format, $end_format);

     $data_events = array();

     foreach($events->result() as $r) {

         $data_events[] = array(
             "id" => $r->ID,
             "title" => $r->title,
             "description" => $r->description,
             "end" => $r->end,
             "start" => $r->start,
             "logname" => $r->added_by
         );
     }

     echo json_encode(array("events" => $data_events));
     exit();
}


public function edit_event()
     {

    $this->form_validation->set_rules('name','title','trim|required');
    $this->form_validation->set_rules('start_date','starting date','trim|required');
    $this->form_validation->set_rules('end_date','ending date','trim|required');

    if ($this->form_validation->run() == FALSE)
      { 
        $this->session->set_flashdata('message1','Error submitting form  .');
    
    $type = $this->session->userdata('utype');
    if ($type == 'Curator') {
        $db = new m_addevents();
        $data['event']=$db->view_events();  
        $this->load->view('curator/schedule', $data);  

        }else{
          $this->session->sess_destroy();
        redirect('login');
    }  
      }

      else{

          $eventid = intval($this->input->post("eventid"));
          $event = $this->m_schedule->get_event($eventid);
          if($event->num_rows() == 0) {
               echo"Invalid Event";
               exit();
          }

          $event->row();

         $name = $this->input->post("name");
         $desc = $this->input->post("description");
         $start_date = $this->input->post("start_date");
         $end_date = $this->input->post("end_date");
         $delete = intval( $this->input->post("delete"));         

          if(!$delete) {

               if(!empty($start_date)) {
                    $sd = DateTime::createFromFormat("Y-m-d H:i", $start_date);
                    $start_date = $sd->format('Y-m-d H:i:s');
                    $start_date_timestamp = $sd->getTimestamp();
               } else {
                    $start_date = date("Y-m-d H:i:s", time());
                    $start_date_timestamp = time();
               }

               if(!empty($end_date)) {
                    $ed = DateTime::createFromFormat("Y-m-d H:i", $end_date);
                    $end_date = $ed->format('Y-m-d H:i:s');
                    $end_date_timestamp = $ed->getTimestamp();
               } else {
                    $end_date = date("Y-m-d H:i:s", time());
                    $end_date_timestamp = time();
               }

               $this->m_schedule->update_event($eventid, array(
                    "title" => $name,
                    "description" => $desc,
                    "start" => $start_date,
                    "end" => $end_date,
                    )
               );

          } else {
               $this->m_schedule->delete_event($eventid);
          }

            $db2 = new m_addlogs();
               $db2->Action = "Edited a schedule";
               $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
               $db2->Name_item = $this->input->post('name');
              $db2->Action_time = date('Y-m-d');
              $db2->forminsert(); 
          redirect(curator_Schedule);
     }
   }

}


?>