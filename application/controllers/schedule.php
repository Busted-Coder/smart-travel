<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('schedule_model','ScheduleModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->ScheduleModel->getList();
		$this->loadView('views/schedule', array('info'=> $info), true);
	}

	public function edit(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$s = $this->ScheduleModel->Get($this->input->get('schedule_id'));
			$data = $this->ScheduleModel->availroutebus();
			$schedule = array('s' => $s,'data' => $data);
			$this->loadView('edit/schedule', array('schedule'=> $schedule), true);
		}else if($this->input->post()){
			$this->ScheduleModel->Edit($this->input->post());
			redirect('index.php/schedule/lists');
		}
	}

	public function add1(){
		$this->OnlyAdmin();
		$data = $this->ScheduleModel->availroutebus();
		$this->loadView('add/schedule',array('data' => $data),true);
	}

	public function add(){
		$this->OnlyAdmin();
		if($this->input->post()){
			$this->ScheduleModel->Add($this->input->post());
			redirect('index.php/schedule/lists');}
	}
	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->ScheduleModel->delet($this->input->post());
		redirect('index.php/schedule/lists');}
	}
}