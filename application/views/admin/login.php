<html>
<head>
	<title> Admin Panel </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css') ?>">

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/login.js') ?>"></script>
</head>
<body>
	<div class="text-center" style="padding:50px 0">
		<div class="logo">Login</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left" method="post" action="<?php echo site_url('index.php/admin/login')?>">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Username</label>
							<input type="text" class="form-control" id="lg_username" name="username" placeholder="username">
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
						</div>
						<p class="text-danger">
							<?php echo $Error ?>
						</p>
					</div>
					<button type="submit" class="login-button"><i class="glyphicon glyphicon-play"></i></button>
				</div>

			</form>
		</div>
		<!-- end:Main Form -->
	</div>
</body>
</html>