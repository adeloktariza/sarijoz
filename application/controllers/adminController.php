<?php

class AdminController extends CI_Controller {

	public function __construct() {
		parent::__construct();


		$this->load->library('twig');
		$this->load->model('user_m');
		$this->load->model('suplier_m');
		$this->twig->add_function('base_url');
		$this->load->library('form_validation');

		$this->load->helper('text');


		if ($this->session->userdata('username') == "") {
			redirect('login');
		}


	}

	public function index() {


		$data['username'] = $this->session->userdata('username');
		$this->load->view('view_admin', $data);
	}

	public function page_user() {


		$data['username'] = $this->session->userdata('username');
		$data['user'] = $this->user_m->get_user()->result();

		$this->load->view('view_user', $data);
	}

	public function page_suplier() {


		$data['username'] = $this->session->userdata('username');
		$data['suplier'] = $this->suplier_m->get_suplier()->result();

		$this->load->view('view_suplier', $data);
	}

	public function add_user(){

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

		$username = $this->input->post('username');
		$password = md5($this->input->post('password', TRUE));
 
		$data = array(
			'id_user' => "",
			'username' => $username,
			'password' => $password
			);

		$query = $this->user_m->add_user($data);

		if ($query) {
			$message = array('status' => true, 'message' => 'Berhasil menambahkan user');
        }else{ 
        	$message = array('status' => true, 'message' => 'Gagal menambahkan user');
        }

		redirect('AdminController/page_user');
	}

	public function delete_user()
	{
		$id= $this->uri->segment(3);

		$this->user_m->delete_user($id);

		redirect('adminController/page_user');
	}

}
?>