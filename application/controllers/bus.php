<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('bus_model','BusModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->BusModel->getList();
		$this->loadView('views/bus', array('info'=> $info), true);
	}

	
	public function edit(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$bus = $this->BusModel->Get($this->input->get('bus_id'));
			$this->loadView('edit/bus', array('bus'=> $bus), true);
		}else if($this->input->post()){
			$this->BusModel->Edit($this->input->post());
			redirect('index.php/bus/lists');
		}
	}

	public function add1(){
		$this->OnlyAdmin();
		$data = $this->BusModel->gettracker();
		if(count($data) < 1){
			//$this->loadView('add/select_tracker',array('data' => $data), true);
			$this->loadView('add/tracker',false,true);	
		}
		else{
			$detail = $this->BusModel->getcam();
			$this->loadView('add/cam_bus_track',array('detail' => $detail),true);
		}
	}

	public function add(){
		$this->OnlyAdmin();
		if($this->input->post()){
			$this->BusModel->Add($this->input->post());
			redirect('index.php/bus/lists');}
	}
	public function spec(){
		$this->OnlyAdmin();
		$info = $this->BusModel->getspec($this->input->get('bus_id'));
		$this->loadView('views/bus', array('info'=> $info), true); 
	}

	public function tview(){
		$this->OnlyAdmin();
		$tracker_id = $this->input->get('id');
		$info = $this->BusModel->gettracker($tracker_id);
		$this->loadView('views/tracker', array('info'=> $info), true);
	}
	public function add_cam2(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->BusModel->Add_c2($this->input->post());
		redirect('index.php/bus/load1');}
	}
	public function add_tracker(){
		$this->OnlyAdmin();
		$this->BusModel->add_t();
		$this->loadView('add/cam',false,true);
	}
	public function add_cam(){
		$this->OnlyAdmin();
		if($this->input->post()){
			$this->BusModel->Add_c1($this->input->post());
			$this->loadView('add/cam2',false,true);}
	}
	public function load1(){
		$this->OnlyAdmin();
		$detail = $this->BusModel->get_tc();
		$this->loadView('add/bus',array('detail'=>$detail),true);
	} 
	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->BusModel->delet($this->input->post());
		redirect('index.php/bus/lists');}
	}

}