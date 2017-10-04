<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Schedules</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li><a class="text-white">Ticket</a></li>
                  <li>Schedule
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>

<html lang="en" class="wide wow-animation smoothscroll scrollTo">
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    margin-left: 10px;
    margin-right: 10px;  
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>
</head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      <!-- Page Contents-->
      <main class="page-content">
        <br>
        <div id="availablebuses">
          <?php if ($available_buses) { ?>
          <div align="center" style="margin-top: 150px;padding-bottom: 50px;"> <h2 style="color: #3256a4"><?php echo count($available_buses); ?> Available Buses</h2><br>
            <div class="col-md-12">
              <table class="table  table-hover" style="background-color: white; border-radius: 6px; margin-top: 10px;">
                <thead>
                  <th style="font-size:18px;"> Source </th>
                  <th style="font-size:18px;"> Destination</th>
                  <!--<th style="font-size:18px;"> Date </th>-->
                  <th style="font-size:18px;"> Stops</th>
                  <th style="font-size:18px;"> Departure</th>
                  <th style="font-size:18px;"> Arrival </th>
                  <th style="font-size:18px;"> Arrival Day</th>
                  <th style="font-size:18px;"> Fare </th>
                  <th style="font-size:18px;"> Action</th>
                </thead>
                <tbody>
                  <?php foreach($available_buses as $ab){ ?>
                  <tr>
                    
                    <td style="font-weight:100;"><?= $ab['source'] ?></td>
                    <td style="font-weight:100;"><?= $ab['destination']?></td>
                    <!--<td style="font-weight:100;"><?= date('Y-m-d', strtotime($ab['bus_time']))?></td>-->
                    <td style="font-weight:100;"><?= $ab['stops']?></td>
                    <td style="font-weight:100;"><?= $ab['departure']?></td>
                    <td style="font-weight:100;"><?= $ab['arrival']?></td>
                    <td style="font-weight:100;"><?php if($ab['day'] == 1){ echo "Next Day";}else{echo "Same Day";} ?></td>
                    <td style="font-weight:100;"><?= $ab['fare']?></td>
                    <?php echo "<td><a class=\"btn btn-xs btn-ripe-lemon\" href=\"bookTicket?id=".$ab['schedule_id']."\">Select</a></td>"?>
                  </tr>
                  <?php } ?>

                </tbody>
              </table> 

            </div>            
          </div>
          <?php } else{ ?>
          <td><?php echo "NO data found";?></td><?php } ?>
        </div>

      </main>
    </div>
  </body>
  <br><br><br><br>
</html>