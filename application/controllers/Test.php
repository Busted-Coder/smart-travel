<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
	}

	public function test()
	{
		$subject = 'This is a test';
		$message = '<p>This message has been sent for testing purposes.</p>';

// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
<td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;" align="center"><p><span style="margin-bottom: 10px; font-size: 20px; font-weight: normal; color: #494a48; font-family: arial; line-height: 110%;">Smart Travel is the leading go-to website for booking Inter-City bus ticket online. Our booking system allows travellers to search and book bus tickets all over Pakistan. Now ypu will get the latest about Smart-Travel, Special events and Student activities delivered right to your inbox. Enjoy!</span></p>
</td></tr>
</table>
</body>
</html>';
// Also, for getting full html you may use the following internal method:
//$body = $this->email->full_html($subject, $message);

		$result = $this->email
    		->from('support@smarttravel.pk')
    		->reply_to('k132387@nu.edu.pk')    // Optional, an account where a 		human being reads.
    		->to('k132387@nu.edu.pk')
    		->subject($subject)
    		->message($body)
    		->send();

		var_dump($result);
		echo '<br />';
		echo $this->email->print_debugger();
	}
}