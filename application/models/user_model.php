<?php 
class User_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->get('user')->result_array();
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
}
?>