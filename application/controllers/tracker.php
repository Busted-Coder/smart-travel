<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracker extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('tracker_model','TrackerModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->TrackerModel->getList();
		$this->loadView('views/tracker', array('info'=> $info), true);
	}

	public function spec(){
		$this->OnlyAdmin();
		$info = $this->TrackerModel->getspec($this->input->get('tracker_id'));
		$this->loadView('views/tracker', array('info'=> $info), true);	 
	}
}