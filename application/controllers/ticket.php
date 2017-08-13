<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('ticket_model','TicketModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->TicketModel->getList();
		$this->loadView('views/ticket', array('info'=> $info), true);
	}

	
public function edit(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$ticket = $this->TicketModel->Get($this->input->get('t_id'));
			$this->loadView('edit/ticket', array('ticket'=> $ticket), true);
		}else if($this->input->post()){
			$this->TicketModel->Edit($this->input->post());
			redirect('index.php/ticket/lists');
		}
	}

	public function add1(){
		$this->OnlyAdmin();
		$data = $this->OnlyAdmin();$data = $this->TicketModel->avail_us();
		$this->loadView('add/ticket',array('data' => $data),true);
	}

	public function add(){
		$this->OnlyAdmin();
		if($this->input->post()){
			$this->TicketModel->Add($this->input->post());
			redirect('index.php/ticket/lists');}
	}
	public function spec_u(){
		$this->OnlyAdmin();
		$info = $this->TicketModel->getspec_u($this->input->get('trav_id'));
		$this->loadView('views/user', array('info'=> $info), true);	 
	}
	public function spec_s(){
		$this->OnlyAdmin();
		$info = $this->TicketModel->getspec_s($this->input->get('schedule_id'));
		$this->loadView('views/schedule', array('info'=> $info), true);	 
	}
	public function load1(){
		$this->OnlyAdmin();
		$detail = $this->ticketModel->get_tc();
		$this->loadView('add/ticket',array('detail'=>$detail),true);
	} 
	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->TicketModel->delet($this->input->post());
		redirect('index.php/ticket/lists');}
	}

}