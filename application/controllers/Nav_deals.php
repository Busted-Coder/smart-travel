<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav_deals extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('deal_model','deal');
	}

	public function deals()
	{	$info = $this->deal->getList();
		//$this->load->view('layout/header');
		//$this->load->view('layout/nav');
		$this->loadView('deals/deals', array('info'=> $info),false);
		//$this->load->view('layout/footer');
	}

}
