<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit Request</h1>
		<form action="<?php echo site_url('index.php/request/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="req_id" value="<?php echo $req->req_id ?>">
					<input name="source" type="text" placeholder="Source" class="form-control" required 
					value="<?php echo $req->source ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="from_loc" type="text" placeholder="Picking Terminal" class="form-control"
					value="<?php echo $req->from_loc ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="to_loc" type="text" placeholder="Drop Terminal" class="form-control"
					value="<?php echo $req->to_loc ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="seats" type="number" placeholder="# of Seats" class="form-control"
					value="<?php echo $req->seats ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
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