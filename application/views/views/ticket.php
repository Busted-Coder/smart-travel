<div class="row">
	<div class="col-sm-12">
		<h2>Ticket List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a href="<?php echo site_url('index.php/ticket/add1') ?>" class="btn btn-primary">Book A Ticket</a>
		<a  class="btn btn-primary">Total Records : <?php echo count($info); ?></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Booking Status</th>
					<th>Issuance Time</th>
					<th>User ID</th>
					<th>Schedule ID</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php if (count($info) >= 1) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['t_id'] ?></td>
						<td> <?php echo $p['state'] ?></td>
						<td> <?php echo $p['created_at'] ?> </td>
						<td> <form action="<?php echo site_url('index.php/ticket/spec_u') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="trav_id" value="<?php echo $p['trav_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="<?php echo $p['trav_id'] ?>">
							</div>
						</div>
						</form></td>
						<td> <form action="<?php echo site_url('index.php/ticket/spec_s') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="schedule_id" value="<?php echo $p['schedule_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="<?php echo $p['schedule_id'] ?>">
							</div>
						</div>
						</form></td>
						<td><form action="<?php echo site_url('index.php/ticket/edit') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Edit Status">
							</div>
						</div>
						</form>
						<form action="<?php echo site_url('index.php/ticket/del') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-danger" value="Delete" onClick="return doconfirm();">
							</div>
						</div>
						</form>
						</td>
					</tr>
				    <?php } 
				}
				else { ?>
					<tr>
					
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script>
function doconfirm()
{
    job = confirm("Are you sure to Delete?");
    if(job != true)
    {
        return false;
    }
}
</script>