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

	public function add_user($data){
		
		$query = $this->db->insert('user',$data);

      	return $query;
	}
	

	public function delete_user($id){

        $this->db->delete('user',array('id_user' => $id));
	}

	
}
?>