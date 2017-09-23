<div class="row">
	<div class="col-sm-12">
		<h2>My Accepted Requests</h2>
	</div>
</div>
<?php $this->load->view('views/accept_req_header.php'); ?>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Accepted By</th>
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
						<td> <?php echo $p['accept_by'] ?></td>
						<td> <?php echo $p['from_loc'] ?> </td>
						<td> <?php echo $p['to_loc'] ?> </td>
						<td> <?php echo $p['seats'] ?> </td>
						<td> <?php  if($p['is_emergency'] == 1){ echo "YES";}else{echo "NO";} ?> </td>
						<td> <?php echo $p['dep_time'] ?> </td>
						<td> <?php echo $p['req_time'] ?> </td>
						<td> <?php echo $p['accept_time'] ?> </td>
						<td></td>
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