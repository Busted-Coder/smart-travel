<?php
class Offer_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->get('offer')->result_array();
    }
    public function getspec($id){
        $data = $this->db->where('o_id', $id)->get('offer')->row();
        $d['o_id'] = $data->o_id;
        $d['name'] = $data->name;
        $d['value'] = $data->value;
        $d['created_at'] = $data->created_at;
        return array('offer'=>$d);
    }
    public function Add($offer){
        $offer['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('offer', $offer);
    }
    public function Get($id){
        return $this->db->where('o_id', $id)->get('offer')->row();
    }
    public function Edit($offer){
        $this->db->where('o_id', $offer['o_id'])->update('offer', $offer);
    }
    public function delet($offer){
        $this->db->where('o_id',$offer['o_id'])->delete('offer');
    }
}
?>