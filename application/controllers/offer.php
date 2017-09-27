<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('offer_model','OfferModel');
	}
	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->OfferModel->getList();
		$this->loadView('views/offer', array('info'=> $info), true);
	}
	public function spec(){
		$this->OnlyAdmin();
		$info = $this->OfferModel->getspec($this->input->post('o_id'));
		$this->loadView('views/offer', array('info'=> $info), true);	 
	}
	public function edit(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$info = $this->OfferModel->Get($this->input->get('o_id'));
			$this->loadView('edit/offer', array('info'=> $info), true);
		}else if($this->input->post()){
			$this->OfferModel->Edit($this->input->post());
			redirect('index.php/offer/lists');
		}
	}
	public function add(){
		$this->OnlyAdmin();
		$this->loadView('add/offer',null,true);
		if($this->input->post()){
			$this->OfferModel->Add($this->input->post());
			redirect('index.php/offer/lists');}
	}
	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->OfferModel->delet($this->input->post());
		redirect('index.php/offer/lists');}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */