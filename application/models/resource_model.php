<?php

class resource_model extends CI_Model {
	const DB_TABLE = 'learning_resources';
	const DB_TABLE_PK = 'resource_id';
	public $resourceTitle;
	public $resourceAuthor;
	public $date_pub;
	public $publisher;
	public $place_of_publication;
	public $journal_book;
	public $resourceType;
	public $resourceFile;
	public $resourceImage;

	
	public function confrecs($confirm){
		$status = 0;
		$query = $this->db->get_where('learning_resources', array('resourceTitle' => $confirm));

		if ($query->num_rows() > 0)
		{
			$status = TRUE;
		}else{
			$status = FALSE;
		}
		return $status;

	}



	public function createResource() {

		$this->db->insert($this::DB_TABLE, $this);

	}


	public function confrec($userid , $resid){
		$query = $this->db->get_where('entries', array('user_id' => $userid , 'res_id' => $resid ));

		if ($query->num_rows() > 0)
		{
			$status = TRUE;
		}else{
			$status = FALSE;
		}
		
		return $status;

	}


	public function checkuser($user){
		$query = $this->db->get_where('user', array('uname' => $user));

		if ($query->num_rows() > 0)
		{
			return TRUE;
		}else{
			return FALSE;
		}
		

	}

	    public function checkusertype($table, $where = array()) 
		{
		$query = $this->db->get_where($table, $where);
		return $query->result();
		}



	public function viewAllresources($id) {

		$this->db-where('resource_id', $id);
		$query = $this->db->query("SELECT * FROM learning_resources");
		return $query;

	}


	public function viewAllresourcesCurator() {

		$query = $this->db->query("SELECT * FROM learning_resources");
		return $query;

	}

	public function viewAllresourcesPublic() {

		$query = $this->db->query("SELECT * FROM learning_resources WHERE resourceType = 'Public'");
		return $query;

	}

	public function viewAllresourcesMuseum() {

		$query = $this->db->query("SELECT * FROM learning_resources WHERE resourceType = 'Public' OR resourceType = 'Museum'");
		return $query;

	}


	public function updateResources($id, $data) {

		$this->db->where('resource_id', $id);
		$this->db->update('learning_resources', $data);

	}


	public function delete($table, $where) {

		$this->db->delete($table, $where); 

	}

		public function deleteentry($table, $where) {

		$this->db->delete($table, $where); 

	}

	public function record_count(){

		return $this->db->count_all("learning_resources");
	}



	public function record_counter(){
		$this->db->from('learning_resources');
		$this->db->where('resourceType','public');
		return $this->db->count_all_results();
	}


	public function all($limit, $start) {

	  $this->db->limit($limit, $start);
 	  $result = $this->db->get('learning_resources');
      return $result;
	}


	public function all1($limit, $start){
	 $this->db->limit($limit, $start);
 	 $query = $this->db->get_where('learning_resources', array('resourceType' => 'public' ));
 	  return $query;


	}

	public function get_data() {

		$query = $this->db->query("SELECT * FROM learning_resources");
		return $row = $query->row();

	}


	public function read($table, $where = array()) {
	
		$query = $this->db->get_where($table, $where);
		return $query->result();
	
	}

	public function checkexist($var1,$var2){

		$query = $this->db->get_where('entries', array('user_id' => $var1, 'res_id' => $var2));

		if ($query->num_rows() > 0)
		{
			 return TRUE;
		}else{

			 return FALSE;
		}
		
	}


	public function insertsendResources($data) {

		

		$this->db->insert('entries', $data);

	}

	public function viewsomeresourcefromrestri($id) {

			$this->db->select('*');
            $this->db->from('entries');
            $this->db->join('learning_resources', 'entries.res_id = learning_resources.resource_id');
            $this->db->join('user', 'entries.user_id = user.user_id');
            $this->db->where('entries.user_id',$id);
            $query = $this->db->get();
			return $query;

	}

		public function record_count_restri($id){


		    $this->db->where('user_id', $id);
			$this->db->from('entries');
		    return $this->db->count_all();
	}



}

?>