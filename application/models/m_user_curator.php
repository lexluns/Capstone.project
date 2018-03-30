<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user_curator extends CI_Model {

public function __construct(){

	parent::__construct();
	$this->load->database();

}


	public function form_display($id){

		$this->db->select("*");
		$this->db->from('user');
		$this->db->where('User_id!=',$id);
		$query= $this->db->get()->result();
		return $query;

	}


		public function notadmin($id){

		$this->db->select("*");
		$this->db->from('user');
		$this->db->where('User_id!=',$id);
		$this->db->where('user_type!=', 'Curator');
		$this->db->where('user_type!=', 'Staff');
		$query= $this->db->get()->result();

		return $query;

	}


		public function form_display1(){

		$this->db->select("*");
		$this->db->from('user');
		$query= $this->db->get()->result();

		return $query;



	}


	public function updatestats($id,$data){
	$this->db->where('User_id', $id);
	 $this->db->update('user', $data);
	}


}
