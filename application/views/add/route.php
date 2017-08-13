<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Route</h1>
		<form action="<?php echo site_url('index.php/route/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input name="source" type="text" placeholder="Source" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="destination" type="text" placeholder="Destination" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="stops" type="text" placeholder="Stops with , delimeter" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="departure" type="time" placeholder="Departure Time" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="arrival" type="time" placeholder="Arrival Time" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="day" class="form-control">
						<option>Select Day</option>
						<option>0</option>
						<option>1</option>
					</select>
				</div>
			</div>			
			<div class="form-group">
				<div class="col-sm-4">
					<input name="fare" type="number" placeholder="Fare" class="form-control" required>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</div>
		</div>
		</form>
	</div>
</div>