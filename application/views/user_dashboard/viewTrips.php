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

<html>
<head>
	<style>
		table {
    		border-collapse: collapse;
    		width: 100%;
    		margin-left: 50px;
		}

		th, td {
    		padding: 8px;
    		text-align: center;
    		border-bottom: 1px solid #ddd;
		}

		tr:hover{background-color:#f5f5f5}
	</style>
</head>
<main class="page-content">
	<!-- Where Will You Go?-->
	<section class="section-90 section-md-111 text-left bg-zircon">
		<div class="shell">
			<div class="range range-xs-center">
				<div class="col-md-12">
					<div class="col-sm-12">
						<!--<?php $title = "<u> ".$this->session->userdata('res_num')."</u>";?>-->
						<h2 style = "color : #3256a4; text-align: center">Booking History</h2><br>
					</div>
					<table  style="background-color: transparent; border-radius: 6px; margin-top: 10px;">
						<thead>
							<b>
								<tr>
									<th>Ticket ID</th>
									<th>Status</th>
									<th>Schedule ID</th>
									<th>Travelling Date</th>
									<th>Seat #</th>
									<th>Issuance Date</th>
									<th>Action</th>
								</tr>
							</b>
						</thead>
						<tbody>
							<?php foreach($data as $p){ ?>
							<tr>
								<td> <?php echo $p['t_id']; ?></td>
								<td> <?php if($p['state'] == 1){echo "Booked, Payment Pending.";}
											elseif($p['state'] == 2){echo "Confirmed";}
											elseif($p['state'] == 3){echo "Refund";}
											elseif($p['state'] == 4){echo "Cancelled";} ?>
								</td>
								<td> <?php echo $p['schedule_id']; ?> </td>
								<td> <?php echo $p['trav_date']; ?> </td>
								<td> <?php echo $p['seatno']; ?> </td>
								<td> <?php echo $p['created_at']; ?> </td>
								<td> 
									<form action="<?php echo site_url('index.php/user_dashboard/ticket_preview') ?>" method="post" class="form-horizontal">
										<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
										<div class="form-group">
											<div class="col-sm-4">
												<input type="submit" style="text-align: right;" class="btn btn-xs btn-ripe-lemon" value="Preview Ticket">
											</div>
										</div>
									</form>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div> 
		</div>
	</section>
</main>
</html>