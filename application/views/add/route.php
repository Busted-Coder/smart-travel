<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Route</h1>
		<form action="<?php echo site_url('index.php/route/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Departure Terminal</b></div>
					<select required id="from" name="source" class="form-control">
						<option>Select</option>
						<?php foreach($data as $p){ ?>
						<option value="<?php echo $p['shortcode']; ?>"><?php echo $p['name'];?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Arrival Terminal</b></div>
					<select required id="to" name="destination" class="form-control">
						<option>Select</option>
						<?php foreach($data as $p){ ?>
						<option value="<?php echo $p['shortcode']; ?>"><?php echo $p['name'];?></option>
						<?php } ?>
					</select>
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
						<option value=0>Same Day</option>
						<option value=1>Next Day</option>
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
  var number = document.getElementById("from").value;
  var number1 = document.getElementById("to").value;
  if( number==number1){
    alert("Please Select Diff Departure & Arrival Terminal");
    return false;
  }
  else if(number=="Select"){
    alert("Select a Valid Departure Terminal");
    return false;
  }
  else if(number1=="Select"){
    alert("Select a Valid Arrival Terminal");
    return false;
  }
}
</script>