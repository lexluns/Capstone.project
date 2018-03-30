<?php
class m_addarti extends CI_Model {
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

		$query = $this->db->get_where('artifacts', array('arti_id' => $id));

		if ($query->num_rows() > 0 )
		{
			return TRUE;
		}else{

			return FALSE;
		}
		

}



function filename_exists($accnumber)
{
    $this->db->select('*'); 
    $this->db->from('artifacts');
    $this->db->where('acc_number', $accnumber);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;



    
}





	public function lookup($keyword)
	{
		 $this->db->select('*')->from('artifacts'); 
        $this->db->like('name_obj',$keyword,'after'); 
        $this->db->or_like('acc_number',$keyword,'after'); 
        $query = $this->db->get();     
        return $query->result();
	}



	
	public function form_insert()
	{

		$this->db->insert($this::DB_TABLE, $this);
	}


	public function confrec($confirm){
		$status = 0;
		$query = $this->db->get_where('artifacts', array('acc_number' => $confirm));

		if ($query->num_rows() > 0)
		{
			$status = TRUE;
		}else{
			$status = FALSE;
		}
		return $status;

	}


	public function record_count(){

		return $this->db->count_all("artifacts");
	}

	public function all($limit, $start){
	 
	 $this->db->limit($limit, $start);
 	  $result = $this->db->get('artifacts');
 	  return $result;


	}


	public function searchcounter($container2){

			if($container2 > 0){

			$this->db->where('acc_number',$container2);
			$this->db->from('artifacts');
			return  $this->db->count_all_results();
       		}else{

       		$this->db->where('name_obj',$container2);
			$this->db->from('artifacts');
			return  $this->db->count_all_results();
       }



	}


	public function search($limit, $start,$container2)
	{

		if($container2 > 0){
			$query = $this->db->get_where('artifacts', array('acc_number' => $container2 ), $limit, $start);
            return $query;
       }else{
       		$query = $this->db->get_where('artifacts', array('name_obj' => $container2 ), $limit, $start);
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


	


	public function update($id,$data)
	{
	 $this->db->where('arti_id', $id);
	 $this->db->update('artifacts', $data);


	}



	public function delete($id){

		$this->db->where('arti_id', $id);
$this->db->delete('artifacts');


	}

	
	
}
?>