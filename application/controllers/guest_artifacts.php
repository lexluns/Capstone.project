<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_artifacts extends CI_Controller {

	
	public function __construct()
   {
      parent::__construct();
      $this->load->model('m_addarti_guest');
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library(['form_validation','session']);
      $this->load->library('pagination');

   }

       public function pdf($id = '')
{

     $type = $this->session->userdata('utype');
      if ($type == 'Guest') {
    $this->load->helper('pdf_helper');
    $db = new m_addarti;
    $data['retdata'] = $db->view($id);
    $this->load->view('pdfreport(guest)', $data);
       }else{
            $this->session->sess_destroy();
            redirect('login');
        }

}



	   public function index()
    {
 $type = $this->session->userdata('utype');

        if ($type == 'Guest') {
        $container2 =  $this->session->userdata('searcher');
        if ($container2 == 'All' ) {
        $config = array();
        $config["base_url"] = base_url() . "index.php/guest_artifacts/index";
        $config["total_rows"] = $this->m_addarti_guest->record_count();
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
        $data["results"] = $this->m_addarti_guest->all($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
                        $data['title'] = "Collections";
            $this->load->view('Guest/artifact',$data);

        } elseif ( $container2 != 'All' ) {

        $config = array();
        $config["base_url"] = base_url() . "index.php/guest_artifacts/index";
        $config["total_rows"] = $this->m_addarti_guest->searchcounter($container2);
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $config['num_links'] = $this->m_addarti_guest->searchcounter($container2);
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
        $data["results"] = $this->m_addarti_guest->search($config["per_page"],$page, $container2);
        $data["links"] = $this->pagination->create_links();
        $count = $this->m_addarti_guest->searchcounter($container2);
        $this->session->set_flashdata('Results', $count);
        $this->session->set_flashdata('cancelbutt','<span style="color:#f92222; margin-top:4px; font-size:25px; " class="glyphicon glyphicon-remove" title = "Cancel"></span>');
          $data['title'] = "Collections";
        $this->load->view('Guest/artifact',$data);
        }


       }else{
            $this->session->sess_destroy();
            redirect('login');
        }

    }



    public function cancelsearch(){

        $container = 'All';
        $_SESSION['searcher'] = $container;
        redirect('guest_artifacts');

    }

    public function search(){

        $_SESSION['switch'] = 'All';
        $container = $this->input->post('search');
        $_SESSION['searcher'] = $container;
        redirect('guest_artifacts');
    }

	

    public function view($id = '')
    {

             $db = new m_addarti_guest;
        $data['logged'] = $db->namesearcher($id);


            if($data['logged'] == FALSE)
        {
        redirect(guest_artifacts);    
        }








         $type = $this->session->userdata('utype');
    if ($type == 'Guest') {
    $db = new m_addarti_guest;
    $data['retdata'] = $db->view($id);
    $data['title'] = 'Collections';
    $this->load->view('Guest/viewarti', $data);
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









}
