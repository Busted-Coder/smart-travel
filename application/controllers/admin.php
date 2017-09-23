<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('admin/login', array('Error' => 'NULL'));
	}

	public function Login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username|| $password){
			if($username == 'admin' && $password == 'admin'){
				$_SESSION['Role'] = 'Admin';
				redirect('index.php/ticket/lists');
			}else{
				$this->load->view('admin/login', array('Error' => 'Incorrect Username or Password !'));
			}
		}else{
			$this->load->view('admin/login', array('Error' => 'NULL'));
		}
	}

	public function logout(){
		$_SESSION['Role'] = '';
		redirect('index.php/admin/login');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */