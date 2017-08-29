<?php 
class Request_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->order_by("req_id", "desc")->get('seat_request')->result_array();
    }
}
?>