<div class="row">
	<div class="col-sm-12">
		<h2>Offer List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a href="<?php echo site_url('index.php/offer/add') ?>" class="btn btn-primary">Add New Offer</a>
		<a  class="btn btn-primary">Total Records : <?php echo count($info); ?></a>

	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Discount %</th>
					<th>Class Validity</th>
					<th>Time Validity</th>
					<th># of Seats Required</th>
					<th>Discription</th>
					<th>Creation Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count($info) >= 1) { 
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['o_id'] ?></td>
						<td> <?php echo $p['name'] ?></td>
						<td> <?php echo $p['value'] ?> </td>
						<td> <?php echo $p['class'] ?></td>
						<td> <?php echo $p['validity'] ?></td>
						<td> <?php echo $p['seat'] ?></td>
						<td> <?php echo $p['disc'] ?></td>
						<td> <?php echo $p['created_at'] ?> </td>
						<td><form action="<?php echo site_url('index.php/offer/edit') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="o_id" value="<?php echo $p['o_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Edit">
							</div>
						</div>
						</form>
						<form action="<?php echo site_url('index.php/offer/del') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="o_id" value="<?php echo $p['o_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-danger" value="Delete" onClick="return doconfirm();">
							</div>
						</div>
						</form></td>
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