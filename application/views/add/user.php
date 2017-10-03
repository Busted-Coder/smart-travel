<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add User</h1>
		<form action="<?php echo site_url('index.php/user/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>First Name</b></div>
					<input name="fname" type="text" placeholder="First Name" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Last Name</b></div>
					<input name="lname" type="text" placeholder="Last Name" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Date of Birth</b></div>
					<input name="dob" type="date" placeholder="Birthday" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Gender</b></div>
					<select required name="class" class="form-control">
						<option>Select</option>
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>E-Mail Address</b></div>
					<input name="email" type="email" placeholder="E-mail" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Contact #</b></div>
					<input name="phone" type="tel" placeholder="Phone" class="form-control" required>
				</div>
			</div>
			<!--<div class="form-group">
				<div class="col-sm-4">
					<div><b>Upload Your Image</b></div>
					<input name="image" type="image" placeholder="Image" class="form-control" required>
				</div>
			</div>-->
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Create Password</b></div>
					<input name="password" type="password" placeholder="Password" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>National Identity #</b></div>
					<input name="cnic" type="number" placeholder="CNIC" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Mailing Address</b></div>
					<textarea name="address" class="form-control" required cols="40" rows="10" placeholder="Physical Address"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Role</b></div>
					<select required name="role_id" class="form-control">
						<option>Select</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
			</div>
		
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</div>
		</div>
		</form>
	</div>
</div>