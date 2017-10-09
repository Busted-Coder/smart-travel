<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('route_model','RouteModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->RouteModel->getList();
		$this->loadView('views/route', array('info'=> $info), true);
	}
	public function add1(){
		$this->OnlyAdmin();
		$data = $this->RouteModel->getcity();
		$this->loadView('add/route',array("data" => $data),true);
	}
	public function edit(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$route = $this->RouteModel->Get($this->input->get('route_id'));
			$this->loadView('edit/route', array('route'=> $route), true);
		}else if($this->input->post()){
			$this->RouteModel->Edit($this->input->post());
			redirect('index.php/route/lists');
		}
	}
	public function add(){
		$this->OnlyAdmin();
		if($this->input->post()){
			$this->RouteModel->Add($this->input->post());
			redirect('index.php/route/lists');}
	}

	public function spec(){
		$this->OnlyAdmin();
		$info = $this->RouteModel->getspec($this->input->get('route_id'));
		$this->loadView('views/route', array('info'=> $info), true);	 
	}
	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->RouteModel->delet($this->input->post());
		redirect('index.php/route/lists');}
	}
}