<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Tracking</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li>Tracking
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- Page Contents-->
      <main class="page-content">
        <!-- Tracking-->
        <section class="section-90 section-md-111 text-left">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-10 cell-md-6">
                <!-- Panel xs-->
                <div class="panel panel-xs context-dark bg-chathams-blue text-left">
                  <div>
                    <h5 class="text-bold"><span class="big"><span class="big"><span class="big">Search by Reservation Number</span></span></span></h5>
                  </div>
                  <div class="offset-top-10">
                    <p>Enter the Reservation Number (found on your ticket) and press Search.</p>
                  </div>
                  <!-- Form-->
                  <form action="<?php echo site_url('index.php/user_dashboard/track_by_res') ?>" method="post" class="offset-top-25">
                    <div class="group-item element-fullwidth offset-top-6 offset-md-top-0 offset-lg-top-6">
                      <div class="form-group form-group-label-outside text-left">
                        <label for="tracking-schedule-number" class="form-label form-label-outside text-dark">Reservation Number</label>
                        <input id="tracking-schedule-number" type="text" name="res-num" style="color:#393a3c;" class="form-control shadow-drop-md bg-white">
                      </div>
                    </div>
                    <div class="group-item element-fullwidth">
                      <!--<div class="form-group text-left">
                        <label for="tracking-date" class="form-label form-label-outside">Date</label>
                        <div class="select2-whitout-border shadow-drop-md">
                          <select id="tracking-date" name="tracking-date" data-minimum-results-for-search="Infinity" class="form-control">
                            <option value="1">7-11-2016</option>
                            <option value="2">2-12-2016</option>
                            <option value="3">14-11-2016</option>
                            <option value="4">3-10-2016</option>
                          </select>
                        </div>
                      </div>-->
                    </div>
                    <div class="group-item reveal-sm-inline-block text-center text-sm-left">
                      <input type="submit" style="max-width: 140px; min-width: 140px; min-height: 50px;" class="shadow-drop-md btn btn-ripe-lemon" value="search" onClick="return doconfirm();">
                    </div>
                  </form>
                </div>
              </div>
              <div class="cell-sm-10 cell-md-6 offset-top-30 offset-md-top-0">
                <!-- Panel xs-->
                <div class="panel panel-xs context-dark bg-chathams-blue text-left">
                  <div>
                    <h5 class="text-bold"><span class="big"><span class="big"><span class="big">Search by Departure City or Arrival City</span></span></span></h5>
                  </div>
                  <div class="offset-top-10">
                    <p>Enter the Location into the box below.</p>
                  </div>
                  <!-- Form-->
                  <form action="<?php echo site_url('index.php/user_dashboard/track_by_city') ?>" method="post" class="offset-top-25">
                    <div class="group-item element-fullwidth offset-top-6 offset-md-top-0 offset-lg-top-6">
                      <div class="form-group form-group-label-outside text-left">
                        <label for="tracking-city" class="form-label form-label-outside text-dark">City</label>
                        <!--<input id="tracking-city" type="text" name="tracking-city" style="color:#393a3c;" class="form-control shadow-drop-md bg-white">-->
                        <select id="tracking-city" type="text" name="tracking-city" style="color:#393a3c;" class="form-control shadow-drop-md bg-white" required>
                          <option>Select City</option>
                          <?php foreach ($cityarray as $value) {?>
                          <option value=<?= $value['shortcode']?>><?php echo $value['name']?> </option> <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="group-item element-fullwidth">
                      <div class="form-group text-left">
                        <label for="tracking-type" class="form-label form-label-outside">Type of City</label>
                        <div class="select2-whitout-border shadow-drop-md">
                          <select id="tracking-type" name="tracking-type" data-minimum-results-for-search="Infinity" class="form-control">
                            <option value="1">Departure City</option>
                            <option value="2">Arrival City</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="group-item reveal-sm-inline-block text-center text-sm-left">
                      <input type="submit" style="max-width: 140px; min-width: 140px; min-height: 50px;" class="shadow-drop-md btn btn-ripe-lemon" onClick="return doconfirm1();" value="search">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <script>
        function doconfirm(){
          var num = document.getElementById("tracking-schedule-number").value;
          if(/^[a-zA-Z0-9]*$/.test(num) == false){
          alert("Reservation has Special characters, avoid them.");
          document.getElementById("tracking-schedule-number").focus();
          return false;
          }
          else if(num == ""){
          alert("Enter reservation number.");
          document.getElementById("tracking-schedule-number").focus();
          return false; 
          }
          else if(num.length > 6 || num.length < 6){
          alert("Reservation number should be of 6 characters.");
          document.getElementById("tracking-schedule-number").focus();
          return false; 
          }
        }
        function doconfirm1(){
          var num = document.getElementById("tracking-city").value;
          if(num == "Select City"){
          alert("Please Select Valid City.");
          document.getElementById("tracking-city").focus();
          return false;
          }
        }
      </script>