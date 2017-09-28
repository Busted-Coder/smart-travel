<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Offer</h1>
		<form action="<?php echo site_url('index.php/offer/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input name="name" type="text" placeholder="Offer Title" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="value" type="number" placeholder="Offer Value" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="class" class="form-control">
						<option>Select Class</option>
						<option>Gold Luxury</option>
						<option>Royal Luxury-I</option>
						<option>Royal Luxury-II</option>
						<option>Gold Luxury, Royal Luxury-I</option>
						<option>Gold Luxury, Royal Luxury-II</option>
						<option>Royal Luxury-I, Royal Luxury-II</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="validity" class="form-control">
						<option>Validity Frequency</option>
						<option>Once</option>
						<option>Lifetime</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="seat" type="number" placeholder="# of Seats" class="form-control" required>
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