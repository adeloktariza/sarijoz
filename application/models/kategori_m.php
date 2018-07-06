<?php 

class Kategori_m extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function get_kategori(){

		return $this->db->get('kategori');

	}

	public function add_kategori($data){
		
		$query = $this->db->insert('kategori',$data);

      	return $query;
	}

	public function update_kategori($where,$data)
	{

		$this->db->where($where);
		$this->db->update('kategori',$data);
		
	}	
	

	public function delete_kategori($id){

        $this->db->delete('kategori',array('id_kategori' => $id));
	}

	
}
?>