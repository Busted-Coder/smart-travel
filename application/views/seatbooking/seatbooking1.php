<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <head>
<?php
//include '../header.php';
    $this->load->view('layout/header.php');
?>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Seat Booking</title>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
  width: 200px;
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

<?php

    $this->load->view('layout/navigation.php');
    ?>
    
    <div class="container-fluid" style="margin-top: 75px;">
  <div class="row">
    <div class="col-md-12" align="center">
      <h2>
      Seat Booking
      </h2>
      <div class="row">
        
        <div class="col-md-6">
        <a id="modal-788038" href="#modal-container-788038" role="button" style="margin-top: 75px;" class="btn btn-primary" data-toggle="modal">Select a Seat here!</a>
          
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
                      <div id="seat-map">
                        <div class="front-indicator">Front</div>
                      </div>
                      <div class="booking-details">
                        <h2>Booking Details</h2>
                        <h3> Selected Seats (<span id="counter">0</span>):</h3>
                        <ul id="selected-seats">
                        </ul>
                        Total: <b>Rs. <span id="total">0</span></b>
                        <button class="checkout-button">Checkout &raquo;</button>
                        <div id="legend"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                   
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                  </button> 
                  <button type="button" class="btn btn-primary">
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
          <form role="form" action = "confirmseat" method="POST" name="seatform">
            <div class="form-group">
               
              <label for="fname">
                First Name
              </label>
              <input style="width: 400px;" type="text"  name="fname" class="form-control" id="fname">
            </div>
            <div class="form-group">
               
              <label for="lname">
                Last Name
              </label>
              <input style="width: 400px;" type="text" name="lname" class="form-control" id="lname">
            </div>

            <div class="form-group">
               
              <label for="email">
                Email address
              </label>
              <input style="width: 400px;" type="email" name="email" class="form-control" id="email" required>
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

              <input style="width: 400px;" type="text" hidden name="seatstobook" value="" id="seatstobook" required>
            </div>
            <button type="submit" class="btn btn-default">
              Submit
            </button>
          </form>
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
            'eeeee',
          ],
          seats: {
            e: {
              price   : <?= $schedule['fare'] ?>,
              classes : 'economy-class', //your custom CSS class
              category: 'Economy Class'
            }         
          
          },
          naming : {
            top : false,
            getLabel : function (character, row, column) {
              return firstSeatLabel++;
            },
          },
          legend : {
            node : $('#legend'),
              items : [
              [ 'e', 'available',   'Economy Class'],
              [ 'f', 'unavailable', 'Already Booked']
              ]         
          },
          click: function () {
            if (this.status() == 'available') {
              //let's create a new <li> which we'll add to the cart items
              $('<li>'+this.data().category+' Seat # '+this.settings.label+': <b>Rs. '+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                .attr('id', 'cart-item-'+this.settings.id)
                .data('seatId', this.settings.id)
                .appendTo($cart);
              
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
    
    </script>

    </body>
    


      <?php
      $this->load->view('layout/main_footer.php');
      ?>