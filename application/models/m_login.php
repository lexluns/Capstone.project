<?php
class m_login extends CI_Model {
const DB_TABLE = 'user';
const DB_TABLE_PK = 'User_id';
public $username ;
public $userpass;
public $user_type;



	public function login()
	{
		$status = 0;
		$query = $this->db->get_where('user', array('uname' => $this->username, 'upass' => $this->userpass));

		if ($query->num_rows() == 1)
		{
			$status =1 ;
		}
		return $status;
	}


	public function codereader($code){

		$query = $this->db->get_where('user', array('Code' => $code));

		if ($query->num_rows() > 0 )
		{
			return TRUE;
		}else{

			return FALSE;
		}
		
	}


	

	public function display(){
	$query = $this->db->get('logs');
		return $query->result();
	}



	public function verify($pass,$data){


		$this->db->where('code', $pass);
		$this->db->update('user',$data);

	}


	public function getnum(){

		$query = $this->db->query('SELECT * FROM user');
		return $query;

	}


	public function getnum_items(){

		$query = $this->db->query('SELECT * FROM artifacts');
		return $query;

	}


		public function getnum_res(){

		$query = $this->db->query('SELECT * FROM learning_resources');
		return $query;

	}

	public function getnum_events(){

		$query = $this->db->query('SELECT * FROM event');
		return $query;

	}




	public function read($table, $where = array()) {
		$query = $this->db->get_where($table, $where);
		return $query->result();

	}




	
}
?>