<div class="row">
	<div class="col-sm-12">
		<h2>Bus List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a href="<?php echo site_url('index.php/bus/add1') ?>" class="btn btn-primary">Add New Bus</a>
		<a  class="btn btn-primary">Total Records : <?php echo count($info); ?></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Excise Reg #</th>
					<th>Capacity</th>
					<th>Class</th>
					<th>Description</th>
					<th>Induction Time</th>
					<th>Tracker</th>
					<th>Camera</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php if (count($info) >= 1) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['bus_id'] ?></td>
						<td> <?php echo $p['regs_no'] ?></td>
						<td> <?php echo $p['seats'] ?> </td>
						<td> <?php echo $p['class'] ?> </td>
						<td> <?php echo $p['des'] ?> </td>
						<td> <?php echo $p['created_at'] ?> </td>
						<td> <form action="<?php echo site_url('index.php/tracker/spec') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="tracker_id" value="<?php echo $p['tracker_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="View Tracker">
							</div>
						</div>
						</form></td>
						<td> <form action="<?php echo site_url('index.php/cam/spec') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="cam_id" value="<?php echo $p['cam_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="View Cam">
							</div>
						</div>
						</form></td>
						<td><form action="<?php echo site_url('index.php/bus/edit') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="bus_id" value="<?php echo $p['bus_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Edit">
							</div>
						</div>
						</form>
						<form action="<?php echo site_url('index.php/bus/del') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="bus_id" value="<?php echo $p['bus_id'] ?>">
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
						<?php echo count($info) ?>
						<td> <?php echo $info['bus_id'] ?></td>
						<td> <?php echo $info['regs_no'] ?></td>
						<td> <?php echo $info['seats'] ?> </td>
						<td> <?php echo $info['class'] ?> </td>
						<td> <?php echo $info['des'] ?> </td>
						<td> <a href="<?php echo site_url('index.php/bus/tview?id='.$info['tracker_id']) ?>" class="btn btn-info">View</a></td>
						<td> <a href="<?php echo site_url('index.php/bus/cview?id='.$info['cam_id']) ?>" class="btn btn-info">View</a></td>
						<td><a href="<?php echo site_url('index.php/bus/edit?id='.$info['bus_id']) ?>" class="btn btn-warning">Edit</a></td>
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