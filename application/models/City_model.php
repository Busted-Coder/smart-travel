<?php

/**
 * Created by PhpStorm.
 * User: Rabai
 * Date: 8/23/2017
 * Time: 12:35 PM
 */
class City_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getCityList()
    {
        return $this->db->select("city_id")->get('city')->result_array();

    }

}