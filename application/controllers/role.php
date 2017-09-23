<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('role_model','RoleModel');
	}
	public function lists()
	{
		$this->OnlyAdmin();
		$role = $this->RoleModel->getList();
		$this->loadView('views/role', array('role'=> $role), true);
	}
	public function spec(){
		$this->OnlyAdmin();
		$role = $this->RoleModel->getspec($this->input->post('role_id'));
		$this->loadView('views/role', array('role'=> $role), true);	 
	}
	public function edit(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$role = $this->RoleModel->Get($this->input->get('role_id'));
			$this->loadView('edit/role', array('role'=> $role), true);
		}else if($this->input->post()){
			$this->RoleModel->Edit($this->input->post());
			redirect('index.php/role/lists');
		}
	}
	public function add1(){
		$this->OnlyAdmin();
		$this->loadView('add/role',false,true);
	}
	public function add(){
		$this->OnlyAdmin();
		if($this->input->post()){
			$this->RoleModel->Add($this->input->post());
			redirect('index.php/role/lists');}
	}
	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->RoleModel->delet($this->input->post());
		redirect('index.php/role/lists');}
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */