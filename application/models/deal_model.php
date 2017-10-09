<?php 
class Deal_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
        return $this->db->order_by("class","asc")->get('offer')->result_array();
    }
}
?>