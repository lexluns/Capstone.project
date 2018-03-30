<?php

class curator_model extends CI_Model {
	const DB_TABLE = 'user';
	const DB_TABLE_PK = 'User_id';
	public $user_fname;
	public $user_mname;
	public $user_lname;
	public $user_address;
	public $uname;
	public $user_school_university;
	public $user_occupation;
	public $upass;
	public $user_dp;
	public $user_type;
	public $user_status;
	public $user_bdate;


	
	public function index() {

		$this->load->view('Curator/myProfile');
	
	}

	
	public function getProfileRecord($id) {

		$query = $this->db->query("SELECT * FROM user WHERE User_id = '$id'");
		return $query;

	}




	public function EditInfo($id, $data) {

		$this->db->where('User_id', $id);
		$this->db->update('user', $data);

	}

	public function Upload_Picture($id, $data) {

		$this->db->where('User_id', $id);
		$this->db->update('user', $data);


	}


	

	
}

?>