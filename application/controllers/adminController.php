<?php

class AdminController extends CI_Controller {

	public function __construct() {
		parent::__construct();


		$this->load->library('twig');
		$this->load->model('user_m');
		$this->load->model('suplier_m');
		$this->load->model('kategori_m');
		$this->load->model('produk_m');
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


	public function page_kategori() {


		$data['username'] = $this->session->userdata('username');
		$data['kategori'] = $this->kategori_m->get_kategori()->result();

		//print_r($data['kategori']);
		$this->load->view('view_kategori', $data);
	}
	public function page_produk() {


		$data['username'] = $this->session->userdata('username');
		$data['produk'] = $this->produk_m->get_produk()->result();
		$data['kategori'] = $this->kategori_m->get_kategori()->result();
		$data['suplier'] = $this->suplier_m->get_suplier()->result();

		//print_r($data['kategori']);
		$this->load->view('view_produk', $data);
	}

	public function add_kategori(){


		$nama_kategori = $this->input->post('nama_kategori');
		$keterangan_kategori = $this->input->post('keterangan_kategori');
 
		$data = array(
			'id_kategori' => "",
			'nama_kategori' => $nama_kategori,
			'keterangan_kategori' => $keterangan_kategori
			);

		$query = $this->kategori_m->add_kategori($data);

		if ($query) {
			$message = array('status' => true, 'message' => 'Berhasil menambahkan kategori');
        }else{ 
        	$message = array('status' => true, 'message' => 'Gagal menambahkan kategori');
        }

		redirect('AdminController/page_kategori');
	}

	public function update_kategori()
	{
		$id= $this->uri->segment(3);

		$nama_kategori = $this->input->post('nama_kategori');
		$keterangan_kategori = $this->input->post('keterangan_kategori');

		
 
		$data = array(
			'id_kategori' => $id,
			'nama_kategori' => $nama_kategori,
			'keterangan_kategori' => $keterangan_kategori
		);

		$where = array(
			'id_kategori' => $id
		);

		$this->kategori_m->update_kategori($where,$data);

		redirect('AdminController/page_kategori');
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

	public function add_suplier(){


		$nama_suplier = $this->input->post('nama_suplier');
		$telepon = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');
		
 
		$data = array(
			'id_suplier' => "",
			'nama_suplier' => $nama_suplier,
			'telepon' => $telepon,
			'alamat' => $alamat
			);

		$query = $this->suplier_m->add_suplier($data);

		if ($query) {
			$message = array('status' => true, 'message' => 'Berhasil menambahkan suplier');
        }else{ 
        	$message = array('status' => true, 'message' => 'Gagal menambahkan suplier');
        }

		redirect('AdminController/page_suplier');
	}

	public function update_suplier()
	{
		$id= $this->uri->segment(3);

		$nama_suplier = $this->input->post('nama_suplier');
		$telepon = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');
		
 
		$data = array(
			'id_suplier' => $id,
			'nama_suplier' => $nama_suplier,
			'telepon' => $telepon,
			'alamat' => $alamat
		);

		$where = array(
			'id_suplier' => $id
		);

		$this->suplier_m->update_suplier($where,$data);

		redirect('AdminController/page_suplier');
	}

	public function add_produk()
	{
		

		$nama_produk = $this->input->post('nama_produk');
		$nama_kategori = $this->input->post('addKategori');
		$nama_suplier = $this->input->post('addSuplier');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		
 
		$data = array(
			'id_produk' => "",
			'nama_produk' => $nama_produk,
			'id_kategori' => $nama_kategori,
			'id_suplier' => $nama_suplier,
			'harga' => $harga,
			'keterangan' => $keterangan,
			);

	
		$query = $this->produk_m->add_produk($data);

		if ($query) {
			$message = array('status' => true, 'message' => 'Berhasil menambahkan suplier');
        }else{ 
        	$message = array('status' => true, 'message' => 'Gagal menambahkan suplier');
        }

		redirect('AdminController/page_produk');
	}

	public function update_produk()
	{
		$id= $this->uri->segment(3);

		$nama_produk = $this->input->post('nama_produk');
		$nama_kategori = $this->input->post('addKategori');
		$nama_suplier = $this->input->post('addSuplier');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		
 
		$data = array(
			'id_produk' => "",
			'nama_produk' => $nama_produk,
			'id_kategori' => $nama_kategori,
			'id_suplier' => $nama_suplier,
			'harga' => $harga,
			'keterangan' => $keterangan,
			);

		$where = array(
			'id_produk' => $id
		);


		$this->produk_m->update_produk($where,$data);

	

		redirect('AdminController/page_produk');
	}


	public function delete_user()
	{
		$id= $this->uri->segment(3);

		$this->user_m->delete_user($id);

		redirect('adminController/page_user');
	}

	public function delete_suplier()
	{
		$id= $this->uri->segment(3);

		$this->suplier_m->delete_suplier($id);

		redirect('adminController/page_suplier');
	}

	public function delete_kategori()
	{
		$id= $this->uri->segment(3);

		$this->kategori_m->delete_kategori($id);

		redirect('adminController/page_kategori');
	}

	public function delete_produk()
	{
		$id= $this->uri->segment(3);

		$this->produk_m->delete_produk($id);

		redirect('adminController/page_produk');
	}

}
?>