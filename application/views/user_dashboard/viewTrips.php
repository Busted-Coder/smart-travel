<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
	<div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
	<div data-speed="0" data-type="html" class="rd-parallax-layer">
		<div class="bg-primary-chathams-blue-reverse">
			<div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
				<div class="veil reveal-md-block">
					<h1 class="text-bold">View Trips</h1>
				</div>
				<ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
					<li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a>
					</li>
					<li><a href="destinations.html" class="text-white">View Trips</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section> 
</header>

<main class="page-content section-90 section-md-111 text-md-left">
	<section class="offset-top-60 offset-md-top-111">
    	<div class="shell">
        <h2 class="text-bold">Booking History</h2>
            <hr class="divider hr-md-left-0 bg-chathams-blue">
        	<div class="range range-xs-center range-md-left offset-top-30 offset-md-top-65">
            	<div class="cell-xs-10 cell-lg-9">
            		<!-- Classic Responsive Table-->
            		<table data-responsive="true" class="table table-custom table-primary table-fixed">
              			<b><tr>
                			<th>#</th>
                				<th>Ticket ID</th>
								<th>Status</th>
								<th>Travelling Date</th>
								<th>Issuance Date</th>
								<th>Details</th>
								<th>Action</th>
              			</tr></b>
              			<?php $count = 0; 
              			foreach($data as $p){ 
              				$count = $count + 1;?>
              			<tr>
                			<td> <?php echo $count;?> </td>
    		            	<td> <?php echo $p['t_id']; ?></td>
							<td> <?php if($p['state'] == 1){echo "Booked, Payment Pending.";}
											elseif($p['state'] == 2){echo "Confirmed";}
											elseif($p['state'] == 3){echo "Refund";}
											elseif($p['state'] == 4){echo "Cancelled";} ?>
							</td>
							<td> <?php echo $p['trav_date']; ?> </td>
							<td> <?php echo $p['created_at']; ?> </td>
							<td> 
								<form action="<?php echo site_url('index.php/user_dashboard/ticket_preview') ?>" method="post" class="form-horizontal">
									<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
									<div class="form-group">
										<div class="col-sm-4">
											<input type="submit" class="btn btn-xs btn btn-ellipse-type-2 btn-ripe-lemon" value="Preview">
										</div>
									</div>
								</form>
								<?php if($p['state'] != 3){?>
								<form action="<?php echo site_url('index.php/user_dashboard/track_bus') ?>" method="post" target="_blank" class="form-horizontal">
									<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
									<div class="form-group">
										<div class="col-sm-4">
											<input type="submit" class="btn btn-xs btn btn-ellipse-type-2 btn-ripe-lemon" value="Track Bus">
										</div>
									</div>
								</form>
								<?php } 
								else{?>
								<form action="" method="post" class="form-horizontal">
									<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
									<div class="form-group">
										<div class="col-sm-4">
											<input type="submit" class="btn btn-xs btn btn-ellipse-type-2 btn-ripe-lemon" value="Track Bus" onClick="return error1();">
										</div>
									</div>
								</form>
								<?php }?>
							</td>
							<td>
								<?php if($p['state'] != 3){?>
								<form action="<?php echo site_url('index.php/user_dashboard/ticket_refund') ?>" method="post" class="form-horizontal">
									<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
									<div class="form-group">
										<div class="col-sm-4">
											<input type="submit" class="btn btn-xs btn btn-ellipse-type-2 btn-ripe-lemon" value="Refund" onClick="return do_confirm_refund();">
										</div>
									</div>
								</form>
								<form action="<?php echo site_url('index.php/user_dashboard/ticket_exchange') ?>" method="post" class="form-horizontal">
									<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
									<div class="form-group">
										<div class="col-sm-4">
											<input type="submit" class="btn btn-xs btn btn-ellipse-type-2 btn-ripe-lemon" value="Exchange">
										</div>
									</div>
								</form>
								<?php } 
								else{?>
								<form action="" method="post" class="form-horizontal">
									<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
									<div class="form-group">
										<div class="col-sm-4">
											<input type="submit" class="btn btn-xs btn btn-ellipse-type-2 btn-ripe-lemon" value="Refund" onClick="return error();">
										</div>
									</div>
								</form>
								<form action="" method="post" class="form-horizontal">
									<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
									<div class="form-group">
										<div class="col-sm-4">
											<input type="submit" class="btn btn-xs btn btn-ellipse-type-2 btn-ripe-lemon" value="Exchange" onClick="return error();">
										</div>
									</div>
								</form>
								<?php }?>
							</td>
    	        		</tr>
    	        		<?php } ?>
            		</table>
          		</div>
        	</div>
    	</div>
	</section>
</main>

<script>
	function do_confirm_refund(){
		job = confirm("Are you sure to refund?");
		if(!job){
			return false;
		}
		else{
			alert("Collect Your Money From Nearest Smart-Travel Terminal.\nHope to see you again.");
			return true;
		}	
	}
	function error(){
		alert("Can't Perform This Operation.\nAlready Refunded.");
		return false;
	}
	function error1(){
		alert("Feature is not Live.");
		return false;
	}
</script>