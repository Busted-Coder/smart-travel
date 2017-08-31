<?php

/**
 * Created by PhpStorm.
 * User: Rabai
 * Date: 8/23/2017
 * Time: 12:33 PM
 */
class city extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('City_model');

    }

    public function city_list()
    {
        $info = $this->City_model->getCityList();
        $this->loadView('views/city', array('info'=> $info), true);

    }


}