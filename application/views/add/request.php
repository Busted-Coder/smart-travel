<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add New Request</h1>
		<form action="<?php echo site_url('index.php/request/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Requesting Company</b></div>
					<input name="source" type="text" placeholder="Source" class="form-control" value="Smart-Travel" readonly required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Picking Location/Terminal</b></div>
					<select required id="from" name="from_loc" class="form-control">
						<option>Select</option>
						<?php foreach($data as $p){ ?>
						<option value="<?php echo $p['shortcode']; ?>"><?php echo $p['name'];?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Droping Terminal</b></div>
					<select required id="to" name="to_loc" class="form-control">
						<option>Select</option>
						<?php foreach($data as $p){ ?>
						<option value="<?php echo $p['shortcode']; ?>"><?php echo $p['name'];?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="is_emergency" type="checkbox" id="is_emergency" value="1">
					<label class="label-control" for="is_emergency">Is Emergency</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Required Seats</b></div>
					<input id="seats" name="seats" type="number" placeholder="# of Seats" class="form-control"
					required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Picking Time</b></div>
					<input name="time" type="datetime-local" placeholder="Pick-up Time " class="form-control" required>
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
<script>
function doconfirm()
{
  var number = document.getElementById("from").value;
  var number1 = document.getElementById("to").value;
  var seats = document.getElementById("seats").value;
  if( number==number1){
    alert("Please Select Diff Pick & Drop Terminal");
    return false;
  }
  else if(number=="Select"){
    alert("Select a Valid Pickup Terminal");
    return false;
  }
  else if(number1=="Select"){
    alert("Select a Valid Drop Terminal");
    return false;
  }
  else if(seats>40){
  	job = confirm("Are you ok with Required seat #?");
    if(job != true)
    {
        return false;
    }
  }
}
</script>