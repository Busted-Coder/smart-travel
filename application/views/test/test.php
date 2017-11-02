<?php
$diff = $this->session->userdata('offer');
$count = count($diff);
echo $count;
foreach ($diff as $v) {
	echo $v['name'].'  '.$v['value']; 
}
?>