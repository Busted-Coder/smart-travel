<html>
<head>
	<title>Smart Travel - Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css') ?>">
	<link rel="icon" href="<?php echo PATH; ?>images/favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/login.js') ?>"></script>
</head>
<body>
	<div class="text-center" style="padding:50px 0">
		<div class="logo">Admin Login</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left" method="post" action="<?php echo site_url('index.php/admin/login')?>">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Username</label>
							<input type="text" class="form-control" id="lg_username" name="username" placeholder="username" required>
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="lg_password" name="password" placeholder="password" required>
						</div>
						<?php if($Error != "NULL"){?>
						<p class="text-danger">
							<?php echo $Error ?>
						</p>
						<?php }?>
					</div>
					<button type="submit" class="login-button"><i class="glyphicon glyphicon-log-in"></i></button>
				</div>

			</form>
		</div>
		<!-- end:Main Form -->
	</div>
</body>
</html>