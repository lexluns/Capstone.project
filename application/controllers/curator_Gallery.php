<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curator_Gallery extends CI_Controller {


	  public function __construct()
   {
      parent::__construct();
      $this->load->model('m_addarti');
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library(['form_validation','session']);
      $this->load->library('pagination');

   }


    public function pdf($id = '')
{

      $type = $this->session->userdata('utype');
      if ($type == 'Curator') {
    $this->load->helper('pdf_helper');
    $db = new m_addarti;
    $data['retdata'] = $db->view($id);
    $this->load->view('pdfreport', $data);
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
        $query = $this->m_addarti->lookup($keyword); //Search DB  
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




	public function index()
	{
 
    $type = $this->session->userdata('utype');

    if ($type == 'Curator') {
        $container2 =  $this->session->userdata('searcher');
        if ($container2 == 'All' ) {
        $config = array();
        $config["base_url"] = base_url() . "index.php/curator_Gallery/index";
        $config["total_rows"] = $this->m_addarti->record_count();
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
        $data["results"] = $this->m_addarti->all($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
            $this->load->view('Curator/openGallery',$data);

        } elseif ( $container2 != 'All' ) {

        $config = array();
        $config["base_url"] = base_url() . "index.php/curator_Gallery/index";
        $config["total_rows"] = $this->m_addarti->searchcounter($container2);
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $config['num_links'] = $this->m_addarti->searchcounter($container2);
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
        $data["results"] = $this->m_addarti->search($config["per_page"],$page, $container2);
        $data["links"] = $this->pagination->create_links();
        $count = $this->m_addarti->searchcounter($container2);
        $this->session->set_flashdata('Results', $count);
        $this->session->set_flashdata('cancelbutt','<span style="color:#f92222; margin-top:4px; font-size:25px; " class="glyphicon glyphicon-remove" title = "Cancel"></span>');
        $this->load->view('Curator/openGallery',$data);
        }

}else{
            $this->session->sess_destroy();
            redirect('login');
        }
	   

	}



    public function cancelsearch(){

        $container = 'All';
        $_SESSION['searcher'] = $container;
        redirect('curator_Gallery');

    }

    public function search(){

        $container = $this->input->post('search');
        $_SESSION['searcher'] = $container;
        redirect('curator_Gallery');
    }


    public function view($id = '')
    {




        $db = new m_addarti;
        $data['logged'] = $db->namesearcher($id);


            if($data['logged'] == FALSE)
        {
        redirect(curator_Gallery);    
        }














  $type = $this->session->userdata('utype');
    if ($type == 'Curator') {
    $db = new m_addarti;
    $data['retdata'] = $db->view($id);
        $data['title'] = 'Collections';
    $this->load->view('Curator/viewarti', $data);
    }else{
            $this->session->sess_destroy();
            redirect('login');
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




        $db = new m_addarti;
        $db->delete($id);
         $this->session->set_flashdata('delete', 'Item has been Successfuly Deleted');
        redirect('curator_Gallery');



    }











}
