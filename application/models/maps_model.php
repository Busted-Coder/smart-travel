<?php 
class Maps_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getloc($id){
    	$loc1 = $this->db->where('tracker_id',$id)->get('tracker')->row_array();
    	return $loc1['position'];
    }
}
?>