<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit Schedule Info</h1>
		<form action="<?php echo site_url('index.php/schedule/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="schedule_id" value="<?php echo $schedule['s']['d2']['schedule_id'] ?>">
					<div><b>Route</b></div>
					<select name="route_id" class="form-control" required>
						<option><?php echo $schedule['s']['d2']['route_id'] ?></option>
						<?php foreach ($schedule['data']['d0'] as $k) {	?>		
						<?php if($schedule['s']['d2']['route_id'] != $k['route_id']){ ?>
							<option>
								<?php echo $k['route_id']; } ?>					
							</option> <?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Bus</b></div>
					<select name="bus_id" class="form-control" required>
						<option><?php echo $schedule['s']['d2']['bus_id'] ?></option>
						<?php foreach ($schedule['data']['d1'] as $k) {	?>		
						<option><?php echo $k['bus_id']?></option> <?php } ?>
					</select>
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