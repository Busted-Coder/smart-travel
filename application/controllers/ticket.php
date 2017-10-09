<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('ticket_model','TicketModel');
	}
	//return full ticket list
	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->TicketModel->getList('desc');
		$this->loadView('views/ticket', array('info'=> $info), true);
	}
	//take t_id
	//return that ticket info
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
	//will load the add_ticket form
	//with ticket status info
	public function add1(){
		$this->OnlyAdmin();
		$data = $this->OnlyAdmin();$data = $this->TicketModel->avail_us();
		$this->loadView('add/ticket',array('data' => $data),true);
	}
	//make a tuple in ticket by admin
	public function add(){
		$this->OnlyAdmin();
		if($this->input->post()){
			$this->TicketModel->Add($this->input->post());
			redirect('index.php/ticket/lists');}
	}
	//take trav_id
	//return registered user detail
	public function spec_u(){
		$this->OnlyAdmin();
		$info = $this->TicketModel->getspec_u($this->input->get('trav_id'));
		$this->loadView('views/user', array('info'=> $info), true);	 
	}
	//take p_id
	//return walking customer detail
	public function spec_u_walking(){
		$this->OnlyAdmin();
		$info = $this->TicketModel->getspec_u_walking($this->input->get('p_id'));
		$this->loadView('views/user_walking', array('info'=> $info), true);	 
	}
	//take s_id
	//return a specific schedule
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
	//take t_id
	//delete ticket
	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->TicketModel->delet($this->input->post());
		redirect('index.php/ticket/lists');}
	}
	public function user(){
		$this->OnlyAdmin();
		$info = $this->TicketModel->getListUser($this->input->post('user_id'));
		$this->loadView('views/ticket', array('info'=> $info), true);
	}
	//final booking check to minimize error
	public function final_booking(){
		$seatno = array(
			'seatno' => $this->input->post('seatno'),
			'state'  => 1
		);
		$this->session->set_userdata($seatno);
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('seatbooking/final_check');
		$this->load->view('layout/footer');
	}
	//make a tuple in ticket table from of registered user
	public function book(){
		$res_id = $this->TicketModel->RandomString('5');
		$res = array(
			'reservation_id'   => $res_id
		);
		$this->session->set_userdata($res);
		$this->TicketModel->postbooking();
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('seatbooking/print_ticket');
		$this->load->view('layout/footer');
	}
	//save walking customer data
	//make a tuple in ticket table with walking customer
	public function final_booking_random(){
		$seatno = $this->input->post('seatno');
		$passenger = $this->TicketModel->add_customer($this->input->post());
		$p_id = array(
			'p_id'     => $passenger->p_id,
			'username' => $passenger->fname.' '.$passenger->lname,
			'cnic'     => $passenger->cnic,
			'gender'   => $passenger->gender,
			'seatno'   => $seatno,
			'state'    => 1
		);
		$this->session->set_userdata($p_id);
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('seatbooking/final_check');
		$this->load->view('layout/footer');
	}
}