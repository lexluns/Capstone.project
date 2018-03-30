<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 use PHPMailer\PHPMailer\PHPMailer;

class login extends CI_Controller {

	
	public function index()
	{

	$this->load->view('Landing/login');

	}





	public function verify($pass = ''){

		$db = new m_Login();
			$data = array (
			'Activated' => 'TRUE'
		);

	   $db->verify($pass,$data);
       $this->session->set_flashdata('success','Account successfully verified');
       redirect(login);

	}


	public function send($catch){

		$db = new m_Login;

		 $where = array('uname' => $catch);
		 $data['activate'] = $db->read('user',$where);
		 	foreach($data['activate'] as $data_item){
					$code = $data_item->Code;
				    }

		$mail = new PHPMailer(); 		
	    $mail->isSMTP();                           
	    $mail->Host = 'smtp.gmail.com'; 
	    $mail->SMTPAuth = true;                              
	    $mail->Username = 'printf.mark@gmail.com';               
	    $mail->Password = 'tanduay5yrs';                          
	    $mail->SMTPSecure = 'tls';                           
	    $mail->Port = 587;                                 
	    $mail->setFrom('printf.mark@gmail.com', 'USC_MUSEUM_NO_REPLY');
	    $mail->addAddress($catch, 'USC MUSEUM');    
	    $mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
	    $url =  "<html><a href='" .base_url(). "index.php/login/verify/".$code."'>link</a></html>";


	 
	   


	    $mail->isHTML(true);
	    $mail->Subject = 'USC Museum Confirmation link';
  $mail->Body  = ' Good day! Please click this '.$url.' to verify your account. ';
	    if(!$mail->send()) {
		  echo '/n/n Message was not sent.';
		  echo 'Mailer error: ' . $mail->ErrorInfo;
		} else {
$this->session->set_flashdata('success','We have sent another email to verify your account.');
redirect(login);
		}

	}

		public function userlogin()
	{

	    $db = new m_login();
		$db->username = $this->input->post('useremail');
		$catch = $this->input->post('useremail');
		$hash = sha1($this->input->post('userpass'));
		$db->userpass = $hash;
		$db->username = $this->input->post('useremail') ;
		$data['logged'] = $db->login();

			if($data['logged'])
		{

				   $where = array('uname' => $this->input->post('useremail'));
				   $data['activate'] = $db->read('user',$where);

				   	foreach($data['activate'] as $data_item){
					$activated = $data_item->Activated;
				    }
			if($activated == 'TRUE')
			{

			



													   $where = array('uname' => $this->input->post('useremail'));
													   $data['stats'] = $db->read('user',$where);

													   	foreach($data['stats'] as $data_item){
														$user_stats = $data_item->user_status;
														}



														if($user_stats == 'Active'){





																						$user_type;
																						$_SESSION['searcher'] ='All';
																						$where = array('uname' => $this->input->post('useremail'));
																						$data['user'] = $db->m_login->read('user',$where);


																						foreach($data['user'] as $data_item){
																							$user_type = $data_item->user_type;
																							$_SESSION['id'] = $data_item->User_id;
																							$_SESSION['fname'] = $data_item->user_fname;
																							$_SESSION['lname'] = $data_item->user_lname;
																							$_SESSION['pic'] = $data_item->user_dp;
																							$_SESSION['utype'] = $data_item->user_type;
																						}

																							if($user_type =='Curator'){
																							redirect('curator_Home');
																							}elseif($user_type =='Staff'){
																							redirect('Staff_Home');
																							}elseif ($user_type == 'Guest') {
																							redirect('guest_Home');	
																							}

														}else{
												    $this->session->set_flashdata('message','Your Account has been blocked <br> Please contact the administrator');
													redirect('login');
														}

			}else{

	    $url =  "<html><a href='" .base_url(). "index.php/login/send/".$catch."'>click here</a></html>";
 $this->session->set_flashdata('message2','We have sent an email to your account. Please check your inbox or spam folder for the verification link. If you did not receive the email ' .$url. ' ');
 redirect('login');


			}








		}else{	
		$this->session->set_flashdata('message2','The e-mail or password is incorrect');
			  redirect('login');
		}






	}














}
