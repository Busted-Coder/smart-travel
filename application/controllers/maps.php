<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('maps_model','MapsModel');
	}

	public function init(){
		$this->OnlyAdmin();
		$loc1['position'] = $this->MapsModel->getloc($this->input->post('tracker_id'));
		$loc = explode('/', $loc1['position']);
		$info['lat'] = $loc[0];
		$info['lng'] = $loc[1];
		$this->load->view('views/maps',array('info' => $info));
	}
}