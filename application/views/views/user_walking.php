<div class="row">
	<div class="col-sm-12">
		<h2>Walking Customer</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
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
					<th>Gender</th>
					<th>E-Mail</th>
					<th>Phone</th>
					<th>CNIC</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count($info) >= 1) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['p_id'] ?></td>
						<td> <?php echo $p['fname']." ".$p['lname'] ?></td>
						<td> <?php echo $p['gender'] ?> </td>
						<td> <?php echo $p['email'] ?> </td>
						<td> <?php echo $p['phone'] ?> </td>
						<td> <?php echo $p['cnic'] ?> </td>
					</tr>
				<?php }
				} 
				else {?>
					<tr>
						<td> <?php echo "No Data Found !!!"; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>