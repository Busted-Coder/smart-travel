<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cam extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('cam_model','CamModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->CamModel->getList();
		$this->loadView('views/cam', array('info'=> $info), true);
	}

	public function spec(){
		$this->OnlyAdmin();
		$info = $this->CamModel->getspec($this->input->get('cam_id'));
		$this->loadView('views/cam_bus', array('info'=> $info), true);	 
	}
}