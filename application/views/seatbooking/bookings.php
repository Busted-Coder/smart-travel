<!--<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Booking</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="index.html" class="text-white">Home</a></li>
                  <li><a href="destinations.html" class="text-white">Ticket</a></li>
                  <li>Seat Selection
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Smart Travel</title>
    <link rel="icon" href="<?php echo PATH; ?>images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<title>Seat Booking</title>-->

    
    

   <!-- Latest compiled and minified CSS -->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity=" sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>css/jquery.seat-charts.css">


    <style>
      body {
        font-family: 'Roboto', sans-serif;
        background-color:#fafafa;
      }
      a {
        color: #b71a4c;
      }
      .front-indicator {
        width: 145px;
        margin: 5px 32px 15px 32px;
        background-color: #f6f6f6;  
        color: #adadad;
        text-align: center;
        padding: 3px;
        border-radius: 5px;
      }
      .wrapper {
        width: 100%;
        text-align: center;
        margin-top:150px;
      }
      .container {
        margin: 0 auto;
        width: 500px;
        text-align: left;
      }
      .booking-details {
        float: left;
        text-align: left;
        margin-left: 35px;
        font-size: 12px;
        position: relative;
        height: 401px;
      }
      .booking-details h2 {
        margin: 25px 0 20px 0;
        font-size: 17px;
      }
      .booking-details h3 {
        margin: 5px 5px 0 0;
        font-size: 14px;
      }
      div.seatCharts-cell {
        color: #182C4E;
        height: 25px;
        width: 25px;
        line-height: 25px;
        
      }
      div.seatCharts-seat {
        color: #FFFFFF;
        cursor: pointer;  
      }
      div.seatCharts-row {
        height: 35px;
        width: 225px;
      }
      div.seatCharts-seat.available {
        background-color: #B9DEA0;

      }
      div.seatCharts-seat.available.first-class {
      /*  background: url(vip.png); */
        background-color: #3a78c3;
      }
      div.seatCharts-seat.focused {
        background-color: #76B474;
      }
      div.seatCharts-seat.selected {
        background-color: #E6CAC4;
      }
      div.seatCharts-seat.unavailable {
        background-color: #472B34;
      }
      div.seatCharts-container {
        border-right: 1px dotted #adadad;
        width: 225px;
        padding: 20px;
        float: left;
      }
      div.seatCharts-legend {
        padding-left: 0px;
        position: absolute;
        bottom: 16px;
      }
      ul.seatCharts-legendList {
        padding-left: 0px;
      }
      span.seatCharts-legendDescription {
        margin-left: 5px;
        line-height: 30px;
      }
      .checkout-button {
        display: block;
        margin: 10px 0;
        font-size: 14px;
      }
      #selected-seats {
        max-height: 90px;
        overflow-y: scroll;
        overflow-x: none;
        width: 170px;
      }
    </style>
  </head>
  <body>
    <!--<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Smart Travel</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="<?php echo base_url();?>">Home</a>
						</li>
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<?php if ($this->session->userdata('userData'))
						{?>
						<li>
							<a href="logout">Logout</a>
						</li>
						<?php }
						else{
						?>
						<li>
							<a href="login">Login</a>
						</li>
						<?php } ?>
					</ul>
				</div>
				
			</nav>-->
    <div class="container-fluid" style="margin-top: 50px;">
	    <div class="row">
		    <div class="col-md-12" align="center">
			   <h2>
			   Seat Booking
			   </h2>
			   <div class="row">
				
				    <div class="col-md-6">
              <br><br><br><br>
				      <a id="modal-788038" href="#modal-container-788038" role="button" style="margin-top: 75px;" class="btn btn-primary" data-toggle="modal">Select a    Seat here!</a>
					
					    <div class="modal fade" id="modal-container-788038" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
							    <div class="modal-content">
								    <div class="modal-header">
									    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										     ×
  									  </button>
	  								  <h4 class="modal-title" id="myModalLabel">
		 								    Book a Ticket
		  							  </h4>
			  					  </div>
								    <div class="modal-body" style="width: 760px">
								      <div class="wrapper" style="margin-top: 0px">
							          <div class="container" style="margin-top: 0px">
							            <h1>Book a Seat</h1>
                          <h5 style="padding-left: 25px">You can select only <span style="color: red">1</span> seat.</h5>
			  				          <div id="seat-map">
				  			            <div class="front-indicator">Front</div>
					  		          </div>
						  	          <div class="booking-details">
							              <h2>Booking Details</h2>
								            <h3> Selected Seats (<span id="counter">0</span>):</h3>
                            <ul id="selected-seats"></ul>
								            Total: <b>Rs. <span id="total">0</span></b>
								            <div id="legend"></div>
	  							        </div>
		  					        </div>
			  				      </div>
				  		      </div>
  								  <div class="modal-footer">
	  							    <button type="button" class="btn btn-default" data-dismiss="modal">
		  							    Close
			  					    </button> 
				  				    <button type="button" class="btn btn-primary" data-dismiss="modal">
					  				    Save changes
						  		    </button>
							      </div>
							    </div>
							  </div>
					    </div>
			      </div>
			      <div class="col-md-6" style="margin-top: 50px; ">
			        <h3>Enter Details</h3>
			        <br>
      					<form role="form"  action="<?php echo site_url('index.php/ticket/final_booking_random') ?>" method="POST" name="seatform">
                  <div class="form-group">
      							 
      							<label for="fname">
      								First Name
      							</label>
      							<input style="width: 400px;" type="text"  name="fname" class="form-control" id="fname" required>
      						</div>
      						<div class="form-group">
      							 
      							<label for="lname">
      								Last Name
      							</label>
      							<input style="width: 400px;" type="text" name="lname" class="form-control" id="lname" required>
      						</div>
						      <div class="form-group">
							 
						      	<label for="email">
						      		Email address
						      	</label>
						      	<input style="width: 400px;" type="email" name="email" class="form-control" id="email" required>
						      </div>
                  <div class="form-group">
                    <label for="gender">
                      Gender
                    </label>
                      <select style="width: 400px;" required name="gender" class="form-control">
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                      </select>
                  </div>
						      <div class="form-group">
							 
							     <label for="phone">
							     	Phone
							          </label>
							     <input style="width: 400px;" type="text" name="phone" class="form-control" id="phone" required>
						      </div>
						      <div class="form-group">
							 
						      	<label for="cnic">
						      		CNIC
						      	</label>
						      	<input style="width: 400px;" type="text" name="cnic" class="form-control" id="cnic" required>	
                    <input type="hidden" id="avail" name="avail">				  
                  </div>
                  <div class="form-group">
               
                    <label for="cnic">
                      Seat #
                    </label>
                      <input style="width: 400px;" type="text" name="seatno" class="form-control" id="seatno" readonly>
                  </div>
                  <input type="submit" value="Proceed" class="btn btn-success" onClick="return doconfirm();" />
					     </form>
				    </div>
			   </div>
        </div>
      </div>
    </div>

   <!-- Latest compiled and minified JavaScript -->
          <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script> 
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          <script src="<?php echo PATH; ?>js/jquery.seat-charts.js"></script> 
          <script>
            var firstSeatLabel = 1;
    
            $(document).ready(function() {
              var $cart = $('#selected-seats'),
                $counter = $('#counter'),
                $total = $('#total'),
                $option = 1,
                $avail = 0;
                sc = $('#seat-map').seatCharts({
                map: [
                  'ee_ee',
                  'ee_ee',
                  'ee_ee',
                  'ee_ee',
                  'ee_ee',
                  'ee_ee',
                  'ee_ee',
                  'ee_ee',
                  'ee_ee',
                  'ee_ee',
                ],
                seats: {
                  e: {
                    price   : <?php
                                $f = $schedule['fare'];
                                $this->session->set_userdata('offer_price',$f);
                                $this->session->set_userdata('offer_value',0);
                                echo $f; ?>,
                    classes : 'economy-class', //your custom CSS class
                    category: 'Economy Class'
                  }         
          /*php
                                $f = $schdeule['fare'];
                                $this->session->set_userdata('offer_price',$f);
                                $this->session->set_userdata('offer_value',0);
                                echo $schdeule['fare'];
            */    },
                naming : {
                  top : false,
                  getLabel : function (character, row, column) {
                    return firstSeatLabel++;
                  },
                },
                legend : {
                  node : $('#legend'),
                    items : [
                    [ 'e', 'available',   'Available Seats'],
                    [ 'f', 'unavailable', 'Already Booked']
                    ]         
                },
                click: function () {
                  if (this.status() == 'available' && $avail < $option) {
                    //let's create a new <li> which we'll add to the cart items
                    $('<li>'+this.data().category+' Seat # '+this.settings.label+': <b>Rs. '+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                      .attr('id', 'cart-item-'+this.settings.id)
                      .data('seatId', this.settings.id)
                      .appendTo($cart);
                      document.querySelector('#seatno').value = this.settings.label;
                      $avail++;
                      document.querySelector('#avail').value = $avail;
                      console.log(this.settings.label);
                    /*
                     * Lets update the counter and total
                     *
                     * .find function will not find the current seat, because it will change its stauts only after return
                     * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                     */
                    $counter.text(sc.find('selected').length+1);
                    $total.text(recalculateTotal(sc)+this.data().price);
              
                    return 'selected';
                  } else if (this.status() == 'selected') {
              //update the counter
                    $counter.text(sc.find('selected').length-1);
                    $avail--;
                    document.querySelector('#avail').value = $avail;
                    document.querySelector('#seatno').value = "";
              //and total
                    $total.text(recalculateTotal(sc)-this.data().price);
            
              //remove the item from our cart
                    $('#cart-item-'+this.settings.id).remove();
            
              //seat has been vacated
                    return 'available';
                          } else if (this.status() == 'unavailable') {
                    //seat has been already booked
                    return 'unavailable';
                  } else {
                    return this.style();
                  }
                }
              });

              //this will handle "[cancel]" link clicks
              $('#selected-seats').on('click', '.cancel-cart-item', function () {
                //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
                sc.get($(this).parents('li:first').data('seatId')).click();
              });

              //let's pretend some seats have already been booked
              sc.get(['1_2','1_3', '4_1', '7_1', '7_2','10_3','8_3','11_2','14_4']).status('unavailable');
    
            });

            function recalculateTotal(sc) {
             var total = 0;
    
              //basically find every selected seat and sum its price
             sc.find('selected').each(function () {
             total += this.data().price;
             });
      
             return total;
              }

              function doconfirm(){
                var avl = document.getElementById('avail').value;
                if(avl < 1){
                  var alr = "Please select a seat.";
                  alert(alr);
                  return false;
                } 
              }
    
          </script>
  </body>
</html>