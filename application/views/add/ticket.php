<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Ticket Booking</h1>
		<form action="<?php echo site_url('index.php/ticket/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Ticket Satus</b></div>
					<select required name="state" class="form-control">
						<option>Select</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Traveller ID</b></div>
					<select name="trav_id" class="form-control" required>
						<option>Select</option>
						<?php foreach ($data['d1'] as $k) {	?>		
						<option><?php echo $k['user_id']?></option> <?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Travelling Schedule ID</b></div>
					<select name="schedule_id" class="form-control" required>
						<option>Select</option>
						<?php foreach ($data['d0'] as $k) {	?>		
						<option><?php echo $k['schedule_id']?></option> <?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Travelling Date</b></div>
					<input name="trav_date" type="date" placeholder="Date" class="form-control" required>
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