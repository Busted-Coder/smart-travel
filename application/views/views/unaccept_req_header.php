<div class="row">
	<div class="col-sm-12">
	<a href="<?php echo site_url('index.php/request/mydata_accp') ?>" class="btn btn-primary">My Accepted Requests</a>
	<a href="<?php echo site_url('index.php/request/accp_req') ?>" class="btn btn-primary">My Service History</a>
	<a href="<?php echo site_url('index.php/request/lists') ?>" class="btn btn-primary">View All Requests</a>
	<a href="<?php echo site_url('index.php/request/add') ?>" class="btn btn-primary">Push New Request</a>
	<a class="btn btn-primary">Total Records : <?php echo count($info); ?></a>
	<a href="<?php echo site_url('index.php/request/emer') ?>" class="btn btn-danger">Emergency Pick-up</a>
	</div>
</div>