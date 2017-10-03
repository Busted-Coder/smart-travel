<?php 
class Ticket_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function getList($order){
       return $this->db->order_by("t_id", $order)->get('ticket')->result_array();
    }  
    public function getticket($ticket_id){
		return $this->db->where('t_id', $ticket_id)->get('ticket')->row();     
    }
    public function Add($ticket){
        $ticket['created_at'] = date("Y-m-d H:i:s");//json_decode(date("Y-m-d H:i:s"),true);
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
        $d['dob'] = $data->dob;
        $d['gender'] = $data->gender;
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
    public function getListUser($id){
        return $this->db->where('trav_id',$id)->order_by("t_id", "desc")->get('ticket')->result_array(); 
    }
    //Random string generator for reservation_id
    public function RandomString($length) {
        $randstr = '';
        srand((double) microtime(TRUE) * 1000000);
        //our array add all letters and numbers if you wish
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p',
            'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5',
            '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 
            'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    
        for ($rand = 0; $rand <= $length; $rand++) {
            $random = rand(0, count($chars) - 1);
            $randstr .= $chars[$random];
        }
        return $randstr;
    }
    //Ticket Booking from user panel
    //Update User table KM Value
    public function postbooking(){
        $ticket['schedule_id'] = $this->session->userdata('schedule_id');
        $ticket['trav_id'] = $this->session->userdata('user_id');
        $ticket['trav_date'] = $this->session->userdata('busdate');
        $ticket['seat#'] = $this->session->userdata('seatno');
        $ticket['state'] = 1;
        $ticket['reservation_id'] = $this->session->userdata('reservation_id');
        $ticket['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('ticket', $ticket);
        $set_cond = "km + ".$this->session->userdata('km');
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $this->db->set('km', $set_cond, FALSE);
        $this->db->update('user');
    }
}
?>