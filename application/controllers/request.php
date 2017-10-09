<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('request_model','RequestModel');
		$this->load->model('route_model','RouteModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->RequestModel->getList();
		$this->loadView('views/request', array('info' => $info), true);
	}

	public function mydata(){
		$this->OnlyAdmin();
		$info = $this->RequestModel->getmyList();
		$this->loadView('views/my_request', array('info' => $info), true);
	}

	public function mydata_accp(){
		$this->OnlyAdmin();
		$info = $this->RequestModel->getserList();
		$this->loadView('views/myreq_accp', array('info' => $info), true);
	}

	public function  accp_req(){
		$this->OnlyAdmin();
		$info = $this->RequestModel->getaccpList();
		$this->loadView('views/service_req', array('info' => $info), true);	
	}

	public function accept(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$req = $this->RequestModel->Get($this->input->get('req_id'));
			$this->loadView('edit/request', array('req' => $req), true);
		}
		else if($this->input->post()){
			$this->RequestModel->sel_req($this->input->post());
			redirect('index.php/request/lists');
		}
	}

	public function edit(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$req = $this->RequestModel->Get($this->input->get('req_id'));
			$this->loadView('edit/my_request', array('req'=> $req), true);
		}else if($this->input->post()){
			$this->RequestModel->Edit($this->input->post());
			redirect('index.php/request/mydata');
		}
	}

	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->RequestModel->delet($this->input->post());
		redirect('index.php/request/lists');}
	}


	public function emer(){
		$this->OnlyAdmin();
		$info = $this->RequestModel->getemerList();
		$this->loadView('views/emer_request', array('info' => $info), true); 
	}


	public function add(){
		$this->OnlyAdmin();
		$data = $this->RouteModel->getcity();
		$this->loadView('add/request', array("data" => $data), true);
		if($this->input->post()){
			$this->RequestModel->Add($this->input->post());
			redirect('index.php/request/lists');}
	}	
}