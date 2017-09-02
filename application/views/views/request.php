<div class="row">
	<div class="col-sm-12">
		<h2>Request List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
	<a href="<?php echo site_url('index.php/request/mydata') ?>" class="btn btn-primary">My Requests</a>
		<a href="<?php echo site_url('index.php/request/add') ?>" class="btn btn-primary">Push New Request</a>
		<!-- <a  class="btn btn-primary">Total Records : <?php echo count($info); ?></a> -->
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Request Source</th>
					<th>From Where</th>
					<th>To Where</th>
					<th># of Seats</th>
					<th>Time of Request</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>
</div>