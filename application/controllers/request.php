<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('request_model','RequestModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		//$info = $this->RequestModel->getList();
		$this->loadView('views/request', false, true);
	}
}