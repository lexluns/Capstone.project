<?php
class m_register extends CI_Model {
const DB_TABLE = 'user';
const DB_TABLE_PK = 'User_id';
public $user_fname;
public $user_lname;
public $uname;
public $upass;
public $user_dp;
public $user_type;
public $user_status;
public $user_bdate;
public $Activated;





	public function form_insert()
	{
		$this->db->insert($this::DB_TABLE, $this);
	}


	public function emailcheck($var)
	{
	
		$query = $this->db->get_where('user', array('uname' =>$var));

		if ($query->num_rows() >0)
		{
			return true;
		}else{

			return false;
		}
		
	}





	
}


?>