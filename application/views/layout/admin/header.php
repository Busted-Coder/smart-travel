<html>
<head>
	<title>Smart Travel - Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="icon" href="<?php echo PATH; ?>images/favicon.ico" type="image/x-icon">
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

	      <a class="navbar-brand"><img width='40' height='25' src='<?php echo PATH; ?>images/logo-dark1.png' alt=''/></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li class="dropdown" style="padding-top:8px;">
	      		<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Bus &nbsp; <span class="caret"></span></button>
	      		<ul class="dropdown-menu">
	      			<li><a href="<?php echo site_url('index.php/bus/lists') ?>">Bus</a></li>
	      			<li role="separator" class="divider"></li>
	      			<li class="dropdown-header" style=" color: blue;">Components</li>
	        		<li><a href="<?php echo site_url('index.php/cam/lists') ?>">Camera</a></li>	
	        		<li><a href="<?php echo site_url('index.php/tracker/lists') ?>">Tracker</a></li>	
	      		</ul>
	      	</li>
	      	<li class="dropdown" style="padding-top:8px; padding-left:4px">
	      		<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Scheduling &nbsp; <span class="caret"></span></button>
	      		<ul class="dropdown-menu">
	      			<li class="dropdown-header" style=" color: blue;">Proposed</li>
	      			<li><a href="<?php echo site_url('index.php/route/lists') ?>">Route</a></li>
	      			<li><a href="<?php echo site_url('index.php/schedule/lists') ?>">Schedule</a></li>
	      			<li role="separator" class="divider"></li>
	      			<li class="dropdown-header" style=" color: blue;">Confirm</li>
	      		</ul>
	      	</li>
	      	<li class="dropdown" style="padding-top:8px; padding-left:4px">
	      		<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">User & Tickets &nbsp; <span class="caret"></span></button>
	      		<ul class="dropdown-menu">
	      			<li class="dropdown-header" style=" color: blue;">About User</li>
	      			<li><a href="<?php echo site_url('index.php/role/lists') ?>">Role</a></li>
	      			<li><a href="<?php echo site_url('index.php/user/lists') ?>">User</a></li>
	      			<li role="separator" class="divider"></li>
	      			<li class="dropdown-header" style=" color: blue;">About Ticket</li>
	      			<li><a href="<?php echo site_url('index.php/ticket/lists') ?>">Ticket</a></li>
	      			<li><a href="<?php echo site_url('index.php/offer/lists') ?>">Offers &nbsp;/&nbsp; Deals</a></li>

	      		</ul>
	      	</li>
	        <li class="dropdown" style="padding-top:8px; padding-left:4px">
	      		<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Reporting &nbsp; <span class="caret"></span></button>
	      		<ul class="dropdown-menu">
	      			<li><a href="<?php echo site_url('index.php/report/lists') ?>">Reporting</a></li>
	      		</ul>
	      	</li><li class="dropdown" style="padding-top:8px; padding-left:4px">
	      		<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Out Sourcing &nbsp; <span class="caret"></span></button>
	      		<ul class="dropdown-menu">
	      			<li class="dropdown-header" style=" color: blue;">Schedule</li>
	      			<li><a href="<?php echo site_url('index.php/request/lists') ?>">Requests</a></li>
	      			<li><a href="<?php echo site_url('index.php/request/mydata_accp') ?>">My Accepted Requests</a></li>
	      			<li><a href="<?php echo site_url('index.php/request/mydata') ?>">My Un-Accepted Requests</a></li>
	      			<li role="separator" class="divider"></li>
	      			<li class="dropdown-header" style=" color: red;">Emergency Pick-up</li>
	      			<li><a href="<?php echo site_url('index.php/request/emer') ?>">Requests</a></li>
	      			<li role="separator" class="divider"></li>
	      			<li class="dropdown-header" style=" color: blue;">Requests</li>
	      			<li><a href="<?php echo site_url('index.php/request/add') ?>">Push New Request</a></li>
	      			<li><a href="<?php echo site_url('index.php/request/accp_req') ?>" >My Service History</a></li>
	      		</ul>
	      	</li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown" style="padding-top:8px;">
	          <button href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, Admin &nbsp;<span class="caret"></span></button>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo site_url('index.php/admin/logout') ?>">Sign Off</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	