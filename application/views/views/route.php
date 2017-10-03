<div class="row">
	<div class="col-sm-12">
		<h2>Route List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a href="<?php echo site_url('index.php/route/add1') ?>" class="btn btn-primary">Add New Route</a>
		<a  class="btn btn-primary">Total Records : <?php echo count($info); ?></a>

	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Source</th>
					<th>Destination</th>
					<th>Stops</th>
					<th>Departure</th>
					<th>Arrival</th>
					<th>Arrival Day</th>
					<th>Distance</th>
					<th>Fare</th>
					<th>Creation Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count($info)>0) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['route_id'] ?></td>
						<td> <?php echo $p['source'] ?></td>
						<td> <?php echo $p['destination'] ?> </td>
						<td> <?php echo $p['stops'] ?> </td>
						<td> <?php echo $p['departure'] ?> </td>
						<td> <?php echo $p['arrival'] ?> </td>
						<td> <?php  if($p['day'] == 1){ echo "Next Day";}else{echo "Same Day";} ?> </td>
						<td> <?php echo $p['km'] ?> </td>
						<td> <?php echo $p['fare'] ?> </td>
						<td> <?php echo $p['created_at'] ?> </td>
						<td><form action="<?php echo site_url('index.php/route/edit') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="route_id" value="<?php echo $p['route_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Edit">
							</div>
						</div>
						</form>
						<form action="<?php echo site_url('index.php/route/del') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="route_id" value="<?php echo $p['route_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-danger" value="Delete" onClick="return doconfirm();">
							</div>
						</div>
						</form></td>
					</tr>
				<?php } 
				}
				else if (count($info) <= 1) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo "No Data Found !!!"; ?></td>
					</tr>
				<?php }
				} ?>
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