<?php 

class Suplier_m extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function get_suplier(){

		return $this->db->get('suplier');

	}

	public function add_suplier($data){
		
		$query = $this->db->insert('suplier',$data);

      	return $query;
	}

	public function update_suplier($where,$data)
	{

		$this->db->where($where);
		$this->db->update('suplier',$data);
		
	}	
	

	public function delete_suplier($id){

        $this->db->delete('suplier',array('id_suplier' => $id));
	}

	
}
?>