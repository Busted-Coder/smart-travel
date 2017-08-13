<?php 
class Cam_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function getList(){
       return $this->db->order_by("cam_id", "desc")->get('camera')->result_array();
    }

    public function getspec($id){
        $data = $this->db->where('cam_id', $id)->get('camera')->row();
        $d['cam_id'] = $data->cam_id;
        $d['model'] = $data->model;
        $dat = $this->db->where('cam_id', $id+1)->get('camera')->row();
        //$info = [];
        //foreach ($data as $k) {
        $d['cam_id1'] = $dat->cam_id;
        $d['model1'] = $dat->model;

            //array_push($info, $d);
        //}
        return array('info'=> $d);
    }
}
?>