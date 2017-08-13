<h2>Users</h2>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Email</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user) { ?>
			<tr>
				<td><?php echo $user['id'] ?></td>
				<td><?php echo $user['firstname'] ?></td>
				<td><?php echo $user['lastname'] ?></td>
				<td><?php echo $user['address'] ?></td>
				<td><?php echo $user['email'] ?></td>
				<td>
					<a href="<?php echo site_url('user/orders?id=').$user['id'] ?>"
						class="btn btn-sm btn-primary">
					Orders
					</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>