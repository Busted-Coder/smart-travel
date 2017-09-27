<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit Role Info</h1>
		<form action="<?php echo site_url('index.php/role/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="role_id" value="<?php echo $role->role_id ?>">
					<div><b>Role Title</b></div>
					<input name="type" type="text" placeholder="Role Title" class="form-control" required
					value="<?php echo $role->type ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Control Level</b></div>
					<select required name="role" class="form-control">
						<option>Select Role</option>
						<option <?php echo $role->role =='FULL CRUD' ? 'selected':'' ?>>FULL CRUD</option>
						<option <?php echo $role->role =='INTER CRUD' ? 'selected':'' ?>>INTER CRUD</option>
						<option <?php echo $role->role =='RU' ? 'selected':'' ?>>RU</option>
						<option <?php echo $role->role =='R' ? 'selected':'' ?>>R</option>
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