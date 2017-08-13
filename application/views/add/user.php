<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add User</h1>
		<form action="<?php echo site_url('index.php/user/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input name="fname" type="text" placeholder="First Name" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="lname" type="text" placeholder="Last Name" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="email" type="email" placeholder="E-mail" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="phone" type="tel" placeholder="Phone" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="image" type="image" placeholder="Image" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="password" type="password" placeholder="Password" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="cnic" type="number" placeholder="CNIC" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="address" type="text" placeholder="Address" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="role_id" class="form-control">
						<option>Select Role</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
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