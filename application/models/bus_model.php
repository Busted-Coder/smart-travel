<?php 
class Bus_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->order_by("bus_id", "asc")->get('bus')->result_array();
    }  
    public function getbus($bus_id){
		return $this->db->where('bus_id', $bus_id)->get('bus')->row();     
    }
    public function Add($bus){
        $bus['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('bus', $bus);
    }
    public function add_t(){
        $data['position'] = "NULL";
        $this->db->insert('tracker',$data);
    }
    public function Add_c1($cam){
        $this->db->insert('camera', $cam);
    }
    public function Add_c2($cam){
        $this->db->insert('camera', $cam);
    }
    public function get_tc(){
        $d0 = $this->db->select('tracker_id')
        ->order_by('tracker_id',"desc")
        ->limit(1)
        ->get('tracker')
        ->row_array();
        $d1 = $this->db->select('cam_id')
        ->order_by('cam_id',"desc")
        ->limit(2)
        ->get('camera')
        ->row_array();

        return array('data'=>$d0,'d'=>$d1);
    }
    public function Get($id){
        return $this->db->where('bus_id', $id)->get('bus')->row();
    }
    public function Edit($bus){
        $this->db->where('bus_id', $bus['bus_id'])->update('bus', $bus);
    }
    public function delet($bus){
        $this->db->where('bus_id',$bus['bus_id'])->delete('bus');
    }
    public function getspec($id){
        $data = $this->db->where('bus_id', $id)->get('bus')->row();
        $d['bus_id'] = $data->bus_id;
        $d['regs_no'] = $data->regs_no;
        $d['seats'] = $data->seats;
        $d['class'] = $data->class;
        $d['des'] = $data->des;
        $d['created_at'] = $data->created_at;
        $d['tracker_id'] = $data->tracker_id;
        $d['cam_id'] = $data->cam_id;
        return array('info'=>$d);
    }
}
?>