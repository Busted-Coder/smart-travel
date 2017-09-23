<div class="row">
	<div class="col-sm-12">
		<h2>My Out-Source Service</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<a class="btn btn-primary">Total Records : <?php echo count($info); ?></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Source</th>
					<th>From Where</th>
					<th>To Where</th>
					<th># of Seats</th>
					<th>Emergency Status</th>
					<th>Departure Time</th>
					<th>Request Time</th>
					<th>Acceptance Time</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php if (count($info) >= 1) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['req_id'] ?></td>
						<td> <?php echo $p['source'] ?></td>
						<td> <?php echo $p['from_loc'] ?> </td>
						<td> <?php echo $p['to_loc'] ?> </td>
						<td> <?php echo $p['seats'] ?> </td>
						<td> <?php  if($p['is_emergency'] == 1){ echo "YES";}else{echo "NO";} ?> </td>
						<td> <?php echo $p['dep_time'] ?> </td>
						<td> <?php echo $p['req_time'] ?> </td>
						<td> <?php echo $p['accept_time'] ?> </td>
						<!-- <td> <form action="<?php echo site_url('index.php/request/edit') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="req_id" value="<?php echo $p['req_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Edit Request">
							</div>
						</div>
						</form> <form action="<?php echo site_url('index.php/request/del') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="req_id" value="<?php echo $p['req_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-danger" value="Delete Request" onClick="return doconfirm();">
							</div>
						</div>
						</form></td> -->
					</tr>
				    <?php } 
				}
				else { ?>
					<tr>
						<?php echo count($info) ?>
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