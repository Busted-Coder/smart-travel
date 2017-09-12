<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</head>
<body>
	<div class='container'>
	<nav class="navbar navbar-default">
	  <div class="container1">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo site_url('index.php/ticket/lists') ?>">Smart-Travel</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="<?php echo site_url('index.php/bus/lists') ?>">Bus</a></li>
	        <li><a href="<?php echo site_url('index.php/cam/lists') ?>">Camera</a></li>
	        <li><a href="<?php echo site_url('index.php/role/lists') ?>">Role</a></li>
	        <li><a href="<?php echo site_url('index.php/route/lists') ?>">Route</a></li>
	        <li><a href="<?php echo site_url('index.php/ticket/lists') ?>">Ticket</a></li>
	        <li><a href="<?php echo site_url('index.php/tracker/lists') ?>">Tracker</a></li>
	        <li><a href="<?php echo site_url('index.php/user/lists') ?>">User</a></li>
	        <li><a href="<?php echo site_url('index.php/schedule/lists') ?>">Schedule</a></li>
	        <li><a href="<?php echo site_url('index.php/report/lists') ?>">Reporting</a></li>
	        <li><a href="<?php echo site_url('index.php/request/lists') ?>">Out Sourcing</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, Admin <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo site_url('index.php/admin/logout') ?>">Sign Off</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	