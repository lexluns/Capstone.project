<?php
class m_addarti_guest extends CI_Model {
const DB_TABLE = 'artifacts';
const DB_TABLE_PK = 'arti_id';
public $acc_number;
public $classify;
public $name_obj;
public $name_art;
public $material;
public $date_acq;
public $institution; 
public $owner;
public $locate;
public $place_orig; 
public $price;
public $collector;     
public $cultural;
public $function;
public $chronology;
public $style;
public $hist;
public $reference;
public $mode;
public $description;
public $conserv;
public $arti_restrict;
public $arti_img1;
public $arti_img2;
public $arti_img3;


public function namesearcher($id){

		$query = $this->db->get_where('artifacts', array('arti_id' => $id , 'arti_restrict' => 'public'));

		if ($query->num_rows() > 0 )
		{
			return TRUE;
		}else{

			return FALSE;
		}
		

}

		
	public function lookup($keyword)
	{
		 $this->db->select('*')->from('artifacts'); 
		 $this->db->where('arti_restrict','public');
        $this->db->like('name_obj',$keyword,'after'); 
        $this->db->or_like('acc_number',$keyword,'after');
        $query = $this->db->get();     
        return $query->result();
	}


	public function record_count(){
		$this->db->from('artifacts');
		$this->db->where('arti_restrict','public');
		return $this->db->count_all_results();
	}




		public function all($limit, $start){
	 
	 $this->db->limit($limit, $start);
 	 $result =	 $this->db->get_where('artifacts', array('arti_restrict ' => 'public' ));
 	  return $result;


	}

			public function searchcounter($container2){

			if($container2 > 0){
				$this->db->from('artifacts');
				$this->db->where('arti_restrict','public');
			$this->db->where('acc_number',$container2);

			
			
			return  $this->db->count_all_results();
       		}else{
       		$this->db->from('artifacts');
       		$this->db->where('arti_restrict','public');
       		$this->db->where('name_obj',$container2);
       		
			
			return  $this->db->count_all_results();
       }



	}


		public function search($limit, $start,$container2)
	{

		if($container2 > 0){
			$query = $this->db->get_where('artifacts', array('acc_number' => $container2, 'arti_restrict'=>'public'   ), $limit, $start);
            return $query;
       }else{
       		$query = $this->db->get_where('artifacts', array('name_obj' => $container2, 'arti_restrict' =>'public'  ), $limit, $start);
            return $query;

       }

	}







	public function view($id)
	{

 
    $this->db->where(array('arti_id'=> $id));
    $q = $this->db->get('artifacts');
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }

	}
	
	


}
?>