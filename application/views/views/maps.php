<!DOCTYPE html>
<html>
  <head>
    <title>ADMIN-Google Maps</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <div id="dom-lat" style="display : none;">
        <?php 
          echo htmlspecialchars($info['lat']);
        ?>
    </div>
    <div id="dom-lng" style="display : none;">
        <?php 
          echo htmlspecialchars($info['lng']);
        ?>
    </div> 
    <div id="map"></div>
    <script>
      var map, infoWindow;
     function initMap() {
        var lat = Number(document.getElementById("dom-lat").textContent);
        console.log(lat);
        var lng = Number(document.getElementById("dom-lng").textContent);
        console.log(lng);
        var LatLng = {lat,lng};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: LatLng
        });

        var iconBase = 'http://localhost:8080/smart-travel/assets/images/admin/';

        var icons = {
          bus: {
            icon: iconBase + 'bus_marker_blue.jpg'
          }
        };

        var features = [
          {
            position: LatLng,
            type: 'bus'
          }
        ];

        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
        
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqy5PSXyj22SrTrWf6WtRz96K5n9QOyys&callback=initMap">
    </script>
  </body>
</html>