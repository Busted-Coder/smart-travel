<div class="row">
	<div class="col-sm-12">
		<h2>Out-Source Request List</h2>
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
					<th>Request Source</th>
					<th>From Where</th>
					<th>To Where</th>
					<th># of Seats</th>
					<th>Departure Time</th>
					<th>Request Time</th>
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
						<td> <?php echo $p['time'] ?> </td>
						<td> <?php echo $p['req_time'] ?> </td>
						<td> <?php if($p['source'] == "Smart-Travel"){?> <form  method="get" class="form-horizontal">
						<input type="hidden" name="req_id" value="<?php echo $p['req_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="Just Can't">
							</div>
						</div>
						</form><?php }
						else {?>
						<form action="<?php echo site_url('index.php/request/accept') ?>" method="get" class="form-horizontal">
						<input type="hidden" name="req_id" value="<?php echo $p['req_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Accept Request">
							</div>
						</div>
						</form>
						<?php }
						?>
						</td>
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