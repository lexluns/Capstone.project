<?php
class m_events extends CI_Model {
const DB_TABLE = 'event';
const DB_TABLE_PK = 'event_id';
public $event_name;
public $event_subname;
public $event_desc;
public $event_tags;
public $event_start;
public $event_end;
public $event_photo;


	public function forminsert()
	{
	  $this->db->insert($this::DB_TABLE, $this);
	}


	public function view_events(){
		$query = $this->db->get('event');
		return $query->result();
	}

	public function all($limit, $start){
 	 $query = $this->db->get_where('event', array('event_label' => 'Featured' ), $limit, $start);
      return $query;
	}

	public function record_count(){

		    $this->db->where('event_label', 'Featured');
			$this->db->from('event');
			return  $this->db->count_all_results();
	}


}
?>