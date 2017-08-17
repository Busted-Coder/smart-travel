<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('auth_model','AuthModel');

	}
	public function login_loader(){
		$this->loadView('login/login_register',null,false);
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		echo $username;
		echo $password;
		$db_users = $this->AuthModel->login();
		echo count($db_users);
		if($username || $password){
			if($username == $db_users['email'] && $password == $db_users['password']){
				$_SESSION['Role'] = 'User';
				$_SESSION['User'] = $db_users['email'];
				redirect('index.php/Welcome/index');
			}else{
				$this->loadView('login/login_register', array('Error'=> 'Incorrect Username or password!'),false);
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