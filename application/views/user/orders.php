<h2>User Orders</h2>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Total Items</th>
			<th>Total Price</th>
			<th>Date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($orders as $order) { ?>
			<tr>
				<td><?php echo $order['id'] ?></td>
				<td><?php echo $order['total_items'] ?></td>
				<td><?php echo $order['total_price'] ?></td>
				<td><?php echo $order['date'] ?></td>
				<th>
					<a href="<?php echo site_url('order/detail?id=').$order['id'] ?>">	detail</a>
				</th>
			</tr>
		<?php } ?>
	</tbody>
</table>