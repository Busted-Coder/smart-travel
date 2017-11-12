<?php

/**
 * Created by PhpStorm.
 * User: Rabail
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
         'source'  => $this->input->post('source'),
         'dest'    => $this->input->post('dest'),
         'busdate' => $this->input->post('busdate'),
         'num-seat'=> $this->input->post('num-seat')
     );
      
     //$this->session->set_userdata($ticketdata);
     $this->session->set_userdata($ticketdata);
            //Getting data from session

         $this->load->model('Ticket_options_model','options');
         $availablebuses = $this->options->searchTicket($ticketdata);
 		 $availablebuses = json_encode($availablebuses);
          $availablebuses = json_decode($availablebuses,true);
          
         if ($availablebuses)
         {
         $viewdata['available_buses'] = $availablebuses;
     }
     	else{
     		$viewdata['available_buses'] = false;	
     		}	


            
     $this->session->set_userdata($availablebuses);
     $this->load->view('layout/header');
     $this->load->view('layout/nav');
     //echo count($viewdata);

     $this->load->view('seatbooking/available_buses',$viewdata);
     //$this->load->view('seatbooking/bookings',$viewdata);
     $this->load->view('layout/footer');


            

     

 }

 public function bookticket()
 {
    $this->OnlyUser();
 	$id = $this->input->get('id');
    $this->load->model('schedule_model', 'schedules');
    $this->load->model('route_model', 'route');
    $schedule = $this->schedules->getbyid($id);
    $route = $this->route->getspecroute($id);
    $route_info = array(
        'schedule_id' => $id,
        'km'          => $route->km,
        'day'         => $route->day,
        'source'      => $route->source,
        'destination' => $route->destination,
        'fare'        => $route->fare,
        'departure'   => $route->departure,
        'arrival'     => $route->arrival,

    );
    $this->session->set_userdata($route_info);
    $data['ticketdata'] = $this->session->userdata('ticketData');
    $data['schedule'] = $schedule;
    $data['id'] = $id;
    if ($schedule['avail_seats'] > 0 && $this->session->userdata('logged_in'))
    {
        //$this->load->view('layout/header');
        //$this->load->view('layout/nav');
        //$this->load->view('seatbooking/sel_schedule_header');
        $this->load->view('seatbooking/bookings_user', $data);
        //$this->load->view('layout/footer');
    //Actual site view. The CSS classes are clashing somehow.
        // $this->load->view('seatbooking/seatmap', $data);        //basic plugin view.     Link 2! Plugin working properly here. 
       // $this->load->view('seatbooking/seatbooking1', $data); 
    }
    elseif($schedule['avail_seats'] > 0){
        //$this->load->view('layout/header');
        //$this->load->view('layout/nav');
        //$this->load->view('seatbooking/sel_schedule_header');
        $this->load->view('seatbooking/bookings', $data);
        //$this->load->view('layout/footer');
    }
 }

 

}