<?php

class m_schedule extends CI_Model{
const DB_TABLE = 'calendar_events';
const DB_TABLE_PK = 'ID';
public $title;
public $start;
public $end;
public $description;

public function forminsert()
{
	 $this->db->insert($this::DB_TABLE, $this);
}

public function view_schedule(){
	$query = $this->db->get('calendar_events');
	return $query->result();
}

public function all(){

 	 $result = $this->db->get('calendar_events');
     return $result;
}

public function get_events($start, $end)
{
    return $this->db->where("start >=", $start)->where("end <=", $end)->get("calendar_events");
}

public function add_event($data)
{
    $this->db->insert("calendar_events", $data);
}

public function get_event($id)
{
    return $this->db->where("ID", $id)->get("calendar_events");
}

public function update_event($id, $data)
{
    $this->db->where("ID", $id)->update("calendar_events", $data);
}

public function delete_event($id)
{
    $this->db->where("ID", $id)->delete("calendar_events");
}


}
?>