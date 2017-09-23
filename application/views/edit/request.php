<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Accept Request</h1>
		<form action="<?php echo site_url('index.php/request/accept') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="req_id" value="<?php echo $req->req_id ?>">
					<div><b>Requesting Company</b></div>
					<input name="source" type="text" placeholder="Source" class="form-control" required 
					value="<?php echo $req->source ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Departure Terminal</b></div>
					<input name="from_loc" type="text" placeholder="Picking Terminal" class="form-control"
					value="<?php echo $req->from_loc ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Arrival Terminal</b></div>
					<input name="to_loc" type="text" placeholder="Drop Terminal" class="form-control"
					value="<?php echo $req->to_loc ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b># of Seats</b></div>
					<select name="seats" class="form-control" required>
						<option>Select # of Seats</option>
						<?php for ($counter = 0; $counter <= $req->seats; $counter++) {	?>		
						<option><?php echo $counter ?></option> <?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="is_emergency" type="number" placeholder="Is Emergency " class="form-control"
					value="<?php echo $req->is_emergency ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Departure Time</b></div>
					<input name="dep_time" type="datetime" placeholder="Pick-up Time " class="form-control"
					value="<?php echo $req->time ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Request Time</b></div>
					<input name="req_time" type="datetime" placeholder="Request Time " class="form-control"
					value="<?php echo $req->req_time ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Submit">
				</div>
			</div>
		</form>
	</div>
</div>