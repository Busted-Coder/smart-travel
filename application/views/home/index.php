<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <head>
<?php
//include '../header.php';
    $this->load->view('layout/header.php');
?>

  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      <header class="page-head slider-menu-position">

<?php

    $this->load->view('layout/navigation.php');
    ?>
        <!-- Swiper-->
        <div data-height="" data-min-height="200px" data-slide-effect="fade" data-simulate-touch="false" class="swiper-container swiper-slider context-dark text-lg-left">
          <div class="swiper-wrapper">
            <div data-slide-bg="<?php echo PATH; ?>images/backgrounds/background-02-1920x950.jpg" class="swiper-slide">
              <div class="swiper-slide-caption-wrap">
                <div class="swiper-slide-caption">
                  <div class="shell">
                    <div class="range range-xs-center range-lg-left section-sm-50 section-md-0">
                      <div class="cell-xs-10 cell-lg-7 cell-xl-6">
                        <h1 data-caption-animate="fadeInDown" data-caption-delay="200" class="text-bold">Comfort & Style <br class="veil reveal-lg-inline-block"> Over Every Mile</h1>
                        <div data-caption-animate="fadeInUp" data-caption-delay="600" class="offset-top-20 offset-lg-top-49">
                          <p class="h6 text-mercury">BusExpress is the leading go-to website for booking inter-city bus <br class="veil reveal-lg-inline-block"> online.</p>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="800" class="offset-top-20"><a href="deals.html" class="btn btn-default btn-skew">Learn More</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-slide-bg="<?php echo PATH; ?>images/backgrounds/background-03-1920x950.jpg" class="swiper-slide">
              <div class="swiper-slide-caption-wrap">
                <div class="swiper-slide-caption">
                  <div class="shell">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-xs-10 cell-lg-9 cell-xl-7">
                        <h1 data-caption-animate="fadeInDown" data-caption-delay="200" class="text-bold">Providing quality service at unbeatable rates.</h1>
                        <div data-caption-animate="fadeInUp" data-caption-delay="600" class="offset-top-20 offset-lg-top-49">
                          <p class="h6 text-mercury">We provide affordable and reliable bus ticket booking services online <br class="veil reveal-lg-inline-block"> all over the world.</p>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="800" class="offset-top-20"><a href="deals.html" class="btn btn-default btn-skew">Learn More</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-center-caption">
            <div class="shell">
              <div class="range range-xs-center">
                <div class="cell-sm-10 cell-md-12">
                  <!-- Panel-->
                  <div class="panel panel-lg bg-overlay-chathams-blue text-lg-left">
                    <h3><span class="small text-bold text-white">Find Bus Tickets</span></h3>
                    <form class="range range-md-bottom offset-top-20">
                      <div class="cell-md-9 cell-lg-10">
                        <div class="group group-top">
                          <div class="group-item element-fullwidth">
                            <div class="form-group text-left">
                              <label for="form-filter-location-from" class="form-label form-label-outside">Traveling From</label>
                              <div class="select2-whitout-border shadow-drop-md">
                                <select id="form-filter-location-from" name="location-from" data-minimum-results-for-search="Infinity" class="form-control">
                                  <option value="1">New York</option>
                                  <option value="2">Lisbon</option>
                                  <option value="3">Melbourne</option>
                                  <option value="4">Berlin</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="group-item element-fullwidth">
                            <div class="form-group text-left">
                              <label for="form-filter-location-to" class="form-label form-label-outside">Traveling To</label>
                              <div class="select2-whitout-border shadow-drop-md">
                                <select id="form-filter-location-to" name="location-to" data-minimum-results-for-search="Infinity" class="form-control">
                                  <option value="1">Chicago</option>
                                  <option value="2">San Francisco</option>
                                  <option value="3">London</option>
                                  <option value="4">Los Angeles</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="group-item element-fullwidth">
                            <div class="form-group text-left">
                              <label for="form-filter-location-from-date" class="form-label form-label-outside">Depart Date</label>
                              <div class="select2-whitout-border shadow-drop-md">
                                <select id="form-filter-location-from-date" name="date-from" data-minimum-results-for-search="Infinity" class="form-control">
                                  <option value="1">7-11-2016</option>
                                  <option value="2">2-12-2016</option>
                                  <option value="3">14-11-2016</option>
                                  <option value="4">3-10-2016</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="group-item element-fullwidth">
                            <div class="form-group text-left">
                              <label for="form-filter-location-to-date" class="form-label form-label-outside">Ticket Type</label>
                              <div class="select2-whitout-border shadow-drop-md">
                                <select id="form-filter-location-to-date" name="date-to" data-minimum-results-for-search="Infinity" class="form-control">
                                  <option value="1">One Way</option>
                                  <option value="2">Round Trip</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="cell-md-3 cell-lg-2">
                        <div class="reveal-block reveal-md-inline-block">
                          <button type="button" style="max-width: 147px; min-width: 147px; min-height: 50px;" class="shadow-drop-md btn btn-ripe-lemon element-fullwidth">search</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination"></div>
          <!-- Swiper Navigation-->
          <div class="swiper-button-prev"><span class="icon icon-xs fa fa-chevron-left"></span></div>
          <div class="swiper-button-next"><span class="icon icon-xs fa fa-chevron-right"></span></div>
        </div>
      </header>
      <!-- Page Contents-->
      <main class="page-content">
        <!-- Our Advantages-->
        <section class="section-90 section-md-111">
          <div class="shell">
            <h2 class="text-bold">Our Advantages</h2>
            <hr class="divider bg-chathams-blue">
            <div class="range range-xs-center offset-top-69">
                      <div class="cell-xs-6 cell-sm-5 cell-md-3">
                        <!-- Box Icon-->
                        <div class="box-icon"><span class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi mdi-wifi"></span>
                          <div class="offset-top-30">
                            <h5 class="text-bold">Free Wi-Fi</h5>
                          </div>
                          <div class="offset-top-10">
                            <p class="text-gray">All buses are equipped with Wi-Fi  and sockets</p>
                          </div>
                        </div>
                      </div>
                      <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-xs-top-0">
                        <!-- Box Icon-->
                        <div class="box-icon"><span class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi mdi-taxi"></span>
                          <div class="offset-top-30">
                            <h5 class="text-bold">Shuttle to the Bus</h5>
                          </div>
                          <div class="offset-top-10">
                            <p class="text-gray">Free taxi to the bus</p>
                          </div>
                        </div>
                      </div>
                      <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-md-top-0">
                        <!-- Box Icon-->
                        <div class="box-icon"><span class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi mdi-seat-recline-extra"></span>
                          <div class="offset-top-30">
                            <h5 class="text-bold">Comfortable Seats</h5>
                          </div>
                          <div class="offset-top-10">
                            <p class="text-gray">You can spen hours without any discomfort in our seats</p>
                          </div>
                        </div>
                      </div>
                      <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-60 offset-md-top-0">
                        <!-- Box Icon-->
                        <div class="box-icon"><span class="icon icon-xlg icon-circle icon-outlined icon-chathams-primary-filled mdi mdi-cash-multiple"></span>
                          <div class="offset-top-30">
                            <h5 class="text-bold">Different ways of buying tickets</h5>
                          </div>
                          <div class="offset-top-10">
                            <p class="text-gray">Cash, Visa, MasterCard, etc</p>
                          </div>
                        </div>
                      </div>
            </div>
          </div>
        </section>
        <!-- Popular Bus Tickets-->
        <section class="section-90 section-md-111 bg-zircon">
          <div class="shell">
            <h2 class="text-bold">Popular Bus Tickets</h2>
            <hr class="divider bg-chathams-blue">
            <div class="range range-xs-center offset-top-60">
              <div class="cell-xs-10 cell-sm-6 cell-md-4">
                <!-- Post Ticket--><a href="single-ticket.html" class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/post-01-370x280.jpg" width="370" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"><path d="m 0.01190457,18.011904 0,-17.99999966 70.00000343,0 69.999992,0 0,5.50000006 c 0,4.157048 -0.35675,5.4999996 -1.46104,5.4999996 -2.34992,0 -5.53896,4.138795 -5.53896,7.188561 0,3.025049 3.05738,6.811439 5.5,6.811439 1.15152,0 1.5,1.277778 1.5,5.5 l 0,5.5 -69.999992,0 -70.00000343,0 0,-18 z"/></svg>
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>16.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li class="h5 text-bold text-primary">Boston</li>
                        <li class="h5 text-bold text-primary">New York</li>
                      </ul>
                    </div>
                    <div class="offset-top-10">
                      <div class="post-meta text-gray">5 hours 10 minutes</div>
                    </div>
                  </div></a>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0">
                <!-- Post Ticket--><a href="single-ticket.html" class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/post-02-370x280.jpg" width="370" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"><path d="m 0.01190457,18.011904 0,-17.99999966 70.00000343,0 69.999992,0 0,5.50000006 c 0,4.157048 -0.35675,5.4999996 -1.46104,5.4999996 -2.34992,0 -5.53896,4.138795 -5.53896,7.188561 0,3.025049 3.05738,6.811439 5.5,6.811439 1.15152,0 1.5,1.277778 1.5,5.5 l 0,5.5 -69.999992,0 -70.00000343,0 0,-18 z"/></svg>
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>19.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li class="h5 text-bold text-primary">Washington, D.C.</li>
                        <li class="h5 text-bold text-primary">Boston</li>
                      </ul>
                    </div>
                    <div class="offset-top-10">
                      <div class="post-meta text-gray">8 hours 45 minutes</div>
                    </div>
                  </div></a>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0">
                <!-- Post Ticket--><a href="single-ticket.html" class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/post-03-370x280.jpg" width="370" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"><path d="m 0.01190457,18.011904 0,-17.99999966 70.00000343,0 69.999992,0 0,5.50000006 c 0,4.157048 -0.35675,5.4999996 -1.46104,5.4999996 -2.34992,0 -5.53896,4.138795 -5.53896,7.188561 0,3.025049 3.05738,6.811439 5.5,6.811439 1.15152,0 1.5,1.277778 1.5,5.5 l 0,5.5 -69.999992,0 -70.00000343,0 0,-18 z"/></svg>
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>15.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li class="h5 text-bold text-primary">Sacramento</li>
                        <li class="h5 text-bold text-primary">San Diego</li>
                      </ul>
                    </div>
                    <div class="offset-top-10">
                      <div class="post-meta text-gray">6 hours 21 minutes</div>
                    </div>
                  </div></a>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30">
                <!-- Post Ticket--><a href="single-ticket.html" class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/post-04-370x280.jpg" width="370" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"><path d="m 0.01190457,18.011904 0,-17.99999966 70.00000343,0 69.999992,0 0,5.50000006 c 0,4.157048 -0.35675,5.4999996 -1.46104,5.4999996 -2.34992,0 -5.53896,4.138795 -5.53896,7.188561 0,3.025049 3.05738,6.811439 5.5,6.811439 1.15152,0 1.5,1.277778 1.5,5.5 l 0,5.5 -69.999992,0 -70.00000343,0 0,-18 z"/></svg>
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>42.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li class="h5 text-bold text-primary">Colorado Springs</li>
                        <li class="h5 text-bold text-primary">Huntington Beach</li>
                      </ul>
                    </div>
                    <div class="offset-top-10">
                      <div class="post-meta text-gray">8 hours 45 minutes</div>
                    </div>
                  </div></a>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30">
                <!-- Post Ticket--><a href="single-ticket.html" class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/post-05-370x280.jpg" width="370" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"><path d="m 0.01190457,18.011904 0,-17.99999966 70.00000343,0 69.999992,0 0,5.50000006 c 0,4.157048 -0.35675,5.4999996 -1.46104,5.4999996 -2.34992,0 -5.53896,4.138795 -5.53896,7.188561 0,3.025049 3.05738,6.811439 5.5,6.811439 1.15152,0 1.5,1.277778 1.5,5.5 l 0,5.5 -69.999992,0 -70.00000343,0 0,-18 z"/></svg>
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>19.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li class="h5 text-bold text-primary">Sacramento</li>
                        <li class="h5 text-bold text-primary">San Francisco</li>
                      </ul>
                    </div>
                    <div class="offset-top-10">
                      <div class="post-meta text-gray">5 hours 45 minutes</div>
                    </div>
                  </div></a>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4 offset-top-30">
                <!-- Post Ticket--><a href="single-ticket.html" class="post-ticket">
                  <div class="post-ticket-header"><img src="<?php echo PATH; ?>images/blog/post-06-370x280.jpg" width="370" height="280" alt="" class="img-responsive"/>
                    <div class="post-ticket-price-svg-wrap">
                      <div class="post-ticket-price-svg"><svg viewBox="0 0 140 36"><path d="m 0.01190457,18.011904 0,-17.99999966 70.00000343,0 69.999992,0 0,5.50000006 c 0,4.157048 -0.35675,5.4999996 -1.46104,5.4999996 -2.34992,0 -5.53896,4.138795 -5.53896,7.188561 0,3.025049 3.05738,6.811439 5.5,6.811439 1.15152,0 1.5,1.277778 1.5,5.5 l 0,5.5 -69.999992,0 -70.00000343,0 0,-18 z"/></svg>
                        <div class="post-ticket-price text-bold text-shark"><span>$</span><span>15.00</span><span>/pers.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-ticket-body text-left">
                    <!-- List Inline-->
                    <div>
                      <ul class="group-xs list list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-primary">
                        <li class="h5 text-bold text-primary">New York</li>
                        <li class="h5 text-bold text-primary">Chicago</li>
                      </ul>
                    </div>
                    <div class="offset-top-10">
                      <div class="post-meta text-gray">8 hours 45 minutes</div>
                    </div>
                  </div></a>
              </div>
            </div>
            <div class="offset-top-60"><a href="destinations.html" class="btn btn-default">View All Destinations</a></div>
          </div>
        </section>
        <!-- Special Service: Bus Rental with Driver-->
        <section>
          <!-- RD Parallax-->
          <div data-on="false" data-md-on="true" class="bg-gray-base context-dark rd-parallax">
            <div data-speed="0.15" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-04-1920x950.jpg" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
              <div class="shell section-90 section-md-162">
                <h2 class="text-bold text-white">Special Service: Bus Rental with Driver</h2>
                <div class="offset-top-30"><a href="deals.html" class="btn btn-primary">Book Now</a></div>
              </div>
            </div>
          </div>
        </section>
        <!-- Partners-->
        <section class="section-top-90 section-bottom-90 section-md-top-111">
          <div class="shell owl-dots-60">
            <div class="range range-xs-center">
              <div class="cell-xs-8 cell-sm-12">
                <div class="owl-items-middle">
                  <!-- Partners-->
                  <div data-items="2" data-xs-items="2" data-sm-items="3" data-md-items="6" data-nav="false" data-dots="true" data-stage-padding="5" data-sm-stage-padding="20" data-margin="10" data-sm-margin="75" class="owl-carousel owl-carousel-classic"><a href="#"><img src="<?php echo PATH; ?>images/products/product-01-132x88.png" width="132" height="88" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-02-112x83.png" width="112" height="83" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-03-132x75.png" width="132" height="75" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-04-107x85.png" width="107" height="85" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-05-132x74.png" width="132" height="74" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-06-128x77.png" width="128" height="77" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-01-132x88.png" width="132" height="88" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-02-112x83.png" width="112" height="83" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-03-132x75.png" width="132" height="75" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-04-107x85.png" width="107" height="85" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-05-132x74.png" width="132" height="74" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-06-128x77.png" width="128" height="77" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-01-132x88.png" width="132" height="88" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-02-112x83.png" width="112" height="83" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-03-132x75.png" width="132" height="75" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-04-107x85.png" width="107" height="85" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="<?php echo PATH; ?>images/products/product-05-132x74.png" width="132" height="74" alt="" class="img-responsive img-semi-transparent center-block"/></a><a href="#"><img src="i<?php echo PATH; ?>mages/products/product-06-128x77.png" width="128" height="77" alt="" class="img-responsive img-semi-transparent center-block"/></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Latest News-->
        <section class="section-90 section-md-111 bg-zircon">
          <div class="shell">
            <h2 class="text-bold">Latest News</h2>
            <hr class="divider bg-chathams-blue">
            <div class="range range-xs-center offset-top-60">
              <div class="cell-xs-10 cell-sm-6">
                <!-- Post Boxed-->
                <div class="reveal-block">
                  <div class="post post-boxed">
                    <!-- Post media-->
                    <header class="post-media"><img width="570" height="310" src="<?php echo PATH; ?>images/blog/post-07-570x310.jpg" alt="" class="img-responsive"/></header>
                    <!-- Post content-->
                    <section class="post-content text-left">
                      <div class="post-tags group-sm"><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">Travel</span></a><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">USA</span></a>
                      </div>
                      <div class="post-body">
                        <!-- Post Title-->
                        <div class="post-title">
                          <div class="h4 text-bold text-white"><a href="single-post.html">5 Reasons to Take the Bus in the USA</a></div>
                        </div>
                        <div class="post-meta">
                          <ul class="list-inline list-inline-sm p">
                            <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                              <time datetime="2016-01-01" class="text-middle inset-left-6 text-ripe-lemon">2 days ago</time>
                            </li>
                            <li class="text-middle">by&nbsp;<span class="inset-left-3 text-ripe-lemon">Michael Ford</span></li>
                          </ul>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30 offset-sm-top-0">
                <!-- Post Boxed-->
                <div class="reveal-block">
                  <div class="post post-boxed">
                    <!-- Post media-->
                    <header class="post-media"><img width="570" height="310" src="<?php echo PATH; ?>images/blog/post-08-570x310.jpg" alt="" class="img-responsive"/></header>
                    <!-- Post content-->
                    <section class="post-content text-left">
                      <div class="post-tags group-sm"><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">Travel</span></a><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">USA</span></a>
                      </div>
                      <div class="post-body">
                        <!-- Post Title-->
                        <div class="post-title">
                          <div class="h4 text-bold text-white"><a href="single-post.html">Bus Booking in the USA – 7 Things You Need to Know Before Booking Your Ticket</a></div>
                        </div>
                        <div class="post-meta">
                          <ul class="list-inline list-inline-sm p">
                            <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                              <time datetime="2016-01-01" class="text-middle inset-left-6 text-ripe-lemon">2 days ago</time>
                            </li>
                            <li class="text-middle">by&nbsp;<span class="inset-left-3 text-ripe-lemon">Joyce Contreras</span></li>
                          </ul>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30">
                <!-- Post Boxed-->
                <div class="reveal-block">
                  <div class="post post-boxed">
                    <!-- Post media-->
                    <header class="post-media"><img width="570" height="310" src="<?php echo PATH; ?>images/blog/post-09-570x310.jpg" alt="" class="img-responsive"/></header>
                    <!-- Post content-->
                    <section class="post-content text-left">
                      <div class="post-tags group-sm"><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">Travel</span></a><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">USA</span></a>
                      </div>
                      <div class="post-body">
                        <!-- Post Title-->
                        <div class="post-title">
                          <div class="h4 text-bold text-white"><a href="single-post.html">How To Take Long Bus Trips Like a Pro</a></div>
                        </div>
                        <div class="post-meta">
                          <ul class="list-inline list-inline-sm p">
                            <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                              <time datetime="2016-01-01" class="text-middle inset-left-6 text-ripe-lemon">2 days ago</time>
                            </li>
                            <li class="text-middle">by&nbsp;<span class="inset-left-3 text-ripe-lemon">Michael Ford</span></li>
                          </ul>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-6 offset-top-30">
                <!-- Post Boxed-->
                <div class="reveal-block">
                  <div class="post post-boxed">
                    <!-- Post media-->
                    <header class="post-media"><img width="570" height="310" src="<?php echo PATH; ?>images/blog/post-10-570x310.jpg" alt="" class="img-responsive"/></header>
                    <!-- Post content-->
                    <section class="post-content text-left">
                      <div class="post-tags group-sm"><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">Travel</span></a><a href="#"><span class="label-custom label-lg-custom label-ripe-lemon">USA</span></a>
                      </div>
                      <div class="post-body">
                        <!-- Post Title-->
                        <div class="post-title">
                          <div class="h4 text-bold text-white"><a href="single-post.html">Wi-Fi on Buses: How Often Does It Work In the United States ?</a></div>
                        </div>
                        <div class="post-meta">
                          <ul class="list-inline list-inline-sm p">
                            <li><span class="text-middle icon-xxs mdi mdi-calendar"></span>
                              <time datetime="2016-01-01" class="text-middle inset-left-6 text-ripe-lemon">2 days ago</time>
                            </li>
                            <li class="text-middle">by&nbsp;<span class="inset-left-3 text-ripe-lemon">Laura Wallace</span></li>
                          </ul>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-60"><a href="blog-classic.html" class="btn btn-default">View All News</a></div>
          </div>
        </section>
        <!-- Take Part in the Discount Campaign-->
        <section class="section-57 section-bg-animation context-dark">
          <div class="shell">
            <div class="range range-xs-center range-xs-middle">
              <div class="cell-md-10 cell-lg-8 text-center text-md-right">
                <h2 class="text-bold">Take Part in the Discount Campaign</h2>
              </div>
              <div class="cell-lg-3 offset-top-30 offset-lg-top-0 text-lg-left"><a href="single-tour.html" class="btn btn-ripe-lemon">Get Started</a></div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <!-- Footer Default-->
      <?php
      $this->load->view('layout/main_footer.php');
      ?>