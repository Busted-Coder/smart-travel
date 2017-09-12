<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('auth_model','AuthModel');
		$this->load->library('session');

	}
	public function login_loader(){
		$this->loadView('login/login_register',array('Error' => 'NULL'),false);
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//echo $username;
		//echo $password;
		$db_users = $this->AuthModel->login();
		//echo count($db_users);
		if($username && $password){
			foreach ($db_users as $p){
				if($username == $p['email'] && $password == $p['password'])
				{
					$newdata = array(
								'user_id'  => $p['user_id'],
               					'username'  => $p['fname'],
               					'email'     => $p['email'],
               					'logged_in' => TRUE
           );
					$this->session->set_userdata($newdata);
					redirect('index.php/Welcome/index');
				}
				else
				{
					$this->loadView('login/login_register', array('Error'=> 'Incorrect Username or password!'),false);
				}}
			}
			else
			{
				$this->loadView('login/login_register', array('Error'=> 'Incorrect Username or password!'),false);
			}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('index.php/Welcome/index');
	}

	public function register()
	{
		$postedData = $_POST;
		$validation_result = $this->validate_form($postedData);
		if(count($validation_result) > 0){
			$data['validation_error']  = $validation_result;
			$this->load->view('login/login_register', $data);
		}
		else{
			$this->AuthModel->AddNewUser($postedData);
		}
	}

	private function validate_form($form_data)
	{
		$validation_error = array();
		if($form_data['password'] !== $form_data['r_password'])
		{
			array_push($validation_error, 'Passwod do not Match !!!');
		}
		return $validation_error;
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */