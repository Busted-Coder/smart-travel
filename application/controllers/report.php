<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('report_model','ReportModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$this->loadView('views/report', false, true);
	}
}