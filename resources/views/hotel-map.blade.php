<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
@foreach($hotel as $row)
<div id="map"></div>
<script>

      // The following example creates a marker in Stockholm, Sweden using a DROP
      // animation. Clicking on the marker will toggle the animation between a BOUNCE
      // animation and no animation.

      var marker;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: {lat: {{ $row->let }}, lng: {{ $row->long }}}
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: {{ $row->let }}, lng: {{ $row->long }}}
        });
        marker.addListener('click', toggleBounce);
      }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYLOCsnMuwFYBidIZ9GYGGm8jMAcIL7SM&callback=initMap"
    async defer></script>
    @endforeach
</body>
</html>