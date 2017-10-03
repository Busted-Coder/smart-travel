<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Bus Pre-Req(Tracker)</h1>
		<form action="<?php echo site_url('bus/tracker') ?>" method="get" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Tracker ID</b></div>
					<select name="tracker_id" class="form-control" required>
						<option>Select</option>
						<?php foreach ($data['d0'] as $k) {	?>		
						<option><?php echo $k['tracker_id']?></option> <?php } ?>
					</select>
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