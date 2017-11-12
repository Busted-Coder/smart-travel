<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
	}

	public function subs()
	{
		$subject = 'Newsletter Subscription';

// Get full html:
		$body = '<!DOCTYPE html>
<html>

<body>
<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb">
<tbody>
<tr>
<td style="align: center"><img src="<?php echo PATH; ?>/images/backgrounds/background-02-1920x950.jpg" height="300" width="100%"></td>
</tr>
</tbody>
</table>
<table style="padding-left:25%; padding-right:25%; border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="">
<tr>
<td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;" align="center"><p><span style="margin-bottom: 10px; font-size: 20px; font-weight: normal; color: #494a48; font-family: arial; line-height: 110%;">Smart Travel is the leading go-to website for booking Inter-City bus ticket online. Our booking system allows travellers to search and book bus tickets all over Pakistan.<br> Now you will get the latest about Smart-Travel Special events and Student activities delivered right to your inbox.<br><br>Team Smart-Travel</span></p>
</td></tr>
</table>
</body>
</html>';
// Also, for getting full html you may use the following internal method:
//$body = $this->email->full_html($subject, $message);
		$result = $this->email
    		->from('support@smarttravel.pk')
    		->reply_to('k132387@nu.edu.pk')    // Optional, an account where a 		human being reads.
    		->to($this->input->post('email'))
    		->subject($subject)
    		->message($body);
    		if($this->email->send()){
    			redirect('index.php/Welcome/index');
         	}
         	else
         		redirect('');
	}
}