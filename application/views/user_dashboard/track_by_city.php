<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Track By City</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li>Tracking Results
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>

<main class="page-content section-90 section-md-111 text-md-left">
  <section class="offset-top-60 offset-md-top-111">
      <div class="shell">
        <?php if ($data) { ?>
        <h2 class="text-bold"><?php echo count($data); ?> Result(s) Found</h2>
            <hr class="divider hr-md-left-0 bg-chathams-blue">
          <div class="range range-xs-center range-md-left offset-top-30 offset-md-top-65">
              <div class="cell-xs-10 cell-lg-9">
                <!-- Classic Responsive Table-->
                <table data-responsive="true" class="table table-custom table-primary table-fixed">
                    <b><tr>
                      <th>#</th>
                      <th>Source</th>
                      <th>Destination</th>
                      <th>Departure</th>
                      <th>Arrival</th>
                    </tr></b>
                    <?php $count = 0; 
                    foreach($data as $p){ 
                      $count = $count + 1;?>
                    <tr>
                      <td> <?php echo $count;?> </td>
                      <td> <?php echo $p->source ?> </td>
                      <td> <?php echo $p->destination ?> </td>
                      <td> <?php echo $p->departure ?> </td>
                      <td> <?php echo $p->arrival; if($p->day == 1){ echo " - Next Day";}else{echo " - Same Day";} ?> </td>
                    </tr>
                  <?php } ?>
                </table>
                <?php } else{ ?>
                <h2 class="text-bold"><?php echo count($data); ?> Result(s) Found For Given Preferences</h2>
               <table data-responsive="true" class="table table-custom table-primary table-fixed">
                    <b><tr>
                      <th>Selected City</th>
                      <th></th>
                      <th>City Type</th>
                    </tr></b>
                    <tr>
                      <td> <?php echo $this->session->userdata('tracking-city') ?> </td>
                      <td></td>
                      <td> <?php echo $this->session->userdata('tracking-type') ?> </td>   
                    </tr>
                </table>
                <?php } ?>
              </div>
          </div>
      </div>
  </section>
</main>