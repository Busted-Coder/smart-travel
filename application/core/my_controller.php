<?php 
class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function OnlyAdmin()
    {
    	$role = $_SESSION['Role'];
    	if($role != 'Admin')
    		redirect('index.php/admin/login', 'refresh');

    }

    public function loadView($name, $data = null, $isAdmin = false){
        if($isAdmin){
            $this->load->view('layout/admin/header'); 
            if(!is_null($data))
                $this->load->view($name, $data);
            else
                $this->load->view($name);

            $this->load->view('layout/admin/footer');            

        }else{
    		$this->load->view('layout/header');
            $this->load->view('layout/nav');
    		if(!is_null($data))
    			$this->load->view($name, $data);
    		else
    			$this->load->view($name);

    		$this->load->view('layout/footer');
        }
	}
}
 ?>