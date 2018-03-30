<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_reresource extends CI_Controller {


	  public function __construct()
   {
      parent::__construct();
      $this->load->model('resource_model');
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library('pagination');

   }
	
	public function index()
	{
		    // $id = $this->session->userdata('id');
      //   $config = array();
      //   $config["base_url"] = base_url() . "index.php/guest_reresource/index";
      //   $config["total_rows"] = $this->resource_model->record_count_restri($id);
      //   $config["per_page"] = 9;
      //   $config["uri_segment"] = 3;
      //   $config['full_tag_open'] = "<ul class='pagination'>";
      //   $config['full_tag_close'] = '</ul>';
      //   $config['num_tag_open'] = '<li>';
      //   $config['num_tag_close'] = '</li>';
      //   $config['cur_tag_open'] = '<li class="active"><a href="#">';
      //   $config['cur_tag_close'] = '</a></li>';
      //   $config['prev_tag_open'] = '<li>';
      //   $config['prev_tag_close'] = '</li>';
      //   $config['first_tag_open'] = '<li>';
      //   $config['first_tag_close'] = '</li>';
      //   $config['last_tag_open'] = '<li>';
      //   $config['last_tag_close'] = '</li>';
      //   $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
      //   $config['prev_tag_open'] = '<li>';
      //   $config['prev_tag_close'] = '</li>';
      //   $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
      //   $config['next_tag_open'] = '<li>';
      //   $config['next_tag_close'] = '</li>';
      //   $this->pagination->initialize($config);
      //   $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      //   $data["results"] = $this->resource_model->viewsomeresourcefromrestri($id,$config["per_page"], $page);
      //   $data["links"] = $this->pagination->create_links();
		    // $this->load->view('Guest/reresource',$data);

$type = $this->session->userdata('utype');

            if ($type == 'Guest') {
            $this->load->model('resource_model');
            $id = $this->session->userdata('id');
            $data['restricted'] = $this->resource_model->viewsomeresourcefromrestri($id); 
                                  $data['title'] = "Private Resource";
            $this->load->view('Guest/reresource', $data);
}else{
                  $this->session->sess_destroy();
                  redirect('login');
            }

}


}
