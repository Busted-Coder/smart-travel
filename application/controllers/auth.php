<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function login_loader(){
		$this->loadView('login/login_register',null,false);
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username || $password){
			if($username == 'admin' && $password == 'admin'){
				$_SESSION['Role'] = 'Admin';
				redirect('index.php/role/lists');
			}else{
				$this->load->view('admin/login', array('Error'=> 'Incorrect Username or password!'));
			}
		}else{
			$this->load->view('admin/login', array('Error'=>''));
		}
	}

	public function logout(){
		$_SESSION['Role'] = '';
		redirect('index.php/admin/login');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */