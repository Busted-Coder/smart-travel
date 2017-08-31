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
      <div style="background-color: #403c3c">
      <header class="page-head slider-menu-position">

<?php

    $this->load->view('layout/navigation.php');
    ?>
        <!-- Swiper-->
      
      </header>
      <!-- Page Contents-->
      <main class="page-content">
    
      <br>

      <div id="availablebuses">
      <?php if ($available_buses) { ?>

      <div align="center" style="margin-top: 150px;padding-bottom: 50px;"> <h2 style="color: white"><?= count($available_buses); ?> Available Buses</h2>
      <div class="col-md-12">

      

      

      <div class="col-md-12">
      <table class="table  table-hover" style="background-color: white; border-radius: 6px; margin-top: 10px;">
        <thead>
          <th style="font-size:18px;"> Source </th>
          <th style="font-size:18px;"> Destination</th>
          <th style="font-size:18px;"> Date </th>
          <th style="font-size:18px;"> Stops</th>
          <th style="font-size:18px;"> Departure</th>
          <th style="font-size:18px;"> Arrival </th>
          <th style="font-size:18px;"> Days</th>
          <th style="font-size:18px;"> Fare </th>
          <th style="font-size:18px;"> Book!</th>
        </thead>
        <tbody>
          <?php foreach($available_buses as $ab){ ?>
            <tr >
              <td style="font-weight:100;"><?= $ab['source'] ?></td>
              <td style="font-weight:100;"><?=$ab['destination']?></td>
              <td style="font-weight:100;"><?= date('Y-m-d', strtotime($ab['bus_time']))?></td>
              <td style="font-weight:100;"><?=$ab['stops']?></td>
              <td style="font-weight:100;"><?=$ab['departure']?></td>
              <td style="font-weight:100;"><?=$ab['arrival']?></td>
              <td style="font-weight:100;"><?=$ab['day']?></td>
              <td style="font-weight:100;"><?=$ab['fare']?></td>
              <?php echo "<td><a class=\"btn btn-primary\" href=\"bookTicket?id=".$ab['schedule_id']."\">Book</a></td>"?>
              
            </tr>
          <?php } ?>
        </tbody>
      </table> 
      </div>            
      
      </div>
      </div>
      </div>
      </main>
      <!-- Page Footer-->
      <!-- Footer Default-->
      </div>
      <div class="col-md-12" style="margin-top: 50px">
      <?php }
      $this->load->view('layout/main_footer.php');
      ?>
      </div>
      </div>
      </body>
      </html>