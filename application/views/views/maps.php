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
    <div id="dom-target" style="display : none;">
        <?php 
          echo htmlspecialchars($info['lat']);
          echo htmlspecialchars($info['lng']);
        ?>
    </div> 
    <div id="map"></div>
    <script>
      var map, infoWindow;
     function initMap() {
        var div = document.getElementById("dom-target");
        var myData = div.textContent;
        document.write(myData);
        var LatLng = {lat: 24.8555963, lng: 67.2119216};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: LatLng
        });

        var iconBase = 'http://localhost:80/smart-travel/assets/images/admin/';

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