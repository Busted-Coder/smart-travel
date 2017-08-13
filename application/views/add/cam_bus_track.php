<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Bus</h1>
		<form action="<?php echo site_url('index.php/bus/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input name="regs_no" type="text" placeholder="Excise #" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="seats" type="number" placeholder="Seating Capacity" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="class" class="form-control">
						<option>Select Class</option>
						<option>Gold Luxury</option>
						<option>Royal Luxury-I</option>
						<option>Royal Luxury-II</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="des" type="text" placeholder="Description" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="tracker_id" type="text" value="<?PHP 
					echo $detail['data1']['tracker_id']; ?>" class="form-control" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="cam_id" type="text" value="<?PHP 
					echo $detail['data']['cam_id']; ?>" class="form-control" readonly>
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