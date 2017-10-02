    <div class="page text-center">   
      <header class="page-head slider-menu-position">  
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="90px" data-lg-stick-up-offset="75px" data-auto-height="false" class="rd-navbar rd-navbar-top-panel rd-navbar-default rd-navbar-white rd-navbar-static-fullwidth-transparent" data-lg-auto-height="true" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Top Panel-->
              <div class="rd-navbar-top-panel">
                <div class="left-side">
                  <!-- Contact Info-->
                  <address class="contact-info text-left">
                    <div class="reveal-inline-block"><a href="callto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span></span><span class="unit-body"><span class="text-gray-darker">021-36502089</span></span></a></div>
                    <div class="reveal-inline-block"><a href="mailto:#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span></span><span class="unit-body"><span class="text-gray-darker">info@smarttravel.pk</span></span></a></div>
                    <div class="reveal-inline-block"><a href="#" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-map-marker"></span></span><span class="unit-body"><span class="text-gray-darker">Karachi, Pakistan</span></span></a></div>
                  </address>
                </div>
                <div class="right-side">
                  <ul class="list-inline list-inline-2">
                    <li><a href="https://www.facebook.com" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></a></li>
                    <li><a href="https://twitter.com/login?lang=en" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></a></li>
                    <li><a href="https://plus.google.com/discover" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-google-plus"></a></li>
                    <li><a href="https://www.instagram.com/?hl=en" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-instagram"></a></li>
                    <li><a href="" class="icon icon-xxs icon-silver-filled icon-circle fa fa-rss"></a></li>
                  </ul>
                </div>
              </div>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Top Panel Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel" class="rd-navbar-top-panel-toggle"><span></span></button>
                <!-- Navbar Brand-->
                <div class="rd-navbar-brand"><a href="<?php echo base_url();?>index.php/Welcome/index"><img width='105' height='57' src='<?php echo PATH; ?>images/logo-light1.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!-- Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="<?php echo base_url();?>index.php/Welcome/index"><img width='105' height='57' src='<?php echo PATH; ?>images/logo-light1.png' alt=''/></a></div>
                    <div class="form-search-wrap">
                      <!-- RD Search Form-->
                      <form action="search-results.html" method="GET" class="form-search rd-search">
                        <div class="form-group">
                          <label for="rd-navbar-form-search-widget" class="form-label form-search-label form-label-sm rd-input-label">Search</label>
                          <input id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input input-sm form-control form-control-gray-lightest input-sm"/>
                        </div>
                        <button type="submit" class="form-search-submit"><span class="fa fa-search"></span></button>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                     <ul class="rd-navbar-nav">
                      <!-- <li class="active"><a href="<?php //echo site_url('/nav/index2') ?>">Home</a></li> -->
                      <?php if($this->session->userdata('logged_in')){ ?>
                      <li><a><?php echo $this->session->userdata('username');?></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="<?php echo site_url('index.php/auth/logout') ?>">Sign Off</a></li>
                          <li><a href="<?php echo site_url('index.php/user_dashboard/viewProfile') ?>">View Profile</a></li>
                            <li><a href="<?php echo site_url('index.php/user_dashboard/changePassword') ?>">Change Password</a></li>
                            <li><a href="<?php echo site_url('index.php/user_dashboard/viewTrips') ?>">View Trips</a></li>
                        </ul>
                      </li>
                      <?php }else{ ?>
                      
                      <li><a href="<?php echo base_url();?>index.php/auth/login_loader">Login/Register</a>
                                             <!-- RD Navbar Dropdown-->
                      </li>
                      <?php } ?>
                      <li><a href="<?php echo base_url();?>index.php/nav_about/history">About</a>
                        <!-- RD Navbar Dropdown-->
       
                      </li>
                     <!-- <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="<?php echo site_url('index.php/nav_destinations/destinations') ?>">Destinations</a></li>-->
                        <!-- RD Navbar Dropdown-->
                     
                      
                      <li><a href="<?php echo site_url('index.php/nav_deals/deals') ?>">Deals</a></li>
                     
                      <li><a href="<?php echo site_url('index.php/nav_tracking/tracking') ?>">Tracking</a></li>
                   
                      <li><a href="<?php echo site_url('index.php/nav_contact/contact') ?>">Contact</a></li>
                    </ul>

                  </div>
                </div>
                <!-- RD Navbar Search-->
                <div class="rd-navbar-search rd-navbar-search-top-panel"><a data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="<?php echo site_url('index.php/nav_search/search') ?>" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-search-form-input" class="form-label rd-input-label">Type and hit enter...</label>
                      <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                    </div>
                    <div id="rd-search-results-live" class="rd-search-results-live"></div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!-- Modern Breadcrumbs-->
        