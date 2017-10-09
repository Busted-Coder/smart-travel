 <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Destinations</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li><a href="destinations.html" class="text-white">Booking</a></li>
                  <li>Reservations
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
    		<h2 style = "color : #3256a4">Reservation(s) on <u style="color: red"><?php echo $this->session->userdata('res_num'); ?></u></h2>
            <hr class="divider hr-md-left-0 bg-chathams-blue">
        	<div class="range range-xs-center range-md-left offset-top-30 offset-md-top-65">
            	<div class="cell-xs-10 cell-lg-9">
            		<!-- Classic Responsive Table-->
            		<table data-responsive="true" class="table table-custom table-primary table-fixed">
              			<b><tr>
                			<th>#</th>
                			<th>Ticket ID</th>
							<th>Status</th>
							<th>Schedule ID</th>
							<th>Travelling Date</th>
							<th>Seat #</th>
							<th>Issuance Date</th>
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
            		    	<td> <?php echo $p['schedule_id']; ?> </td>
							<td> <?php echo $p['trav_date']; ?> </td>
							<td> <?php echo $p['seatno']; ?> </td>
							<td> <?php echo $p['created_at']; ?> </td>
							<td> 
								<form action="<?php echo site_url('index.php/user_dashboard/ticket_preview') ?>" method="post" class="form-horizontal">
									<input type="hidden" name="t_id" value="<?php echo $p['t_id'] ?>">
									<div class="form-group">
										<div class="col-sm-4">
											<input type="submit" class="btn btn-xs btn-ripe-lemon" value="Preview">
										</div>
									</div>
								</form>
							</td>
    	        		</tr>
    	        		<?php } ?>
            		</table>
          		</div>
        	</div>
    	</div>
	</section>
</main>
