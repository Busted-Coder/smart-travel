<?php 
class Ticket_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->order_by("t_id", "asc")->get('ticket')->result_array();
    }  
    public function getticket($ticket_id){
		return $this->db->where('t_id', $ticket_id)->get('ticket')->row();     
    }
    public function Add($ticket){
        $ticket['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('ticket', $ticket);
    }
    public function Get($id){
        return $this->db->where('t_id', $id)->get('ticket')->row();
    }
    public function Edit($ticket){
        $this->db->where('t_id', $ticket['t_id'])->update('ticket', $ticket);
    }
    public function delet($ticket){
        $this->db->where('t_id',$ticket['t_id'])->delete('ticket');
    }
    public function getspec_u($id){
        $data = $this->db->where('user_id', $id)->get('user')->row();
        $d['user_id'] = $data->user_id;
        $d['fname'] = $data->fname;
        $d['lname'] = $data->lname;
        $d['email'] = $data->email;
        $d['phone'] = $data->phone;
        $d['image'] = $data->image;
        $d['cnic'] = $data->cnic;
        $d['address'] = $data->address;
        $d['role_id'] = $data->role_id;
        return array('info'=>$d);
    }
    public function getspec_s($id){
        $data = $this->db->where('schedule_id', $id)->get('schedule')->row();
        $d['schedule_id'] = $data->schedule_id;
        $d['route_id'] = $data->route_id;
        $d['bus_id'] = $data->bus_id;
        $d['created_at'] = $data->created_at;
        return array('info'=>$d);
    }
    public function avail_us(){
        $d0 = $this->db->select('schedule_id')->get('schedule')->result();
        $list = [];
        foreach ($d0 as $k) {
            $data['schedule_id'] = $k->schedule_id;
            array_push($list, $data);
        }
        $d1 = $this->db->select('user_id')->get('user')->result();
        $list1 = [];
        foreach ($d1 as $k1) {
            $data1['user_id'] = $k1->user_id;
            array_push($list1, $data1);
        }
        return array('d0'=>$list,'d1'=>$list1);



    }
}
?>