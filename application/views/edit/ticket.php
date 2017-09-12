<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit Ticket Status</h1>
		<form action="<?php echo site_url('index.php/ticket/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="t_id" value="<?php echo $ticket->t_id ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Ticket Status</b></div>
					<select required name="state" class="form-control">
						<option>Select Status</option>
						<option <?php echo $ticket->state =='1' ? 'selected':'' ?>>1</option>
						<option <?php echo $ticket->state =='2' ? 'selected':'' ?>>2</option>
						<option <?php echo $ticket->state =='3' ? 'selected':'' ?>>3</option>
						<option <?php echo $ticket->state =='4' ? 'selected':'' ?>>4</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Traveller ID</b></div>
					<input name="trav_id" type="number" placeholder="Traveller ID" class="form-control"
					value="<?php echo $ticket->trav_id ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Schedule</b></div>
					<input name="schedule_id" type="number" placeholder="Schedule ID " class="form-control"
					value="<?php echo $ticket->schedule_id ?>" readonly>
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