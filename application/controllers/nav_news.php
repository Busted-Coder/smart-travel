<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav_news extends CI_Controller {

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

	public function classic()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('news/blog-classic');
		$this->load->view('layout/footer');
	}
	public function grid()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('news/blog-grid');
		$this->load->view('layout/footer');
	}
	public function masonry()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('news/blog-masonry');
		$this->load->view('layout/footer');
	}
	public function modern()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('news/blog-modern');
		$this->load->view('layout/footer');
	}
	public function post()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('news/single-post');
		$this->load->view('layout/footer');
	}
}
