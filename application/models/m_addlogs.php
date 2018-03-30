<?php
class m_addlogs extends CI_Model {
const DB_TABLE = 'logs';
const DB_TABLE_PK = 'Action_id';
public $Action;
public $Action_by;
public $Name_item;
public $Action_time;




	public function forminsert()
	{
	  $this->db->insert($this::DB_TABLE, $this);
	}


		public function read($table, $where = array()) 
		{
		$query = $this->db->get_where($table, $where);
		return $query->result();
		}

}
?>