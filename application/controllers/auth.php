<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('auth_model','AuthModel');
		$this->load->library('session');
<<<<<<< HEAD
		$this->load->library('email');
=======
>>>>>>> 495c4ee5a0fa89e2e58be919e5e85f1c3491ad81

	}
	public function login_loader(){
		$this->loadView('login/login_register',array('Error' => 'NULL'),false);
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role_s = $this->input->post('role');
		if($role_s == "Admin"){
			$screen = 1;
		}
		elseif ($role_s == "User") {
			$screen = 2;
		}
		//echo $username;
		//echo $password;
		$db_users = $this->AuthModel->login();
		//echo count($db_users);
		if($username && $password){
			foreach ($db_users as $p){
				if($username == $p['email'] && $password == $p['password'] && 2 == $p['role_id'] && $screen == 2)
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
				elseif($username == $p['email'] && $password == $p['password'] && 1 == $p['role_id'] && $screen == 1){
					$_SESSION['Role'] = 'Admin';
					redirect('index.php/role/lists');
				}
				elseif($username == $p['email'] && $password == $p['password'])
				{
					$this->loadView('login/login_register', array('Error'=> 'Incorrect Role!'),false);
				}}
				$this->loadView('login/login_register', array('Error'=> 'Incorrect Username or password !!!'),false);
			}
			else
			{
				$this->loadView('login/login_register', array('Error'=> 'Incorrect Username or password !!!'),false);
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
<<<<<<< HEAD
			$to = $postedData['email'];
			$subject = "Account successfully created on Smart-Travel";
			$txt = "Greetings,
			Welcome to Smart-Travel! We are excited to have you as part of our membership.
			Membership is a lifelong journey and we look forward to helping you start yours.\n
			As a member of Smart-Travel, you will enjoy many unique benefits. Please see our
			upcoming news so we can explain these benefits and how you can get more.
			\n
			We look forward to seeing you there in near future!\n\n
			Please let us know if you have any questions about your membership.\n
			Best wishes,\n
			Team Smart-Travel\n\n Electronicaly generated mail.PLZ don't reply.";
			$headers = "From: support@smart-travel.com" . "\r\n" .
			"CC: k132387@nu.edu.pk";
			//mail($to,$subject,$txt,$headers);
			$this->email->from($headers, 'Nisar Hassan'); 
         	$this->email->to($postedData['email']);
         	$this->email->subject($subject); 
         	$this->email->message($txt);
         	if($this->email->send()){
         		redirect('index.php/Welcome/index');
         	}
         	else
         		echo "Hum to yaro beech bichary lut gaiy";
=======
>>>>>>> 495c4ee5a0fa89e2e58be919e5e85f1c3491ad81
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