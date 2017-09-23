<?php

/**
 * Created by PhpStorm.
 * User: Rabai
 * Date: 8/23/2017
 * Time: 3:34 PM
 */
class Find_ticket extends CI_Controller
{
 public function __construct()
 {
     parent:: __construct();
     $this->load->library('session');
 }

 public function searchTicket()
 {
      $ticketdata = array(
         'source' => $this->input->post('source'),
         'dest' => $this->input->post('dest'),
         'busdate' => $this->input->post('busdate')
        
     );
      
     $this->session->set_userdata('ticketData', $ticketdata);       //Getting data from session

         $this->load->model('Ticket_options_model','options');
         $availablebuses = $this->options->searchTicket($ticketdata);
 		 $availablebuses = json_encode($availablebuses);
          $availablebuses = json_decode($availablebuses,true);
          
         if ($availablebuses)
         {
         $viewdata['available_buses'] = $availablebuses;
     }
     	else{
     		$viewdata['available_buses']=false;	
     		}	
<<<<<<< HEAD

            $this->load->view('seatbooking/available_buses',$viewdata);
=======
<<<<<<< HEAD
     $this->load->view('layout/header');
     $this->load->view('layout/nav');
     //echo count($viewdata);
     $this->load->view('seatbooking/available_buses',$viewdata);
     $this->load->view('layout/footer');
=======

            $this->load->view('seatbooking/available_buses',$viewdata);
>>>>>>> 2f3dbb42d28a5cac349159ce5fe617101f3dcf91
>>>>>>> 495c4ee5a0fa89e2e58be919e5e85f1c3491ad81
     

 }

 public function bookticket()
 {

 	$id = $this->input->get('id');
    $this->load->model('schedule_model', 'schedules');
    $schedule = $this->schedules->getbyid($id);
    
    $data['ticketdata'] = $this->session->userdata('ticketData');       
    $data['schedule'] = $schedule;
    $data['id'] = $id;
    if ($schedule['avail_seats'] > 0)
    {
        $this->load->view('seatbooking/bookings', $data);    //Actual site view. The CSS classes are clashing somehow.
        // $this->load->view('seatbooking/seatmap', $data);        //basic plugin view.     Link 2! Plugin working properly here. 
       // $this->load->view('seatbooking/seatbooking1', $data); 
    }
 }

 

}