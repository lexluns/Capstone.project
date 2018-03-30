<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 use PHPMailer\PHPMailer\PHPMailer;
class forget extends CI_Controller {

	public function __construct(){
		parent::__construct();
			
	}
		
	public function index()
	{
		
		

		$this->load->view('Landing/forget');

		

	}
public function userforget()
	{	
		$db = new m_forget();

		// $mail = new PHPMailer\PHPMailer\PHPMailer(true);
		$mail = new PHPMailer();


		$var = $this->input->post('uname') ;

		$data = array(

			'change_pass' => 'FALSE'
			);

		$db->updateurl($var,$data);
		$data['logged'] = $db->forget($var);

		if($data['logged'])
		{
			
				$data['catch']= $db->password($var);
				foreach($data['catch'] as $dataitem){
					$code = $dataitem->Code;
					$pass = $dataitem->upass;
				}
		
			
					//emailer start
					 //Server settings
	    // $mail->SMTPDebug = 4;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    //$mail->isMail();
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'printf.mark@gmail.com';                 // SMTP username
	    $mail->Password = 'tanduay5yrs';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('printf.mark@gmail.com', 'USC_MUSEUM_NO_REPLY');
	    $mail->addAddress($var, 'USC MUSEUM');     // Add a recipient

	    // //Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    $mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);

	    $url =  "<html><a href='" .base_url(). "index.php/reset_pass/landing/".$code."'>link</a></html>";

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'USC Museum retrieve password';
	    $mail->Body    = ' Good day! Please click this ' . $url .' to reset your password ';
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


	    if(!$mail->send()) {

	    	
		  echo '/n/n Message was not sent.';
		  echo 'Mailer error: ' . $mail->ErrorInfo;


		} else {
			// echo "sent";
			$this->session->set_flashdata('success','An e-mail has been sent to your email address.');
			redirect('login');
		}
					//emailer end

				

			
			
		

	}else
	{	$this->session->set_flashdata('message2','E-mail does not exist.');
		redirect('forget');	}

		

	}



}

