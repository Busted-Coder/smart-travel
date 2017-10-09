<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Bus</h1>
		<form action="<?php echo site_url('index.php/bus/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Bus Registration #</b></div>
					<input name="regs_no" type="text" placeholder="Excise #" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Seating Capacity</b></div>
					<input id="seats" name="seats" type="number" placeholder="# of Seats" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Class Category</b></div>
					<select required id="class" name="class" class="form-control">
						<option>Select Class</option>
						<option>Gold Luxury</option>
						<option>Royal Luxury-I</option>
						<option>Royal Luxury-II</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>About Bus/Bus Features</b></div>
					<textarea name="des" class="form-control" required cols="40" rows="10" placeholder="Discription" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Tracker #</b></div>
					<input name="tracker_id" type="text" value="<?PHP echo $detail['data1']['tracker_id'] ?>" class="form-control" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Cam ID-1</b></div>
					<input name="cam_id" type="text" value="<?PHP 
					echo $detail['data']['cam_id']-1; ?>" class="form-control" readonly>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Cam ID-2</b></div>
					<input name="cam_id1" type="text" value="<?PHP 
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
					<input type="submit" class="btn btn-primary" value="Submit" onClick="return doconfirm();">
				</div>
			</div>
			</div>
		</form>
	</div>
</div>
<script>
function doconfirm()
{
    var number = document.getElementById("seats").value;
	var number1 = document.getElementById("class").value;
    if(number>40){
    	alert("Seat Number should be < or = 40");
    	return false;
    }
    else if(number1=="Select Class"){
    	alert("Select a Valid Class");
    	return false;
    }
}
</script>