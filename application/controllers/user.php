<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->OnlyAdmin();
		$this->load->model('user_model','UserModel');
	}

	public function lists()
	{
		$this->OnlyAdmin();
		$info = $this->UserModel->getList();
		$this->loadView('views/user', array('info'=> $info), true);
	}

	public function edit(){
		$this->OnlyAdmin();
		if($this->input->get()){
			$user = $this->UserModel->Get($this->input->get('user_id'));
			$avail_role = $role = $this->UserModel->getListrole();
			$user->avail_role = $avail_role;
			$this->loadView('edit/user', array('user'=> $user), true);
		}else if($this->input->post()){
			$this->UserModel->Edit($this->input->post());
			redirect('index.php/user/lists');
		}
	}
	public function add1(){
		$this->OnlyAdmin();
		$this->loadView('add/user',false,true);
	}
	public function add(){
		$this->OnlyAdmin();
		if($this->input->post()){
			$this->UserModel->Add($this->input->post());
			redirect('index.php/user/lists');}
	}
	public function del(){
		$this->OnlyAdmin();
		if($this->input->post()){
		$this->UserModel->delet($this->input->post());
		redirect('index.php/user/lists');}
	}
	/*public function part(){
		$this->OnlyAdmin();
		$route_id = $this->input->get('id');
		$info= $this->RouteModel->getroute($route_id);
		$this->loadView('views/route', array('info'=>$info), true);
	}*/
	//This will return the technical info of user by pressing tech info button at user main panel.
	public function tech(){
		$this->OnlyAdmin();
		$user_id = $this->input->post('user_id');
		$info = $this->UserModel->getuser($user_id);
		$this->loadView('views/user_tech', array('info'=>$info), true);
	}
	
	
}