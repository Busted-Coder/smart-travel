<div class="row">
	<div class="col-sm-12">
		<h2>Schedule List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a href="<?php echo site_url('index.php/schedule/add1') ?>" class="btn btn-primary">Add New Schedule</a>
		<a  class="btn btn-primary">Total Records : <?php echo count($info); ?></a>

	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Route</th>
					<th>Bus</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count($info) >= 1) { 
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['schedule_id'] ?></td>
						<td> <form action="<?php echo site_url('index.php/route/spec') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="route_id" value="<?php echo $p['route_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="View Route">
							</div>
						</div>
						</form></td>
						<td><form action="<?php echo site_url('index.php/bus/spec') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="bus_id" value="<?php echo $p['bus_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="View Bus">
							</div>
						</div>
						</form></td>
						<td><form action="<?php echo site_url('index.php/schedule/edit') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="schedule_id" value="<?php echo $p['schedule_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Edit">
							</div>
						</div>
						</form>
						<form action="<?php echo site_url('index.php/schedule/del') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="schedule_id" value="<?php echo $p['schedule_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-danger" value="Delete" onClick="return doconfirm();">
							</div>
						</div>
						</form>
					</tr>
				<?php }
				}
				else { ?>
					<tr>
						<td> <?php echo "No Data Found !!!"; ?></td>
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