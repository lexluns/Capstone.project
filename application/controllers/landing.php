<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends CI_Controller {



	public function index()
	{
		$id = $this->session->userdata('id');
		if ($id != null) {
		$utype;
		$db = new m_login();
		$where = array('User_id' => $id);
		$data['user'] = $db->m_login->read('user',$where);
		foreach($data['user'] as $data_item){
			$utype = $data_item->user_type;
			$_SESSION['id'] = $data_item->User_id;
			$_SESSION['fname'] = $data_item->user_fname;
			$_SESSION['lname'] = $data_item->user_lname;
			$_SESSION['pic'] = $data_item->user_dp;
		}

			if($utype =='Curator'){
			redirect('curator_Home');
			}elseif ($utype =='Staff') {
			redirect('staff_Home');
			}elseif ($utype =='guest'){
			redirect('guest_Home');
			}
		}else{
		$this->load->view('Landing/landing');
		}










	}





}
