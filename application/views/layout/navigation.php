<body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      <header class="page-head slider-menu-position">        <!-- RD Navbar Transparent-->
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
                <div class="rd-navbar-brand"><a href="<?php echo base_url();?>index.php/Welcome/index"><img width='107' height='58' src='<?php echo PATH; ?>images/logo-light1.png' alt=''/></a></div>
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
                        </ul>
                      </li>
                      <?php }else{ ?>
                      
                      <li><a href="<?php echo base_url();?>index.php/auth/login_loader">Login/Register</a>
                                             <!-- RD Navbar Dropdown-->
                      </li>
                      <?php } ?>
                      <li><a href="<?php echo base_url();?>index.php/nav_about/history">About</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-navbar-dropdown">
                          <li><a href="<?php echo site_url('index.php/nav_about/history') ?>">Our History</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_about/team')?>">Our Team</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_about/testimonials') ?>">Testimonials</a></li>
                        </ul>
                      </li>
                      <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="<?php echo site_url('index.php/nav_destinations/destinations') ?>">Destinations</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-navbar-dropdown">
                          <li><a href="<?php echo site_url('index.php/nav_destinations/destinations') ?>">All Destinations</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_destinations/ticket_catalog') ?>">Ticket Catalog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_destinations/single_ticket') ?>">Single Ticket</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo site_url('index.php/nav_deals/deals') ?>">Deals</a></li>
                      <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="<?php echo site_url('index.php/nav_news/classic') ?>">News</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-navbar-dropdown">
                          <li><a href="<?php echo site_url('index.php/nav_news/classic') ?>">Classic Blog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_news/grid') ?>">Grid Blog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_news/masonry') ?>">Masonry Blog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_news/modern') ?>">Modern Blog</a></li>
                          <li><a href="<?php echo site_url('index.php/nav_news/post') ?>">Post Page</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo site_url('index.php/nav_tracking/tracking') ?>">Tracking</a></li>
                      <li class="rd-navbar--has-megamenu rd-navbar-submenu"><a href="#">Pages</a>
                        <div class="rd-navbar-megamenu">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="veil reveal-md-block">
                                <h6 class="text-bold">Gallery</h6>
                              </div>
                              <ul class="offset-md-top-20">
                                <li><a href="grid-gallery.html">Grid Gallery</a></li>
                                <li><a href="grid-without-padding-gallery.html">Grid Without Padding Gallery</a></li>
                                <li><a href="masonry-gallery.html">Masonry Gallery</a></li>
                                <li><a href="cobbles-gallery.html">Cobbles Gallery</a></li>
                              </ul>
                            </div>
                            <div class="col-md-3">
                              <div class="veil reveal-md-block">
                                <h6 class="text-bold">Elements</h6>
                              </div>
                              <ul class="offset-md-top-20">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="progress-bars.html">Progress Bars</a></li>
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="forms.html">Forms</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="grid.html">Grid</a></li>
                              </ul>
                            </div>
                            <div class="col-md-3">
                              <div class="veil reveal-md-block">
                                <h6 class="text-bold">Pages</h6>
                              </div>
                              <ul class="offset-md-top-20">
                                <li><a href="team-member-profile.html">Team Member Profile</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="timetable.html">Timetable</a></li>
                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="503.html">503 Page</a></li>
                                <li><a href="under-construction.html">Under Construction</a></li>
                                <li><a href="login-register.html">Login/Register</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="privacy.html">Terms of Use</a></li>
                                <li><a href="single-service.html">Single Service</a></li>
                              </ul>
                            </div>
                            <div class="col-md-3">
                              <div class="veil reveal-md-block">
                                <h6 class="text-bold">Layouts</h6>
                              </div>
                              <ul class="offset-md-top-20">
                                <li><a href="index-variant-2.html">Home Variant 2</a></li>
                                <li><a href="index-variant-3.html">Home Variant 3</a></li>
                                <li><a href="transparent-header.html">Transparent Header</a></li>
                                <li><a href="corporate-header.html">Corporate Header</a></li>
                                <li><a href="minimal-header.html">Minimal Header</a></li>
                                <li><a href="hamburger-menu-header.html">Hamburger Menu Header</a></li>
                                <li><a href="footer-widget-light.html">Footer Widget Light</a></li>
                                <li><a href="footer-widget-dark.html">Footer Widget Dark</a></li>
                                <li><a href="footer-center-light.html">Footer Center Light</a></li>
                                <li><a href="footer-center-dark.html">Footer Center Dark</a></li>
                                <li><a href="footer-minimal-light.html">Footer Minimal Light</a></li>
                                <li><a href="footer-minimal-dark.html">Footer Minimal Dark</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li><a href="<?php echo site_url('index.php/nav_contact/contact') ?>">Contacts</a></li>
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
