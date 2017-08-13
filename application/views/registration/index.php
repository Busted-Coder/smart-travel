<div class="container">

	<h1>Registration</h1>
	<div class="row">
		<ul>
			<?php 
			foreach ($validation_error as $value) {?>
				<li style="color:red"><?php echo $value ?></li>
			<?php } ?>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<form method="post" action="<?php echo site_url('registration/Register') ?>" class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-4">
					<label for="firstname"><p1 style="font-family:footlight mt light">First Name:</p1></label>
						<input type="text" class="form-control" name="firstname" placeholder="First Name" />
					</div>
					<div class="col-sm-6">
					<label for="firstname"><p1 style="font-family:footlight mt light">Last Name:</p1></label>
						<input type="text" class="form-control" name="lastname" placeholder="Last Name" />
					</div>				
				</div>
				<div class="form-group">
					<div class="col-sm-12">
					<label for="address"><p1 style="font-family:footlight mt light">Address:</p1></label>
						<input type="text" class="form-control" name="address" placeholder="Address" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-3">
					<label for="city"><p1 style="font-family:footlight mt light">City:</p1></label>
						<input type="text" class="form-control" name="city" placeholder="City" />
					</div>
					<div class="col-sm-3">
					<label for="state"><p1 style="font-family:footlight mt light">State:</p1></label>
						<input type="text" class="form-control" name="state" placeholder="State/Reigon" />
					</div>
					<div class="col-sm-3">
					<label for="zip_code"><p1 style="font-family:footlight mt light">ZipCode:</p1></label>
						<input type="text" class="form-control" name="zip_code" placeholder="Zipcode" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4">
					<label for="email"><p1 style="font-family:footlight mt light">Email:</p1></label>
						<input type="text" class="form-control" name="email" placeholder="Email" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-3">
					<label for="gender"><p1 style="font-family:footlight mt light">Gender:</p1></label>	
						<select name="gender" class="form-control">
						    <option value="">Gender</option>
							<option >Male</option>
							<option >Female</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-3">
					<label for="dob"><p1 style="font-family:footlight mt light">BirthDay:</p1></label>
			    		<input name="dob" type="date" class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-3">
					<label for="password"><p1 style="font-family:footlight mt light">Password:</p1></label>
		    			<input type="password" class="form-control" name="password" placeholder="Enter Password">
					</div>
					<div class="col-sm-3">
					<label for="repassword"><p1 style="font-family:footlight mt light">Confirm Password:</p1></label>
		    			<input type="password" class="form-control" name="repassword" placeholder="Confirm your Password">
					</div>
				</div>
				<div class="form-group">
			    	<div class="col-sm-3">
			    	    <input type="submit" class="btn btn-success" value="Register" />
			    	</div>
				</div>
			</form>
		</div>
	</div>
</div>
