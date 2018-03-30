<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guest_resource extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('resource_model', 'grm');
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
	}
	
	public function index()
	{
            $type = $this->session->userdata('utype');

        if ($type == 'Guest') {
       $this->load->model('resource_model');
	$config = array();
        $config["base_url"] = base_url() . "index.php/guest_resource/index";
        $config["total_rows"] = $this->grm->record_counter();
        $config["per_page"] = 6;
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
        $data["results"] = $this->grm->all1($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
                        $data['title'] = "Resource";
        
        $this->load->view('Guest/resource',$data);
}else{
            $this->session->sess_destroy();
            redirect('login');
        }

	}
		



}

?>