<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curator_register_artifact extends CI_Controller {

	
	  public function __construct()
   {
      parent::__construct();
      $this->load->model('m_addarti');
      $this->load->helper(['url','html','form']);
      $this->load->database();
      $this->load->library('session');
       $this->load->library('form_validation');
      $this->load->library('pagination');

   }




function filename_exists()
{

    $accnumber = $this->input->post('accnumber');
    $exists = $this->m_addarti->filename_exists($accnumber);

    $count = count($exists);
    // echo $count 

    if (empty($count)) {
        echo true;
    } else {
        echo false;
    }
}




	public function index()
	{


  $type = $this->session->userdata('utype');

    if ($type == 'Curator') {
		$this->load->view('Curator/registerarti');

    }else{
      $this->session->sess_destroy();
        redirect('login');
    }

	}


	public function addarti(){
		$db = new m_addarti();
		$confirm = 	$this->input->post('accnumber');
		$data['logged'] = $db->confrec($confirm);
   
			if( $data['logged'] )
			{


				   $this->session->set_flashdata('error', 'Existing Accession Number Please Try Again');
				  redirect('curator_register_artifact');
			   

			}else{

        $db2 = new m_addlogs();

       

                if (isset($_FILES['pic1']) && $_FILES['pic1']['name'] != ''){
                $file1 = $this->ddoo_upload('pic1');
                }

                if($_FILES['pic1']['size'] == 0 ) {
                $file1 = "defaltpicxzxzxzxzxzxzxzxzxzx.png";
                }

                if (isset($_FILES['pic2']) && $_FILES['pic2']['name'] != '')
                {
                $file2 = $this->ddoo_upload('pic2');
                }

                if($_FILES['pic2']['size'] == 0 ){
                $file2 = "defaltpicxzxzxzxzxzxzxzxzxzx.png";
                }  

                if (isset($_FILES['pic3']) && $_FILES['pic3']['name'] != ''){
                $file3 = $this->ddoo_upload('pic3');
                }

                if($_FILES['pic3']['size'] == 0 ){
                $file3 = "defaltpicxzxzxzxzxzxzxzxzxzx.png";
                }  

                 if (isset($_FILES['pic4']) && $_FILES['pic4']['name'] != ''){
                $file4 = $this->ddoo_upload('pic4');
                }

                if($_FILES['pic4']['size'] == 0 ){
                $file4 = "defaltpicxzxzxzxzxzxzxzxzxzx.png";
                }



    $this->form_validation->set_rules('accnumber','Accession number','required');
		$this->form_validation->set_rules('dimensions','Dimensions','required');
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
        $this->load->view('Curator/registerarti');
      }else{


        $db2->Action = "Added an Item";
        $db2->Action_by = $this->session->userdata('lname')."," ." ". $this->session->userdata('fname');
        $db2->Name_item = $this->input->post('nameobj');
        $db2->Action_time = date('Y-m-d');
        $db2->forminsert();          
       $db->acc_number = $this->input->post('accnumber');
        $db->Dimensions = $this->input->post('dimensions');
        $db->classify = $this->input->post('classify');
        $db->name_obj = $this->input->post('nameobj');
        $db->name_art = $this->input->post('nameartist');
       $db->material = $this->input->post('material');
        $db->date_acq = $this->input->post('dateacq');
       $db->institution = $this->input->post('institution');
         $db->owner = $this->input->post('ownership');  
        $db->locate = $this->input->post('location');
       $db->place_orig = $this->input->post('origin');
        $db->price = $this->input->post('price');
        $db->collector = $this->input->post('collector');      
       $db->cultural = $this->input->post('culture');
       $db->function = $this->input->post('function');
      $db->chronology = $this->input->post('chronology');
       $db->style = $this->input->post('style');       
       $db->hist = $this->input->post('history');
       $db->reference = $this->input->post('reference');
        $db->mode = $this->input->post('mode');
       $db->description = $this->input->post('descp');
        $db->conserv = $this->input->post('conserv');
       $db->arti_restrict = $this->input->post('restri');
       $db->arti_img1 = base_url(). "assets/uploads/". $file1;
        $db->arti_img2 = base_url(). "assets/uploads/". $file2;
       $db->arti_img3 = base_url(). "assets/uploads/". $file3;
        $db->arti_img4 = base_url(). "assets/uploads/". $file4;
       $db->form_insert();
      $this->session->set_flashdata('success', 'Item Successfully Added');
      redirect('curator_Gallery');





      
    }
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
    $this->session->set_flashdata('error', 'The file format you are trying to upload is incorrect');
    redirect('curator_register_artifact');

} else {
 $file =$this->upload->data();
$data = array('upload_data' => $this->upload->data());
return  $file['file_name'];

}




}

}

