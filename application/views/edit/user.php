<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit user Info</h1>
		<form action="<?php echo site_url('index.php/user/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="user_id" value="<?php echo $user->user_id ?>">
					<input name="fname" type="text" placeholder="First Name" class="form-control" required 
					value="<?php echo $user->fname ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="lname" type="text" placeholder="Last Name" class="form-control"
					value="<?php echo $user->lname ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="email" type="email" placeholder="E-mail " class="form-control"
					value="<?php echo $user->email ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="phone" type="tel" placeholder="Phone " class="form-control"
					value="<?php echo $user->phone ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="image" type="image" placeholder="Image " class="form-control"
					value="<?php echo $user->image ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="password" type="password" placeholder="Password " class="form-control"
					value="<?php echo $user->password ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input name="cnic" type="number" placeholder="CNIC " class="form-control"
					value="<?php echo $user->cnic ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<textarea name="address" class="form-control" required cols="40" rows="10" placeholder="Address"><?php echo $user->address ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<select required name="role_id" class="form-control">
						<option>Select Role</option>
						<option <?php echo $user->role_id =='1' ? 'selected':'' ?>>1</option>
						<option <?php echo $user->role_id =='2' ? 'selected':'' ?>>2</option>
						<option <?php echo $user->role_id =='3' ? 'selected':'' ?>>3</option>
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