<?php 
class User_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList($order){
       return $this->db->order_by("user_id", $order)->get('user')->result_array();
    }  

    public function getuser($user_id){
		return $this->db->where('user_id', $user_id)->get('user')->result();     
    }
    public function Add($user){
        $user['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('user', $user);
    }
    public function Get($id){
        return $this->db->where('user_id', $id)->get('user')->row();
    }
    public function Edit($user){
        $this->db->where('user_id', $user['user_id'])->update('user', $user);
    }
    public function delet($user){
        $this->db->where('user_id',$user['user_id'])->delete('user');
    }
    public function getListrole(){
       return $this->db->get('role')->result_array();
    }
	public function viewTrips($id){
		
		return $this->db->where('trav_id',$id)->get('ticket')->result_array();
	}
	public function editProfile($d){
		$this->db->set('fname', $d['fname']);
		$this->db->set('lname', $d['lname']);
		$this->db->set('email', $d['email']);
		$this->db->set('cnic', $d['cnic']);
		$this->db->set('phone', $d['phone']);
		$this->db->set('address', $d['address']);
		$this->db->where('email',$d['email']);
		$this->db->update('user');		
		
		
	}
    public function getPassword($id){
        return $this->db->select('*')
        ->from('user')
        ->where('user_id',$id)
        ->get()->result();
    }
    public function changePassword($id,$pass){
        $this->db->set('password',$pass);
        $this->db->where('$id',$id);
        $this->db->update('user');
    }
}
?>