<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends MY_Controller {

	/**
	 * Example: DOMPDF 
	 *
	 * Documentation: 
	 * http://code.google.com/p/dompdf/wiki/Usage
	 *
	 */
	
	public function ticket() {
		//$this->load->library('pdf');
		$this->load->view('pdf/ticket');
	}
}
