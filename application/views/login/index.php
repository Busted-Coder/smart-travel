
<div class="container">
	<h2>Login</h2>
	<p class="text-danger">
		<?php echo $Error ?>
	</p>
	<form action="<?php echo site_url('login') ?>" method="post" class="form-horizontal">
		<div class="form-group">
			<div class="col-sm-4">
			<label for="email"><p1 style="font-family:footlight mt light">Email Address:</p1></label>
				<input type="email" name="email" placeholder="Email Address" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-4">
			<label for="password"><p1 style="font-family:footlight mt light">Password:</p1></label>
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<input type="submit" value="Login" class="btn btn-success">
		</div>
	</form>
</div>