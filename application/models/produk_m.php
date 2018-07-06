<?php 

class Produk_m extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function get_produk(){

		 $this->db->select('*');
		 $this->db->from('produk');
		 $this->db->join('kategori','kategori.id_kategori =produk.id_kategori');
		 $this->db->join('suplier','suplier.id_suplier =produk.id_suplier');

		 $query = $this->db->get();
		 
		 return $query;

	}

	public function add_produk($data){
		
		$query = $this->db->insert('produk',$data);

      	return $query;
	}

	public function update_produk($where,$data)
	{

		$this->db->where($where);
		$this->db->update('produk',$data);
		
	}	
	

	public function delete_produk($id){

        $this->db->delete('produk',array('id_produk' => $id));
	}

	
}
?>