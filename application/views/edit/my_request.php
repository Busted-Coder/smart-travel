<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit Request</h1>
		<form action="<?php echo site_url('index.php/request/edit') ?>" method="post" class="form-horizontal">
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
					value="<?php echo $req->from_loc ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Arrival Terminal</b></div>
					<input name="to_loc" type="text" placeholder="Drop Terminal" class="form-control"
					value="<?php echo $req->to_loc ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="is_emergency" type="checkbox" id="is_special"
					<?php echo  $req->is_emergency == '1' ? 'checked' : '' ?>>
					<label class="label-control" for="is_emergency">Is Emergency</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b># of Seats</b></div>
					<input name="seats" type="number" placeholder="# of Seats" class="form-control"
					value="<?php echo $req->seats ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Departure Time</b></div>
					<input name="time" type="datetime" placeholder="Pick-up Time " class="form-control"
					value="<?php echo $req->time ?>">
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