<div class="row">
	<div class="col-sm-12">
		<h2>Role List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a href="<?php echo site_url('index.php/role/add1') ?>" class="btn btn-primary">Add New Role</a>
		<a  class="btn btn-primary">Total Records : <?php echo count($role); ?></a>

	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Type</th>
					<th>Role</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count($role) >= 1) { 
				foreach ($role as $p) {?>
					<tr>
						<td><?php echo $p['role_id'] ?></td>
						<td> <?php echo $p['type'] ?></td>
						<td> <?php echo $p['role'] ?> </td>
						<td><form action="<?php echo site_url('index.php/role/edit') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="role_id" value="<?php echo $p['role_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Edit">
							</div>
						</div>
						</form>
						<form action="<?php echo site_url('index.php/role/del') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="role_id" value="<?php echo $p['role_id'] ?>">
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