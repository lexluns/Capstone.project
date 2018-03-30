<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 use PHPMailer\PHPMailer\PHPMailer;
class register extends CI_Controller {



	public function __construct(){
		parent::__construct();
			$this->load->library('form_validation');
			
			$this->load->library('session');
			
	}


	public function index()
	{	

		$this->load->view('Landing/registerv1');
	 // redirect('Landing/registerv1');

	}



	public function reg()
	{

		$this->form_validation->set_rules('eadd','email','trim|valid_email|is_unique[user.uname]|required');
		$this->form_validation->set_rules('pass','password','trim|min_length[6]|required');
		$this->form_validation->set_rules('fname','first name','trim|required');
		$this->form_validation->set_rules('lname','last name','trim|required');
		$this->form_validation->set_rules('bdate','birthdate','required');
		$this->form_validation->set_rules('age','age','required');
		$this->form_validation->set_rules('address','address','trim|required');
		$this->form_validation->set_rules('contact_num','contact_num','trim|required');
		$this->form_validation->set_rules('school','Institution','trim|required');
		$this->form_validation->set_rules('purpose','purpose','trim|required');
		$this->form_validation->set_rules('confpass','Password confirmation','required|matches[pass]|trim');
		$this->form_validation->set_message('is_unique','Email already taken');
		$this->form_validation->set_message('matches','Passwords do not match');
		$catch1= $this->input->post('pass');
		$catch2= $this->input->post('confpass');
		$catch3= $this->input->post('eadd');

		$query = $this->db->get('user');
		
		if ($this->form_validation->run() == FALSE)
			{	
				$this->session->set_flashdata('message1','Error submitting form  .');
				$this->load->view('Landing/registerv1');
			}

			else{

	 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

				$mail = new PHPMailer();
				$db = new m_register();
					$db->uname = $this->input->post('eadd');
				  	$db->upass = sha1($this->input->post('pass'));
			 		$db->code = $randomString;
			 		$recep = $this->input->post('eadd');
			 		$pass =  $randomString;
			 		$db->user_fname = ucwords($this->input->post('fname'));
			 		$db->user_lname =  ucwords($this->input->post('lname'));
			 		$db->user_bdate = $this->input->post('bdate');
					$db->user_type ='Guest';
					$db->user_status ='Active';
					$db->Activated ='FALSE';
					$db->user_dp =  base_url(). "assets/uploads/defaltdpqwerteeqweqweqweqwerr2938euwqe.png";
					$db->age = $this->input->post('age');
					$db->address = $this->input->post('address');
					$db->contact_num = $this->input->post('contact_num');
					$db->occupation = $this->input->post('occupation');
					$db->school = $this->input->post('school');
					$db->purpose = $this->input->post('purpose');
					$db->topic = $this->input->post('topic');
					$db->form_insert();
			 		


	    $mail->isSMTP();                           
	    $mail->Host = 'smtp.gmail.com'; 
	    $mail->SMTPAuth = true;                              
	    $mail->Username = 'printf.mark@gmail.com';               
	    $mail->Password = 'tanduay5yrs';                          
	    $mail->SMTPSecure = 'tls';                           
	    $mail->Port = 587;                                 
	    $mail->setFrom('printf.mark@gmail.com', 'USC_MUSEUM_NO_REPLY');
	    $mail->addAddress($recep, 'USC MUSEUM');    
	    $mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
	    $url =  "<html><a href='" .base_url(). "index.php/login/verify/".$pass."'>link</a></html>";


	 
	   


	    $mail->isHTML(true);
	    $mail->Subject = 'USC Museum Confirmation link';
  $mail->Body  = ' Good day! Please click this '.$url.' to verify your account. ' ;
	    if(!$mail->send()) {
		  echo '/n/n Message was not sent.';
		  echo 'Mailer error: ' . $mail->ErrorInfo;
		} else {
$this->session->set_flashdata('success','Account successfully created. We have sent an email to verify your account.');
redirect(login);
		}




					
	    
				}


	}

}




				
		 		