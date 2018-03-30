<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curator_edit_artifact extends CI_Controller {

	
	  public function __construct()
   {
      parent::__construct();
      $this->load->model('m_addarti');
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library(['form_validation','session']);
      $this->load->library('pagination');

   }



	public function index($id = '')
	{


      $type = $this->session->userdata('utype');

    if ($type == 'Curator') {
    $db = new m_addarti;
    $data['retdata'] = $db->view($id);
	  $this->load->view('Curator/editarti', $data);
    }else{
      $this->session->sess_destroy();
        redirect('login');
    }

	}




    public function update()
    {




    $this->form_validation->set_rules('accnumber','Accession number','required');
    $this->form_validation->set_rules('dimension','Dimensions','required');
    $this->form_validation->set_rules('classify','Classification','required');
    $this->form_validation->set_rules('nameobj','Name of object or species','required');
    $this->form_validation->set_rules('nameartist','Name of artist, or Class, Order, Family, Genus','required');
    $this->form_validation->set_rules('material','Material','required');
    $this->form_validation->set_rules('dateacq','Date of acquisition','required');
    $this->form_validation->set_rules('institution','Institution','required');
    $this->form_validation->set_rules('ownership','Ownership','required');
    $this->form_validation->set_rules('location','Location in Museum','required');
    $this->form_validation->set_rules('origin','Place of origin','required');
    $this->form_validation->set_rules('price','Price paid, Estimated value(dated)','required');
    $this->form_validation->set_rules('collector','Collector, Expedition','required');
    $this->form_validation->set_rules('culture','Cultural or Ethnic group','required');
    $this->form_validation->set_rules('function','Function, Use, Utilisation','required');
    $this->form_validation->set_rules('chronology','Chronology, Doubtful attribution','required');
    $this->form_validation->set_rules('style','Style, School, Influences','required');
    $this->form_validation->set_rules('history','History','required');
    $this->form_validation->set_rules('reference','References','required');
    $this->form_validation->set_rules('mode','Mode, Source & Place of acquisition','required');
    $this->form_validation->set_rules('descp','Description, Techniques, Possible Title, Signature, Measurements','required');
     $this->form_validation->set_rules('conserv','Conservation, Restoration, Museugraphical notes','required');
      $this->form_validation->set_rules('restri','Restricted','required');




      if ($this->form_validation->run() == FALSE)
      { 
     

     $type = $this->session->userdata('utype');
    $id = $this->input->post('id');
    if ($type == 'Curator') {
    $db = new m_addarti;
    $data['retdata'] = $db->view($id);
    $this->load->view('Curator/editarti', $data);
    }else{
      $this->session->sess_destroy();
        redirect('login');
    }



      }else{











    		   $type = $this->session->userdata('utype');

    	 if ($type == 'Curator') {
        $id = $this->input->post('id');
        $db2 = new m_addlogs();
        $where = array('arti_id' => $id);
        $data['stats'] = $db2->read('artifacts',$where);

        foreach($data['stats'] as $data_item){
            $artifactname = $data_item->acc_number;
        }


        $db2->Action = "Updated an Item";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();


        $db = new m_addarti;
        // $confirm =  $this->input->post('accnumber');
        // $data['logged'] = $db->confrec($confirm);
        $data['retdata'] = $db->view($id);


          // if($data['logged'])
          //   {


          //  $this->session->set_flashdata('error', 'Existing accession number please try again');
          //  $this->load->view('Curator/editarti',$data);
               

          //   }else{

    
        $id = $this->input->post('artiid');
         $data = array(
            'name_art' => $this->input->post('nameartist'),
            'locate' => $this->input->post('location'),
            'Dimensions' => $this->input->post('dimension'),
            'acc_number' => $this->input->post('accnumber'),
            'name_obj' => $this->input->post('nameobj'),
            'institution' => $this->input->post('institution'),
            'owner' => $this->input->post('ownership'),
            'classify' => $this->input->post('classify'),
            'place_orig' => $this->input->post('origin'),
            'mode' => $this->input->post('mode'),
            'description' => $this->input->post('descp'),
            'conserv' => $this->input->post('conserv'),
            'hist' => $this->input->post('history'),
            'reference' => $this->input->post('reference'),
            'date_acq' => $this->input->post('dateacq'),
            'price' => $this->input->post('price'),
            'cultural' => $this->input->post('culture'),
            'function' => $this->input->post('function'),
            'collector' => $this->input->post('collector'),
            'chronology' => $this->input->post('chronology'),
            'style' => $this->input->post('style'),
            'material' => $this->input->post('material'),
            'arti_restrict' => $this->input->post('restri')

         );
         $db->update($id,$data);
          $db = new m_addarti;
          $data['retdata'] = $db->view($id);
          $this->session->set_flashdata('edit', 'Item has been Successfuly Edited');
          $this->load->view('Curator/viewarti', $data);

           }else{
      $this->session->sess_destroy();
        redirect('login');
    }
         
}
    }



    public function pic1(){

    	
                $db = new m_addarti;
                 $id = $this->input->post('artiid');

                 if (isset($_FILES['pic1']) && $_FILES['pic1']['name'] != ''){
                 $file1 = $this->ddoo_upload('pic1');
                 }

                 if($_FILES['pic1']['size'] == 0 ) {
                 $file1 = "defaltpicxzxzxzxzxzxzxzxzxzx.png";
                 }


                  $data = array(
            'arti_img1' => base_url(). "assets/uploads/". $file1


         );
           $db->update($id,$data);
           $db = new m_addarti;
           $data['retdata'] = $db->view($id);
           $db2 = new m_addlogs();

                  foreach($data['retdata'] as $data_item){
            $artifactname = $data_item->acc_number;
        }

                  $db2->Action = "Picture updated";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
           $this->session->set_flashdata('success', 'Picture successfully updated');
           $this->load->view('Curator/editarti', $data);

 
             

    }
    public function pic2(){
                $db = new m_addarti;
         $id = $this->input->post('artiid');

          if (isset($_FILES['pic2']) && $_FILES['pic2']['name'] != '')
                {
                 $file2 = $this->ddoo_upload('pic2');
                 }

                if($_FILES['pic2']['size'] == 0 ){
                 $file2 = "defaltpicxzxzxzxzxzxzxzxzxzx.png";
                }  

         $data = array(
            'arti_img2' => base_url(). "assets/uploads/". $file2
         );
         $db->update($id,$data);
        $db = new m_addarti;
          $data['retdata'] = $db->view($id);
 $db2 = new m_addlogs();

                  foreach($data['retdata'] as $data_item){
            $artifactname = $data_item->acc_number;
        }

                  $db2->Action = "Picture updated";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
           $this->session->set_flashdata('success', 'Picture successfully updated');
          $this->load->view('Curator/editarti', $data);


    }
    public function pic3(){
                $db = new m_addarti;
         $id = $this->input->post('artiid');

                if (isset($_FILES['pic3']) && $_FILES['pic3']['name'] != ''){
                $file3 = $this->ddoo_upload('pic3');
                }

                 if($_FILES['pic3']['size'] == 0 ){
                 $file3 = "defaltpicxzxzxzxzxzxzxzxzxzx.png";
                 }

                   $data = array(
        'arti_img3' => base_url(). "assets/uploads/". $file3
         );
         $db->update($id,$data);
        $db = new m_addarti;
          $data['retdata'] = $db->view($id);
          $db2 = new m_addlogs();

                  foreach($data['retdata'] as $data_item){
            $artifactname = $data_item->acc_number;
        }

                  $db2->Action = "Picture updated";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
           $this->session->set_flashdata('success', 'Picture successfully updated');
          $this->load->view('Curator/editarti', $data);


    }
    public function pic4(){
    $db = new m_addarti;
     $id = $this->input->post('artiid');

                if (isset($_FILES['pic4']) && $_FILES['pic4']['name'] != ''){
                $file4 = $this->ddoo_upload('pic4');
                }

                 if($_FILES['pic4']['size'] == 0 ){
                 $file4 = "defaltpicxzxzxzxzxzxzxzxzxzx.png";
                 }

                   $data = array(
        'arti_img4' => base_url(). "assets/uploads/". $file4
         );
         $db->update($id,$data);
         $db = new m_addarti;
          $data['retdata'] = $db->view($id);
          $db2 = new m_addlogs();


                  foreach($data['retdata'] as $data_item){
            $artifactname = $data_item->acc_number;
        }

                  $db2->Action = "Picture updated";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
          $this->session->set_flashdata('success', 'Picture successfully updated');
          $this->load->view('Curator/editarti', $data);
    }






            function ddoo_upload($filename){
  $config['upload_path'] = './assets/uploads/';
  $config['allowed_types'] = 'gif|jpg|png|jpeg';
  $config['max_size']       =   99999999999;
  $config['max_width']      =    99999999999;
  $config['max_height']     =    99999999999;

$this->load->library('upload', $config);
if ( ! $this->upload->do_upload($filename)) {

  $this->session->set_flashdata('error', 'Error file format');
  redirect('curator_Gallery');

} else {
 $file =$this->upload->data();
$data = array('upload_data' => $this->upload->data());
return  $file['file_name'];

}




}

}

