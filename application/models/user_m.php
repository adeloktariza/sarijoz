<?php 

class User_m extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function user_login($username,$password){
		
		$password123=md5($password);

		$sql ="SELECT * FROM user WHERE username='$username' AND password='$password123'";
		$query=$this->db->query($sql);

		return $query;
	}

	public function get_user(){

		return $this->db->get('user');

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