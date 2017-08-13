<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Ticket Booking</h1>
		<form action="<?php echo site_url('index.php/ticket/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="state" class="form-control">
						<option>Select Status</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select name="trav_id" class="form-control" required>
						<option>Select Traveller ID</option>
						<?php foreach ($data['d1'] as $k) {	?>		
						<option><?php echo $k['user_id']?></option> <?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select name="schedule_id" class="form-control" required>
						<option>Select Schedule ID</option>
						<?php foreach ($data['d0'] as $k) {	?>		
						<option><?php echo $k['schedule_id']?></option> <?php } ?>
					</select>
				</div>
			</div>
			<!--<div class="form-group">
				<div class="col-sm-4">
					<input type="text" value="<?PHP echo $detail['d']['cam_id'] ?>" class="form-control" readonly>
				</div>
			</div> -->
		
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</div>
			</div>
		</form>
	</div>
</div>