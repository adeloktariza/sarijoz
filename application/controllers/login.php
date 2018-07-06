<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('user_m');
		$this->load->library('twig');
		$this->twig->add_function('base_url');
 
	}

	public function index() {
		if ($this->session->userdata('username') == "") {
			$this->load->view('view_login');
		}else{
			$data['username'] = $this->session->userdata('username');
        	$this->load->view('view_admin', $data);
		}
		
	}

	public function prosesLogin()
	{

		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = $this->user_m->user_login($username,$password)->result();

       
    	if($data == TRUE){
    		$this->session->set_userdata('username',$username);
    		$data['username'] = $this->session->userdata('username');
    		$this->load->view('view_admin', $data);
    	}
    	else{

    		$message = "Anda gagal masuk";
			echo "<script type='text/javascript'>alert('$message');</script>";

    	}
	}

	public function logout() {
		$this->session->unset_userdata('username');
		session_destroy();
		redirect('login');
	}

}

?>