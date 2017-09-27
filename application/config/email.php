<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	$config['protocol'] = 'sendmail';
	$config['mailpath'] = '/usr/sbin/sendmail';
	$config['charset'] = 'iso-8859-1';
	$config['wordwrap'] = TRUE;
	$config['smtp_port'] = 25;
	$config['priority'] = 2;
	$config['validate'] = TRUE;
	$config['smtp_crypto'] = 'ssl';
	$config['smtp_timeout'] = 10;
?>