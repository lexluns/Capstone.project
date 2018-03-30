<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff_Gallery extends CI_Controller {

	
	public function __construct()
   {
      parent::__construct();
      $this->load->model('m_addarti_staff');
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library(['form_validation','session']);
      $this->load->library('pagination');

   }


       public function pdf($id = '')
{

   $type = $this->session->userdata('utype');
      if ($type == 'Staff') {
    $this->load->helper('pdf_helper');
    $db = new m_addarti;
    $data['retdata'] = $db->view($id);
    $this->load->view('pdfreport', $data);

     }else{
            $this->session->sess_destroy();
            redirect('login');
        }
}





    public function index()
    {
 $type = $this->session->userdata('utype');

    if ($type == 'Staff') {
        $container2 =  $this->session->userdata('searcher');
        if ($container2 == 'All' ) {
        $config = array();
        $config["base_url"] = base_url() . "index.php/staff_Gallery/index";
        $config["total_rows"] = $this->m_addarti_staff->record_count();
        $config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i> Previous Page';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next Page <i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->m_addarti_staff->all($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
            $this->load->view('Staff/openGallery',$data);

        } elseif ( $container2 != 'All' ) {

        $config = array();
        $config["base_url"] = base_url() . "index.php/staff_Gallery/index";
        $config["total_rows"] = $this->m_addarti_staff->searchcounter($container2);
        $config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config['num_links'] = $this->m_addarti_staff->searchcounter($container2);
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i> Previous Page';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next Page <i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->m_addarti_staff->search($config["per_page"],$page, $container2);
        $data["links"] = $this->pagination->create_links();
        $count = $this->m_addarti_staff->searchcounter($container2);
        $this->session->set_flashdata('Results', $count);
        $this->session->set_flashdata('cancelbutt','<span style="color:#f92222; margin-top:4px; font-size:25px; " class="glyphicon glyphicon-remove" title = "Cancel"></span>');
        $this->load->view('Staff/openGallery',$data);
        }


       }else{
      $this->session->sess_destroy();
        redirect('login');
    }

    }




public function lookup()
{
        // process posted form data  
        $keyword = $this->input->post('term');  
        $data['response'] = 'false'; //Set default response  
        $query = $this->m_addarti_staff->lookup($keyword); //Search DB  
        if( ! empty($query) )  
        {  
            $data['response'] = 'true'; //Set response  
            $data['message'] = array(); //Create array  
            foreach( $query as $row )  
            {  
                $data['message'][] = array(   
                                        'id'=>$row->arti_id,  
                                        'value' => $row->name_obj,  
                                        '' 
                                     );  //Add a row to array  
            }  
        }  
        if('IS_AJAX')  
        {  
            echo json_encode($data); //echo json string if ajax request  
        }  
        else 
        {  
            $this->load->view('show',$data); //Load html view of search results  
        }  
       
}



 public function cancelsearch(){

        $container = 'All';
        $_SESSION['searcher'] = $container;
        redirect('staff_Gallery');

    }

    public function search(){

        $container = $this->input->post('search');
        $_SESSION['searcher'] = $container;
        redirect('staff_Gallery');
    }



    public function view($id = '')
    {


           $db = new m_addarti_staff;
        $data['logged'] = $db->namesearcher($id);


            if($data['logged'] == FALSE)
        {
        redirect(staff_Gallery);    
        }










       $type = $this->session->userdata('utype');

    if ($type == 'Staff') {
    $db = new m_addarti_staff;
    $data['retdata'] = $db->view($id);
    $this->load->view('staff/viewarti', $data);  

      }else{
      $this->session->sess_destroy();
        redirect('login');
    }
    }



    public function viewupdate($id = '')
    {
         $type = $this->session->userdata('utype');

    if ($type == 'Staff') {
    $db = new m_addarti_staff;
    $data['retdata'] = $db->view($id);
    $this->load->view('staff/editarti', $data);
  }else{
      $this->session->sess_destroy();
        redirect('login');
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

         $where = array('arti_id' => $id);
        $data['stats'] = $db2->read('artifacts',$where);
         foreach($data['stats'] as $data_item){
            $artifactname = $data_item->acc_number;
        }

        $db2->Action = "Picture updated";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
          $this->session->set_flashdata('edit', 'Picture has been Successfully Updated');
          $this->load->view('staff/editarti', $data);

 
             

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
               $where = array('arti_id' => $id);
        $data['stats'] = $db2->read('artifacts',$where);
         foreach($data['stats'] as $data_item){
            $artifactname = $data_item->acc_number;
        }
                  $db2->Action = "Picture updated";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
          $this->session->set_flashdata('edit', 'Picture has been Successfully Updated');
          $this->load->view('staff/editarti', $data);


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

            
               $where = array('arti_id' => $id);
        $data['stats'] = $db2->read('artifacts',$where);
         foreach($data['stats'] as $data_item){
            $artifactname = $data_item->acc_number;
        }
                  $db2->Action = "Picture updated";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
          $this->session->set_flashdata('edit', 'Picture has been Successfully Updated');
          $this->load->view('staff/editarti', $data);


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

               $where = array('arti_id' => $id);
        $data['stats'] = $db2->read('artifacts',$where);
         foreach($data['stats'] as $data_item){
            $artifactname = $data_item->acc_number;
        }
                  $db2->Action = "Picture updated";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();
          $this->session->set_flashdata('edit', 'Picture has been Successfully Updated');
          $this->load->view('staff/editarti', $data);
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
    if ($type == 'Staff') {
   $id = $this->input->post('id');
    $db = new m_addarti_staff;
    $data['retdata'] = $db->view($id);
    $this->load->view('staff/editarti', $data);
  }else{
      $this->session->sess_destroy();
        redirect('login');
    }
      }else{

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





        $db = new m_addarti_staff;
        // $confirm =  $this->input->post('accnumber');
        // $data['logged'] = $db->confrec($confirm);
        $data['retdata'] = $db->view($id);


        // if($data['logged'])
        //     {


        //    $this->session->set_flashdata('error', 'Existing accession number please try again');
        //    $this->load->view('Staff/editarti',$data);
               

        //     }else{

        
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
          $this->session->set_flashdata('edit', 'Item has been Successfully Edited');
          $this->load->view('staff/viewarti', $data);
        
      }
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
  redirect('staff_Gallery');
// $this->load->view('upload_form', $error);
} else {
 $file =$this->upload->data();
$data = array('upload_data' => $this->upload->data());
return  $file['file_name'];
//$this->load->view('upload_success', $data);
}
}



    public function delete($id = '')
    {


              $db2 = new m_addlogs();
        $where = array('arti_id' => $id);
        $data['stats'] = $db2->read('artifacts',$where);

        foreach($data['stats'] as $data_item){
            $artifactname = $data_item->acc_number;
        }


        $db2->Action = "Deleted an Item";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $artifactname;
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();


        
        $db = new m_addarti_staff;
        $db->delete($id);
         $this->session->set_flashdata('delete', 'Item has been Successfuly Deleted');
        redirect('staff_Gallery');



    }
































}
