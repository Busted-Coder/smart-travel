<?php 
class Auth_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function login(){
        return $this->db->get('user')->result_array();
    }
    
}
?>