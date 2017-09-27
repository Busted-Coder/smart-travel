<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class user_dashboard extends CI_Controller {
	
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
			
		$id=$this->session->user_id;
		$this->load->model('User_model');
		$trip_info=$this->User_model->viewTrips($id);
		
		
		 $trip_info = json_encode($trip_info);
          $trip_info = json_decode($trip_info,true);
          
         if ($trip_info)
         {
         $viewdata['trips'] = $trip_info;
     }
     	else{
     		$viewdata['trips']=false;	
     		}	
		
				$this->load->view('layout/header');
				$this->load->view('layout/nav');		
           		$this->load->view('user_dashboard/viewTrips',$viewdata);
				$this->load->view('layout/footer');
				

	}
	public function editProfile(){
		$this->load->model('User_model');
		$info= $this->User_model->editProfile($this->input->post());
		redirect('index.php/user_dashboard/viewProfile');

	}
	public function changePassword(){
		$pass_input=$this->input->post();
		$id=$this->session->user_id;
		$this->load->model('User_model');
		$pass=$this->User_model->getPassword($id);
		$pass = json_encode($pass);
        $pass = json_decode($pass,true);

        if($pass['password']==$pass_input['password']){
        	if($pass_input['newPassword']==$pass_input['r_password']){
        		$this->User_model->changePassword($id,$pass_input['r_password']);
        		redirect('index.php/user_dashboard/passwordConfirm'); 	
        	}
        	else{$this->load->view('layout/header');
        		$this->load->view('layout/nav');
        		$this->load->view('user_dashboard/changePassword', array('Error'=> 'Passwords do not match'),false);
        		$this->load->view('layout/footer');
        	}
        }
        else{
        	$this->load->view('layout/header');
        	$this->load->view('layout/nav');
        	$this->load->view('user_dashboard/changePassword', array('Error'=> 'Current password is not correct'),false);
        	$this->load->view('layout/footer');

        }
	}
}

?>