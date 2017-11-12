<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Find Bus Ticket</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li>Find Bus Ticket
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- Page Contents-->
      <main class="page-content">
        <!-- Single Ticket-->
        <section class="section-90 section-md-60 bg-zircon text-left">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-10 cell-md-12">
                <!-- Panel-->
                <div class="panel panel-md bg-chathams-blue context-dark text-lg-left">
                  <h3><span class="small text-bold text-white">Find Bus Tickets</span></h3>
                  <form action="<?php echo site_url('index.php/Find_ticket/searchTicket') ?>" method="post" class="offset-top-10 offset-sm-top-15">
                    <div class="group group-bottom">
                      <div class="group-item element-fullwidth element-fullwidth-lg">
                        <div class="form-group text-left">
                          <label for="form-filter-location-from" class="form-label form-label-outside">Departure City</label>
                            <div class="form-group form-group-label-outside">
                              <select id="form-filter-location-from" name="source" class="form-control shadow-drop-md bg-white" required>
                                <option>Select City</option>
                                    <?php foreach ($cityarray as $value) {?>
                                        <option value=<?= $value['shortcode']?>><?php echo $value['name']?> </option> <?php } ?>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="group-item element-fullwidth element-fullwidth-lg">
                        <div class="form-group text-left">
                          <label for="form-filter-location-to" class="form-label form-label-outside">Arrival City</label>
                            <div class="select2-whitout-border shadow-drop-md">
                              <select id="form-filter-location-to" name="dest" class="form-control" required>
                                <option>Select City</option>
                                      <?php foreach ($cityarray as $value) {?>
                                          <option value=<?= $value['shortcode']?>><?php echo $value['name']?> </option> <?php } ?>
                              </select>
                            </div>
                        </div>
                      </div>
                      <?php $date = date("Y-m-d"); ?> 
                      <div class="group-item element-fullwidth element-fullwidth-xs">
                        <div class="form-group text-left">
                          <label for="form-filter-location-from-date" class="form-label form-label-outside">Departure Date</label>
                          <div class="select2-whitout-border shadow-drop-md">
                                <input id="form-filter-location-from-date" name="busdate" type="date" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date('Y-m-d', strtotime($date. ' + 13 days')); ?>" data-minimum-results-for-search="Infinity" class="form-control" style="background-color: white;" required>
                                  <!--<option value="1">7-11-2016</option>
                                  <option value="2">2-12-2016</option>
                                  <option value="3">14-11-2016</option>
                                  <option value="4">3-10-2016</option>-->
                                </input>
                              </div>
                        </div>
                      </div>
                      <?php if($this->session->userdata('logged_in')){ ?>
                      <div class="group-item element-fullwidth element-fullwidth-xs offset-lg-top-4">
                        <div class="form-group text-left">
                          <label for="passengers" class="form-label form-label-outside">Passengers</label>
                          <div class="select2-whitout-border shadow-drop-md">
                            <select id="passengers" name="passengers" data-minimum-results-for-search="Infinity" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="group-item element-fullwidth element-fullwidth-lg offset-lg-top-4">
                      </div>
                      <div class="group-item element-fullwidth element-fullwidth-lg offset-lg-top-4">
                      </div>
                      <div class="group-item element-fullwidth element-fullwidth-xs offset-lg-top-4">
                      </div>
                      <?php } ?>
                      <div class="group-item element-fullwidth element-fullwidth-xs offset-lg-top-4">
                        <input type="submit" class="btn btn-ellipse-type-2 btn btn-block btn-ripe-lemon" value="search">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>