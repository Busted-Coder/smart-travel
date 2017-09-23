<div class="row">
	<div class="col-sm-12">
		<h2>User List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a href="<?php echo site_url('index.php/user/add1') ?>" class="btn btn-primary">Add New User</a>
		<a class="btn btn-primary">Total Records : <?php echo count($info); ?></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>E-Mail</th>
					<th>Phone</th>
					<th>CNIC</th>
					<th>Image</th>
					<th>Adress</th>
					<th>Tech Info</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['user_id'] ?></td>
						<td> <?php echo $p['fname']." ".$p['lname'] ?></td>
						<td> <?php echo $p['email'] ?> </td>
						<td> <?php echo $p['phone'] ?> </td>
						<td> <?php echo $p['cnic'] ?> </td>
						<td> <?php echo $p['image'] ?> </td>
						<td> <?php echo $p['address'] ?> </td>
						<td><form action="<?php echo site_url('index.php/user/tech') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="user_id" value="<?php echo $p['user_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="Press">
							</div>
						</div>
						</form></td>
						<td><form action="<?php echo site_url('index.php/user/edit') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="user_id" value="<?php echo $p['user_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Edit">
							</div>
						</div>
						</form>
						<form action="<?php echo site_url('index.php/user/del') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="user_id" value="<?php echo $p['user_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-danger" value="Delete" onClick="return doconfirm();">
							</div>
						</div>
						</form></td>
					</tr>
				<?php }?>
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