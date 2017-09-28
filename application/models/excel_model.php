<?php 
class Excel_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getTicket()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $query = $this->db->get();
        return $query->result();
    }
}
?>