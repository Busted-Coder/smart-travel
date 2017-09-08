<?php 
class Request_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
         $this->db_b = $this->load->database('b', TRUE);
    }

    public function getList()
    {
       return $this->db_b->order_by("req_id", "desc")->get('request')->result_array();
    }

    public function getmyList()
    {
       return $this->db_b->order_by("req_id", "desc")->where('source','Smart-Travel')->get('request')->result_array();
    }

    public function  sel_req($req){
        $for_update = $this->db_b->where('req_id', $req['req_id'])->get('request')->row();
        $now_available = $for_update->seats - $req['seats'];
        if($now_available <= 0){
            $this->db_b->where('req_id',$req['req_id'])->delete('request');
        }
        else{
            $for_update->seats = $now_available;
            $this->db_b->where('req_id', $req['req_id'])->update('request', $for_update);
        }
        $req['accept_by'] = "Smart-Travel";
        $req['accept_time'] = date("Y-m-d H:i:s");
        $this->db_b->insert('accepted',$req);
    }

    public function delet($req){
        $this->db_b->where('req_id',$req['req_id'])->delete('accepted');
        $this->db_b->where('req_id',$req['req_id'])->delete('request');
    }

    public function Add($req){
        $req['req_time'] = date("Y-m-d H:i:s");
        $this->db_b->insert('request', $req);
    }

    public function Get($id){
        return $this->db_b->where('req_id', $id)->get('request')->row();
    }

    public function Edit($req){
        $this->db_b->where('req_id', $req['req_id'])->update('request', $req);
    }

    public function getaccpList(){
        return $this->db_b->where('accept_by',"Smart-Travel")->get('accepted')->result_array();
    }

    public function getserList(){
        return $this->db_b->where('source',"Smart-Travel")->get('accepted')->result_array();
    }

    public function getemerList(){
        return $this->db_b->where('is_emergency',"1")->order_by("req_id", "desc")->get('request')->result_array();
    }
}
?>