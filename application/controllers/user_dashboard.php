<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends MY_Controller {
	
	public function viewProfile(){
			
		$id=$this->session->user_id;
		$this->load->model('User_model');
		$user_info=$this->User_model->getuser($id);
		
		
		 $user_info = json_encode($user_info);
          $user_info = json_decode($user_info,true);
          
         if ($user_info)
         {
         $viewdata['info'] = $user_info;
     }
     	else{
     		$viewdata['info']=false;	
     		}	
		
				$this->load->view('layout/header');
				$this->load->view('layout/nav');		
            	$this->load->view('user_dashboard/viewProfile',$viewdata);
				$this->load->view('layout/footer');
				

	}

	public function viewTrips(){
			
		$id = $this->session->userdata('user_id');
		$this->load->model('User_model');
		$data = $this->User_model->viewTrips($id);
		
		$data = json_encode($data);
        $data = json_decode($data,true);  
        /*if ($data){
        	$viewdata['trips'] = $trip_info;
    	}
     	else{
     		$viewdata['trips']=false;	
     	}*/	
		
		//$this->load->view('layout/header');
		//$this->load->view('layout/nav');		
   		$this->loadView('user_dashboard/viewTrips', array('data' => $data),false);
		//$this->load->view('layout/footer');
	}

	public function editProfile(){
		$this->load->model('User_model');
		$info= $this->User_model->editProfile($this->input->post());
		redirect('index.php/user_dashboard/viewProfile');
	}

	public function changePassword_loader(){
		$this->load->view('layout/header');
   		$this->load->view('layout/nav');
   		$this->load->view('user_dashboard/changePassword', array('Error'=> ''));
   		$this->load->view('layout/footer');
	}

	public function changePassword(){
		$pass_input=$this->input->post();
		$id=$this->session->user_id;
		$this->load->model('User_model');
		$pass=$this->User_model->getPassword($id);
		$pass = json_encode($pass);
        $pass = json_decode($pass,true);

        if($pass['password'] == $pass_input['password']){
        	if($pass_input['newPassword']==$pass_input['r_password']){
        		$this->User_model->changePassword($id,$pass_input['r_password']);
        		$this->load->view('layout/header');
        		$this->load->view('layout/nav');
        		$this->load->view('user_dashboard/changePassword', array('Error'=> 'Password Successfully Updated'),false);
        		$this->load->view('layout/footer'); 	
        	}
        	else{$this->load->view('layout/header');
        		$this->load->view('layout/nav');
        		$this->load->view('user_dashboard/changePassword', array('Error'=> 'Password Do Not Match'));
        		$this->load->view('layout/footer');
        	}
        }
        else{
        	$this->load->view('layout/header');
        	$this->load->view('layout/nav');
        	$this->load->view('user_dashboard/changePassword', array('Error'=> 'Current Password is not Correct'));
        	$this->load->view('layout/footer');

        }
	}
	//This will return as many tickets data depending 
	//upon given reservation_id as many found.
	public function track_by_res(){
		$this->load->library('session');
		$this->load->model('Ticket_model');
		$data = $this->Ticket_model->gettickets($this->input->post('res-num'));
		$r = array(
			'res_num' => $this->input->post('res-num')
		);
		$this->session->set_userdata($r);
		//$this->load->view('layout/header');
		//$this->load->view('layout/nav');
		$this->loadView('user_dashboard/res_tic_view',array('data' => $data),false);
		//$this->load->view('layout/footer');
	}
	//return particular ticket preview
	//call by user_dashboard/res_tic_view
	//intake Ticket_id
	//using ticket-model function get_ticket_preview() 
	public function ticket_preview(){
		$this->load->model('Ticket_model');
		//$this->load->library('session');
		$tic = $this->Ticket_model->get_ticket_preview($this->input->post('t_id'));
		//echo $tic['t_id'];
		$this->session->set_userdata($tic);
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('seatbooking/print_ticket');
		$this->load->view('layout/footer');
	}
}
?>