 <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Destinations</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="index.html" class="text-white">Home</a></li>
                  <li><a href="destinations.html" class="text-white">Booking</a></li>
                  <li>Final Check
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    margin-left: 150px;
    margin-right: 150px;  
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>
</head>
<div class="row">
	<br><br><br><br>
	<div class="col-sm-12">
		<h2  style="color: #3256a4">Traveller Info</h2><br>
	</div>
</div>
<div class="row">
	<div class="col-sm-9">
		<table>
			<thead>
				<b><tr>
					<th>Registration ID</th>
					<th>Name</th>
					<th>CNIC</th>
					<th>Gender</th>
				</tr></b>
			</thead>
			<tbody>
					<tr>
						<td> <?php echo $this->session->userdata('user_id'); ?></td>
						<td> <?php echo $this->session->userdata('username'); ?></td>
						<td> <?php echo $this->session->userdata('cnic'); ?> </td>
						<td> <?php echo $this->session->userdata('gender'); ?> </td>
					</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<br><br><br><br>
	<div class="col-sm-12">
		<h2  style="color: #3256a4">Travelling Info</h2><br>
	</div>
</div>
<div class="row">
	<div class="col-sm-9">
		<table>
			<thead>
				<b><tr>
					<th>Source</th>
					<th>Destination</th>
					<th>Departure</th>
					<th>Arrival</th>
				</tr></b>
			</thead>
			<tbody>
				<tr>
					<td> <?php echo $this->session->userdata('source'); ?></td>
					<td> <?php echo $this->session->userdata('destination'); ?></td>
					<td> <?php echo $this->session->userdata('busdate').' - '.$this->session->userdata('departure'); ?> </td>
					<td> <?php echo $this->session->userdata('arrival').' - '; 
							   if($this->session->userdata('day') == 1){ echo "Next Day";}
							   else{echo "Same Day";}; ?> 
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<br><br><br><br>
	<div class="col-sm-12">
		<h2  style="color: #3256a4">Technical Info</h2><br>
	</div>
</div>
<div class="row">
	<div class="col-sm-9">
		<table>
			<thead>
				<b><tr>
					<th>Distance</th>
					<th>Fare</th>
					<th>Seat #</th>
					<th>Action</th>
				</tr></b>
			</thead>
			<tbody>
				<tr>
					<td> <?php echo $this->session->userdata('km'); ?></td>
					<td> <?php echo $this->session->userdata('fare'); ?></td>
					<td> <?php echo $this->session->userdata('seatno'); ?> </td>
					<td> <form action="<?php echo site_url('index.php/ticket/book') ?>" method="post" 		 class="form-horizontal">
						 	  <div class="form-group">
								<div class="col-sm-4">
									<input type="submit" style="text-align: center;" class="btn btn-xs btn-ripe-lemon" value="Book">
								</div>
						 	  </div>
						 </form> 
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</html><br><br><br><br>