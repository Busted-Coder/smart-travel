<?php 
class Auth_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function login(){
        return $this->db->get('user')->result_array();
    }
    public function AddNewUser($user_data)
    {
        /*
        $insert_query = "Insert into user 
                        (fname, lname, address, city, zip_code, state, password) 
                        values(".$user_data['firstname'].",".$user_data['lastname'].","
                            .$user_data['address'].",".$user_data['city'].","
                            .$user_data['zip_code'].",".$user_data['state'].","
                            .$user_data['password'].")";*/
        unset($user_data['r_password']);
        unset($user_data['register-radio']);
        $user_data['role_id'] = "2";
        $user_data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('user', $user_data);
    }
    
}
?>