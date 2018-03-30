<?php
class m_allevents extends CI_Model {
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
	  $this->db->limit($limit, $start);
 	  $result = $this->db->get('event');
      return $result;
	}

	public function record_count(){

		return $this->db->count_all("event");
	}

	public function searchcounter($container2){

			if($container2 > 0){

			$this->db->where('event_id',$container2);
			$this->db->from('event');
			return  $this->db->count_all_results();
       		}else{

       		$this->db->where('event_name',$container2);
			$this->db->from('event');
			return  $this->db->count_all_results();
       }



	}
public function search($limit, $start,$container2)
	{

		if($container2 > 0){
			$query = $this->db->get_where('event', array('event_id' => $container2 ), $limit, $start);
            return $query;
       }else{
       		$query = $this->db->get_where('event', array('event_name' => $container2 ), $limit, $start);
            return $query;

       }

	}

	
}
?>