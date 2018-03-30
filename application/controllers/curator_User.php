<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curator_User extends CI_Controller {

    

        public function __construct(){
        parent::__construct();
        $this->load->model('m_user_curator');

    }




    public function index()
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

    public function stats($id =" "){

        $db2 = new m_addlogs();
        $where = array('User_id' => $id);
        $data['stats'] = $db2->read('user',$where);

        foreach($data['stats'] as $data_item){
            $userfname = $data_item->user_fname;
            $userlname = $data_item->user_lname;
        }


        $db2->Action = "Changed the status to Blocked";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item =  $userlname."," . " " . $userfname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();


         $db = new m_user_curator;  
         $data = array(
            'user_status' => 'Blocked'
         );
          $db->updatestats($id,$data);
         redirect('curator_User');

    }

    public function statsactivate($id =" "){

        $db2 = new m_addlogs();
        $where = array('User_id' => $id);
        $data['stats'] = $db2->read('user',$where);

        foreach($data['stats'] as $data_item){
              $userfname = $data_item->user_fname;
            $userlname = $data_item->user_lname;
        }


        $db2->Action = "Changed the status to Active";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item =  $userlname."," . " " . $userfname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();







         $db = new m_user_curator;
         
         $data = array(
            'user_status' => 'Active'
         );
          $db->updatestats($id,$data);
         redirect('curator_User');

    }






}
