<?php

/**
 * Created by PhpStorm.
 * User: Rabai
 * Date: 8/23/2017
 * Time: 1:09 PM
 */
class Ticket_options_model extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function getCity()
    {
        $this->load->database();
        $query= $this->db->select('name,shortcode')->order_by("name","asc")->get('city');
        $query-> result_array();
        return $query->result_array();

    }

    public function searchTicket($ticket)
    {
        
        $this->load->database();
       $this->load->model('schedule_model','schedules');
       $avail_buses = $this->schedules->getavailablebuses($ticket);
       
       return $avail_buses;       

    }


}

