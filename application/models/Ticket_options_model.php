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
        $this->load->library('session');
    }

    public function getCity()
    {
        $this->load->database();
       $pass = $this->db->query('SELECT * FROM ticket');
       $passenger = $pass->num_rows();
       $bu = $this->db->query('SELECT * FROM bus');
       $bus = $bu->num_rows();
       $mem = $this->db->query('SELECT * FROM user where role_id=2');
       $member = $mem->num_rows();
       $dri = $this->db->query('SELECT * FROM user where role_id=3');
       $driver = $dri->num_rows();
       $offer = $this->db->select('name,value')->get('offer')->result_array();
       $stat = array(
        'passenger' => $passenger,
        'bus'       => $bus,
        'member'    => $member,
        'driver'    => $driver,
        'offer'     => $offer
       );
       $this->session->set_userdata($stat);

        $query = $this->db->select('name,shortcode')->order_by("name","asc")->get('city');
        //$query->result_array();
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

