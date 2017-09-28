<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit user Info</h1>
		<form action="<?php echo site_url('index.php/user/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="user_id" value="<?php echo $user->user_id ?>">
					<div><b>First Name</b></div>
					<input name="fname" type="text" placeholder="First Name" class="form-control" required 
					value="<?php echo $user->fname ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Last Name</b></div>
					<input name="lname" type="text" placeholder="Last Name" class="form-control"
					value="<?php echo $user->lname ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Select Gender</b></div>
					<select required name="gender" class="form-control">
						<option>Select Class</option>
						<option <?php echo $user->gender =='Male' ? 'selected':'' ?>>Male</option>
						<option <?php echo $user->gender =='Female' ? 'selected':'' ?>>Female</option>
						<option <?php echo $user->gender =='Others' ? 'selected':'' ?>>Others</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>E-mail</b></div>
					<input name="email" type="email" placeholder="E-mail " class="form-control"
					value="<?php echo $user->email ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Contact #</b></div>
					<input name="phone" type="tel" placeholder="Phone " class="form-control"
					value="<?php echo $user->phone ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Image</b></div>
					<input name="image" type="text" placeholder="Image " class="form-control"
					value="<?php echo $user->image ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Password</b></div>
					<input name="password" type="password" placeholder="Password " class="form-control"
					value="<?php echo $user->password ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>CNIC</b></div>
					<input name="cnic" type="number" placeholder="CNIC " class="form-control"
					value="<?php echo $user->cnic ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Address</b></div>
					<textarea name="address" class="form-control" required cols="40" rows="10" placeholder="Address"><?php echo $user->address ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Control Level</b></div>
					<select required name="role_id" class="form-control">
						<?php foreach ($user->avail_role as $r) {
							if($user->role_id == $r['role_id']){
							?><option> <?php  echo $r['role_id'];}?></option>
						<?php } ?>
						<?php foreach ($user->avail_role as $r) {
							if($user->role_id != $r['role_id']){
							?><option> <?php  echo $r['role_id'];}?></option>
						<?php } ?>
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