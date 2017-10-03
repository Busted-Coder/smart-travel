<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add New Request</h1>
		<form action="<?php echo site_url('index.php/request/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Requesting Company</b></div>
					<input name="source" type="text" placeholder="Source" class="form-control" value="Smart-Travel" readonly required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Picking Location/Terminal</b></div>
					<input name="from_loc" type="text" placeholder="Picking Terminal" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Droping Terminal</b></div>
					<input name="to_loc" type="text" placeholder="Drop Terminal" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="is_emergency" type="checkbox" id="is_emergency" value="1">
					<label class="label-control" for="is_emergency">Is Emergency</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Required Seats</b></div>
					<input name="seats" type="number" placeholder="# of Seats" class="form-control"
					required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Picking Time</b></div>
					<input name="time" type="datetime-local" placeholder="Pick-up Time " class="form-control" required>
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