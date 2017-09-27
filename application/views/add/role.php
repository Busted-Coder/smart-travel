<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Role</h1>
		<form action="<?php echo site_url('index.php/role/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input name="type" type="text" placeholder="Role Title" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="role" class="form-control">
						<option>Select Role</option>
						<option>FULL CRUD</option>
						<option>INTER CRUD</option>
						<option>RU</option>
						<option>R</option>
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