<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends MY_Controller {
	
	public function viewProfile(){
		$this->OnlyUser();
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
		$this->OnlyUser();
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
		$this->OnlyUser();
		$this->load->model('User_model');
		$info= $this->User_model->editProfile($this->input->post());
		redirect('index.php/user_dashboard/viewProfile');
	}

	public function changePassword_loader(){
		$this->OnlyUser();
		$this->load->view('layout/header');
   		$this->load->view('layout/nav');
   		$this->load->view('user_dashboard/changePassword', array('Error'=> ''));
   		$this->load->view('layout/footer');
	}

	public function changePassword(){
		$this->OnlyUser();
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
	//change ticket status to refunded
	//call by user_dashboard/res_tic_view
	//intake Ticket_id
	//using ticket-model function refund()
	public function ticket_refund(){
		$this->OnlyUser();
		$this->load->model('Ticket_model');
		$this->Ticket_model->refund($this->input->post('t_id'));
		redirect('index.php/user_dashboard/viewTrips');
	}
	//change ticket status to exchanged
	//call by user_dashboard/res_tic_view
	//intake Ticket_id
	//using ticket-model function exchange()
	public function ticket_exchange(){
		$this->load->model('Ticket_options_model');
        $data['cityarray'] = $this->Ticket_options_model->getCity();
		$this->loadView('user_dashboard/exchange_ticket',$data,false);
	}

	public function track_by_city(){
		$this->load->library('session');
		$this->load->model('Ticket_model');
		if($this->input->post('tracking-type') == 1){
			$type = "Departure";
		}
		else{
			$type = "Arrival";
		}
		$arr = array(
			'tracking-city' => $this->input->post('tracking-city'),
			'tracking-type' => $type
		);
		$this->session->set_userdata($arr);
		$data = $this->Ticket_model->get_track_city($this->input->post());
		//$this->load->view('layout/header');
		//$this->load->view('layout/nav');
		$this->loadView('user_dashboard/track_by_city',array('data' => $data),false);
		//$this->load->view('layout/footer');
	}
}
?>