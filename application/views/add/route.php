<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Route</h1>
		<form action="<?php echo site_url('index.php/route/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Departure Terminal</b></div>
					<input name="source" type="text" placeholder="Source" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Arrival Terminal</b></div>
					<input name="destination" type="text" placeholder="Destination" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Stops Name</b></div>
					<textarea name="stops" class="form-control" required cols="40" rows="10" placeholder="Stops with , delimeter" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Departure Time</b></div>
					<input name="departure" type="time" placeholder="Departure Time" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Arrival Time</b></div>
					<input name="arrival" type="time" placeholder="Arrival Time" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Arrival Day</b></div>
					<select required name="day" class="form-control">
						<option>Select</option>
						<option>0</option>
						<option>1</option>
					</select>
				</div>
			</div>			
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Fare In PKR.</b></div>
					<input name="fare" type="number" placeholder="Amount" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Distance In KM</b></div>
					<input name="km" type="number" placeholder="Distance" class="form-control" required>
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