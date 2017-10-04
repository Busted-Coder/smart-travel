<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->model('auth_model','AuthModel');
		//$this->load->library('session');
		//$this->load->library('email');

	}

	public function privacy(){
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('views/privacy');
		$this->load->view('layout/footer');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */