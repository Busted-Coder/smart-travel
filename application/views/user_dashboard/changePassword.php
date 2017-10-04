<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
	<div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
	<div data-speed="0" data-type="html" class="rd-parallax-layer">
		<div class="bg-primary-chathams-blue-reverse">
			<div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
				<div class="veil reveal-md-block">
					<h1 class="text-bold">Change Password</h1>
				</div>
				<ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
					<li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a>
					</li>
					<li><a href="#" class="text-white">Change Password</a>
					</li>
				</ul>
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
					<form action="<?php echo base_url('index.php/user_dashboard/changePassword');?>" method="post">      
            

                        <div class="form-group form-group-label-outside">
                          <label for="password" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>Current Password</b></label>
                          <input id="password" type="password" name="password" placeholder="Enter Your Current Password" data-constraints="@Required" class="form-control">
                        </div>
            

                        <div class="form-group form-group-label-outside">
                          <label for="newPassword" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>New Password</b></label>
                          <input id="newPassword" type="password" name="newPassword" placeholder="Enter New Password" data-constraints="@Required" class="form-control">
                        </div>

                         <div class="form-group form-group-label-outside">
                          <label for="r_password" class="form-label form-label-outside text-dark" style="color: #3256a4"><b>Repeat new Password</b></label>
                          <input id="r_password" type="password" name="r_password" placeholder="Repeat New Password" data-constraints="@Required" class="form-control">
                        </div>

                        <p style="color: red"><?php if($Error != NULL){echo $Error;}?></p>
                        <div class="offset-top-15 offset-sm-top-20 text-center text-md-left">
                          <input type="submit" class="btn btn-md btn-ripe-lemon" value="Change Password">
                        </div>
            

                	</form>	
				</div>
			</div> 
		</div>
	</section>
</main>
</html>