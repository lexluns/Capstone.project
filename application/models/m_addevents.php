<?php
class m_addevents extends CI_Model {
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


		public function confrec($confirm){
		$query = $this->db->get_where('event', array('event_name' => $confirm));

		if ($query->num_rows() > 0)
		{
			$status = TRUE;
		}else{
			$status = FALSE;
		}
		
		return $status;

	}


	public function view_events(){
		$query = $this->db->get('event');
		return $query->result();
	}

	public function all(){

 	  $result = $this->db->get('event');
      return $result;
	}

	public function deleteEvents($id = ' ') {
		$where = array('event_id' => $id);
		$db = new m_addevents();
		$db->delete('event',$where);
		redirect('curator_events');
	}

	public function delete ($table, $where)
	{
		$this->db->delete($table, $where); 

	}

	public function eventupdate($id, $data) {

		$this->db->where('event_id', $id);
		$this->db->update('event', $data);

	}

	public function updatestatus($id,$data){
	$this->db->where('event_id', $id);
	 $this->db->update('event', $data);
	}

}
?>