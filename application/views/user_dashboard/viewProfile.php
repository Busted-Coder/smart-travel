<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
	<div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
	<div data-speed="0" data-type="html" class="rd-parallax-layer">
		<div class="bg-primary-chathams-blue-reverse">
			<div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
				<div class="veil reveal-md-block">
					<h1 class="text-bold">View/Edit Profile</h1>
				</div>
				<ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
					<li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a>
					</li>
					<li><a href="#" class="text-white">View/Edit Profile</a>
					</li>
			</div>
		</div>
	</div>
</section> 
</header>

<html>
<main class="page-content">
	<!-- Where Will You Go?-->
	<section class="section-90 section-md-111 text-left bg-zircon">
		<div class="shell">
			<div class="range range-xs-center">
			
				<div class="col-md-6">
				<form action="<?php echo base_url('index.php/user_dashboard/editProfile');?>" method="post">
                       <?php foreach($info as $a){ ?>
                        <div class="form-group form-group-label-outside">
                          <label for="fname" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>First Name</b></label>
                          <input id="fname" type="text" name="fname" data-constraints="@Required" class="form-control" value="<?php echo $a['fname']?>">
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="lname" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>Last Name</b></label>
                          <input id="lname" type="text" name="lname" data-constraints="@Required" class="form-control" value="<?php echo $a['lname']?>">
                        </div>

                         <div class="form-group form-group-label-outside">
                          <label for="phone" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>Contact #</b></label>
                          <input id="phone" type="text" name="phone" data-constraints="@Required" class="form-control" value="<?php echo $a['phone']?>">
                        </div>

                        <div class="form-group form-group-label-outside">
                          <label for="cnic" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>CNIC #</b></label>
                          <input id="cnic" type="text" name="cnic" data-constraints="@Required" class="form-control" value="<?php echo $a['cnic']?>">
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="address" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>Postal Address</b></label>
                          <input id="address" type="text" name="address" data-constraints="@Required" class="form-control" value="<?php echo $a['address']?>">
                        </div>
                        
                        <div class="form-group form-group-label-outside">
                          <label for="email" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>E-mail Address</b></label>
                          <input id="email" type="email" name="email" data-constraints="@Email @Required" class="form-control" value="<?php echo $a['email']?>">
                        </div>
                        <!--<div class="form-group form-group-label-outside">
                          <label for="image" class="form-label form-label-outside text-dark">Image</label>
                          <input type="text" class="form-control">
                        </div>-->
                                  
                        <?php } ?>
                       
                        <div class="offset-top-15 offset-sm-top-20 text-center text-md-left">
                          <button type="submit" class="btn btn-ripe-lemon">Update Profile</button>
                        </div>
                      </form>
					
				</div>
			</div> 
		</div>
	</section>
</main>
</html>