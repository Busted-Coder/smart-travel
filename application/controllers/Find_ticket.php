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
     
     $this->load->view('seatbooking/available_buses',$viewdata);
     

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
        $this->load->view('seatbooking/bookings', $data);    //Actual site view. The CSS classes are clashing somehow. Need HELP!
        // $this->load->view('seatbooking/seatmap', $data);        //basic plugin view.     Link 2! Plugin working properly here. 
    }
 }

 

}