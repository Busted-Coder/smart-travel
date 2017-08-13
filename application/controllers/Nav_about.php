<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav_about extends CI_Controller {

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
	}

	public function history()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('about/history');
		$this->load->view('layout/footer');
	}

	public function team()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('about/team');
		$this->load->view('layout/footer');
	}

	public function testimonials()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('about/testimonials');
		$this->load->view('layout/footer');
	}

	public function faq()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('about/faq');
		$this->load->view('layout/footer');
	}

	public function press()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('about/press');
		$this->load->view('layout/footer');
	}

}
