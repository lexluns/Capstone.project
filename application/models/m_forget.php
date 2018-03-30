<?php
class m_forget extends CI_Model {
const DB_TABLE = 'user';
const DB_TABLE_PK = 'User_id';





	public function forget($var)
	{
		$status = 0;
		$query = $this->db->get_where('user', array('uname' => $var));

		if ($query->num_rows() == 1)
		{
			$status =1 ;
		}
		return $status;
	}

	public function updateurl($var,$data)
	{

	 $this->db->where('uname', $var);
	 $this->db->update('user', $data);

	}
	public function updatepass($code,$data)
	{

	 $this->db->where('code', $code);
	 $this->db->update('user', $data);

	}
	public function password($var)
	{
		
		$query = $this->db->get_where('user',array('uname'=>$var)); 

			return $query->result();
		


	}
	




	
}
?>