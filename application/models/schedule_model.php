<?php 
class Schedule_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->order_by("schedule_id", "desc")->get('schedule')->result_array();
    }    
    public function Get($id){
        $d2 = $this->db->where('schedule_id', $id)->get('schedule')->row();
        $d['schedule_id'] = $d2->schedule_id;
        $d['route_id'] = $d2->route_id;
        $d['bus_id'] = $d2->bus_id;
        return array('d2'=> $d);
    }
    public function Edit($schedule){
        $this->db->where('schedule_id', $schedule['schedule_id'])->update('schedule', $schedule);
    }
    public function delet($schedule){
        $this->db->where('schedule_id',$schedule['schedule_id'])->delete('schedule');
    }
    public function Add($schedule){
        $schedule['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('schedule', $schedule);
    }   
    public function availroutebus(){
        $d0 = $this->db->select('route_id')->get('route')->result();
        $list = [];
        foreach ($d0 as $k) {
            $data['route_id'] = $k->route_id;
            array_push($list, $data);
        }
        $d1 = $this->db->select('bus_id')->where('`bus_id` NOT IN (SELECT `bus_id` FROM `schedule`)', NULL, FALSE)->get('bus')->result();
        $list1 = [];
        foreach ($d1 as $k1) {
            $data1['bus_id'] = $k1->bus_id;
            array_push($list1, $data1);
        }
        return array('d0'=>$list,'d1'=>$list1);



    }
}
?>