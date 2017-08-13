<?php 
class Role_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->get('role')->result_array();
    }
    public function getspec($id){
        $data = $this->db->where('role_id', $id)->get('role')->row();
        $d['role_id'] = $data->role_id;
        $d['type'] = $data->type;
        $d['role'] = $data->role;
        return array('role'=>$d);
    }
    public function Add($role){
        $role['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('role', $role);
    }
    public function Get($id){
        return $this->db->where('role_id', $id)->get('role')->row();
    }
    public function Edit($role){
        $this->db->where('role_id', $role['role_id'])->update('role', $role);
    }
    public function delet($role){
        $this->db->where('role_id',$role['role_id'])->delete('role');
    }
}
?>