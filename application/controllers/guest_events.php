<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_events extends CI_Controller {

public function __construct()
   {
      parent::__construct();
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library(['form_validation','session']);
      $this->load->library('pagination');

   }

public function index()
  {
    $type = $this->session->userdata('utype');

    if ($type == 'Guest') {
        $config = array();
        $config["base_url"] = base_url() . "index.php/guest_events/index";
        $config["total_rows"] = $this->m_events->record_count();
        $config["per_page"] = 2;
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
        $config['prev_link'] = 'Previous Page';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next Page';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->m_events->all($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
                  $data['title'] = "Featured Events";
            $this->load->view('Guest/events',$data);

            }else{
      $this->session->sess_destroy();
        redirect('login');
    }
 }
}

?>