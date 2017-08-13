<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit Bus Info</h1>
		<form action="<?php echo site_url('index.php/bus/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="bus_id" value="<?php echo $bus->bus_id ?>">
					<input name="regs_no" type="text" placeholder="Excise #" class="form-control" required 
					value="<?php echo $bus->regs_no ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="seats" type="number" placeholder="Seating Capacity " class="form-control"
					value="<?php echo $bus->seats ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="class" class="form-control">
						<option>Select Class</option>
						<option <?php echo $bus->class =='Gold Luxury' ? 'selected':'' ?>>Gold Luxury</option>
						<option <?php echo $bus->class =='Royal Luxury-I' ? 'selected':'' ?>>Royal Luxury-I</option>
						<option <?php echo $bus->class =='Royal Luxury-II' ? 'selected':'' ?>>Royal Luxury-II</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<textarea name="des" class="form-control" required cols="40" rows="10" placeholder="Description"><?php echo $bus->des ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="tracker_id" type="number" placeholder="Tracker ID " class="form-control"
					value="<?php echo $bus->tracker_id ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="cam_id" type="number" placeholder="Cam ID " class="form-control"
					value="<?php echo $bus->cam_id ?>">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</div>
		</form>
	</div>
</div>