<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit Route Info</h1>
		<form action="<?php echo site_url('index.php/route/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="route_id" value="<?php echo $route->route_id ?>">
					<input name="source" type="text" placeholder="Source" class="form-control" required 
					value="<?php echo $route->source ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="destination" type="text" placeholder="Destination " class="form-control"
					value="<?php echo $route->destination ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="day" class="form-control">
						<option>Select Day</option>
						<option <?php echo $route->day =='0' ? 'selected':'' ?>>0</option>
						<option <?php echo $route->day =='1' ? 'selected':'' ?>>1</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<textarea name="stops" class="form-control" required cols="40" rows="10" placeholder="Description"><?php echo $route->stops ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="departure" type="time" placeholder="Departure Time " class="form-control"
					value="<?php echo $route->departure ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="arrival" type="time" placeholder="Arrival Time " class="form-control"
					value="<?php echo $route->arrival ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="day" class="form-control">
						<option>Select Day</option>
						<option <?php echo $route->day =='0' ? 'selected':'' ?>>0</option>
						<option <?php echo $route->day =='1' ? 'selected':'' ?>>1</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="fare" type="number" placeholder="Fare " class="form-control"
					value="<?php echo $route->fare ?>">
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